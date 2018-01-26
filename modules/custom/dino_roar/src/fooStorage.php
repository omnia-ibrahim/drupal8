<?php

namespace Drupal\dino_roar;

use Drupal\Core\Entity\Sql\SqlContentEntityStorage;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Language\LanguageInterface;
use Drupal\dino_roar\Entity\fooInterface;

/**
 * Defines the storage handler class for hi entities.
 *
 * This extends the base storage class, adding required special handling for
 * hi entities.
 *
 * @ingroup dino_roar
 */
class fooStorage extends SqlContentEntityStorage implements fooStorageInterface {

  /**
   * {@inheritdoc}
   */
  public function revisionIds(fooInterface $entity) {
    return $this->database->query(
      'SELECT vid FROM {foo_revision} WHERE id=:id ORDER BY vid',
      [':id' => $entity->id()]
    )->fetchCol();
  }

  /**
   * {@inheritdoc}
   */
  public function userRevisionIds(AccountInterface $account) {
    return $this->database->query(
      'SELECT vid FROM {foo_field_revision} WHERE uid = :uid ORDER BY vid',
      [':uid' => $account->id()]
    )->fetchCol();
  }

  /**
   * {@inheritdoc}
   */
  public function countDefaultLanguageRevisions(fooInterface $entity) {
    return $this->database->query('SELECT COUNT(*) FROM {foo_field_revision} WHERE id = :id AND default_langcode = 1', [':id' => $entity->id()])
      ->fetchField();
  }

  /**
   * {@inheritdoc}
   */
  public function clearRevisionsLanguage(LanguageInterface $language) {
    return $this->database->update('foo_revision')
      ->fields(['langcode' => LanguageInterface::LANGCODE_NOT_SPECIFIED])
      ->condition('langcode', $language->getId())
      ->execute();
  }

}
