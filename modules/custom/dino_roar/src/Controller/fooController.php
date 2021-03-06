<?php

namespace Drupal\dino_roar\Controller;

use Drupal\Component\Utility\Xss;
use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\DependencyInjection\ContainerInjectionInterface;
use Drupal\Core\Url;
use Drupal\dino_roar\Entity\fooInterface;

/**
 * Class fooController.
 *
 *  Returns responses for hi routes.
 */
class fooController extends ControllerBase implements ContainerInjectionInterface {

  /**
   * Displays a hi  revision.
   *
   * @param int $foo_revision
   *   The hi  revision ID.
   *
   * @return array
   *   An array suitable for drupal_render().
   */
  public function revisionShow($foo_revision) {
    $foo = $this->entityManager()->getStorage('foo')->loadRevision($foo_revision);
    $view_builder = $this->entityManager()->getViewBuilder('foo');

    return $view_builder->view($foo);
  }

  /**
   * Page title callback for a hi  revision.
   *
   * @param int $foo_revision
   *   The hi  revision ID.
   *
   * @return string
   *   The page title.
   */
  public function revisionPageTitle($foo_revision) {
    $foo = $this->entityManager()->getStorage('foo')->loadRevision($foo_revision);
    return $this->t('Revision of %title from %date', ['%title' => $foo->label(), '%date' => format_date($foo->getRevisionCreationTime())]);
  }

  /**
   * Generates an overview table of older revisions of a hi .
   *
   * @param \Drupal\dino_roar\Entity\fooInterface $foo
   *   A hi  object.
   *
   * @return array
   *   An array as expected by drupal_render().
   */
  public function revisionOverview(fooInterface $foo) {
    $account = $this->currentUser();
    $langcode = $foo->language()->getId();
    $langname = $foo->language()->getName();
    $languages = $foo->getTranslationLanguages();
    $has_translations = (count($languages) > 1);
    $foo_storage = $this->entityManager()->getStorage('foo');

    $build['#title'] = $has_translations ? $this->t('@langname revisions for %title', ['@langname' => $langname, '%title' => $foo->label()]) : $this->t('Revisions for %title', ['%title' => $foo->label()]);
    $header = [$this->t('Revision'), $this->t('Operations')];

    $revert_permission = (($account->hasPermission("revert all hi revisions") || $account->hasPermission('administer hi entities')));
    $delete_permission = (($account->hasPermission("delete all hi revisions") || $account->hasPermission('administer hi entities')));

    $rows = [];

    $vids = $foo_storage->revisionIds($foo);

    $latest_revision = TRUE;

    foreach (array_reverse($vids) as $vid) {
      /** @var \Drupal\dino_roar\fooInterface $revision */
      $revision = $foo_storage->loadRevision($vid);
      // Only show revisions that are affected by the language that is being
      // displayed.
      if ($revision->hasTranslation($langcode) && $revision->getTranslation($langcode)->isRevisionTranslationAffected()) {
        $username = [
          '#theme' => 'username',
          '#account' => $revision->getRevisionUser(),
        ];

        // Use revision link to link to revisions that are not active.
        $date = \Drupal::service('date.formatter')->format($revision->getRevisionCreationTime(), 'short');
        if ($vid != $foo->getRevisionId()) {
          $link = $this->l($date, new Url('entity.foo.revision', ['foo' => $foo->id(), 'foo_revision' => $vid]));
        }
        else {
          $link = $foo->link($date);
        }

        $row = [];
        $column = [
          'data' => [
            '#type' => 'inline_template',
            '#template' => '{% trans %}{{ date }} by {{ username }}{% endtrans %}{% if message %}<p class="revision-log">{{ message }}</p>{% endif %}',
            '#context' => [
              'date' => $link,
              'username' => \Drupal::service('renderer')->renderPlain($username),
              'message' => ['#markup' => $revision->getRevisionLogMessage(), '#allowed_tags' => Xss::getHtmlTagList()],
            ],
          ],
        ];
        $row[] = $column;

        if ($latest_revision) {
          $row[] = [
            'data' => [
              '#prefix' => '<em>',
              '#markup' => $this->t('Current revision'),
              '#suffix' => '</em>',
            ],
          ];
          foreach ($row as &$current) {
            $current['class'] = ['revision-current'];
          }
          $latest_revision = FALSE;
        }
        else {
          $links = [];
          if ($revert_permission) {
            $links['revert'] = [
              'title' => $this->t('Revert'),
              'url' => $has_translations ?
              Url::fromRoute('entity.foo.translation_revert', ['foo' => $foo->id(), 'foo_revision' => $vid, 'langcode' => $langcode]) :
              Url::fromRoute('entity.foo.revision_revert', ['foo' => $foo->id(), 'foo_revision' => $vid]),
            ];
          }

          if ($delete_permission) {
            $links['delete'] = [
              'title' => $this->t('Delete'),
              'url' => Url::fromRoute('entity.foo.revision_delete', ['foo' => $foo->id(), 'foo_revision' => $vid]),
            ];
          }

          $row[] = [
            'data' => [
              '#type' => 'operations',
              '#links' => $links,
            ],
          ];
        }

        $rows[] = $row;
      }
    }

    $build['foo_revisions_table'] = [
      '#theme' => 'table',
      '#rows' => $rows,
      '#header' => $header,
    ];

    return $build;
  }

}
