<?php

namespace Drupal\dino_roar;

use Drupal\Core\Entity\ContentEntityStorageInterface;
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
interface fooStorageInterface extends ContentEntityStorageInterface {

  /**
   * Gets a list of hi revision IDs for a specific hi.
   *
   * @param \Drupal\dino_roar\Entity\fooInterface $entity
   *   The hi entity.
   *
   * @return int[]
   *   hi revision IDs (in ascending order).
   */
  public function revisionIds(fooInterface $entity);

  /**
   * Gets a list of revision IDs having a given user as hi author.
   *
   * @param \Drupal\Core\Session\AccountInterface $account
   *   The user entity.
   *
   * @return int[]
   *   hi revision IDs (in ascending order).
   */
  public function userRevisionIds(AccountInterface $account);

  /**
   * Counts the number of revisions in the default language.
   *
   * @param \Drupal\dino_roar\Entity\fooInterface $entity
   *   The hi entity.
   *
   * @return int
   *   The number of revisions in the default language.
   */
  public function countDefaultLanguageRevisions(fooInterface $entity);

  /**
   * Unsets the language for all hi with the given language.
   *
   * @param \Drupal\Core\Language\LanguageInterface $language
   *   The language object.
   */
  public function clearRevisionsLanguage(LanguageInterface $language);

}
