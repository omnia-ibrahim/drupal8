<?php

namespace Drupal\dino_roar\Entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\RevisionLogInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining hi entities.
 *
 * @ingroup dino_roar
 */
interface fooInterface extends ContentEntityInterface, RevisionLogInterface, EntityChangedInterface, EntityOwnerInterface {

  // Add get/set methods for your configuration properties here.

  /**
   * Gets the hi name.
   *
   * @return string
   *   Name of the hi.
   */
  public function getName();

  /**
   * Sets the hi name.
   *
   * @param string $name
   *   The hi name.
   *
   * @return \Drupal\dino_roar\Entity\fooInterface
   *   The called hi entity.
   */
  public function setName($name);

  /**
   * Gets the hi creation timestamp.
   *
   * @return int
   *   Creation timestamp of the hi.
   */
  public function getCreatedTime();

  /**
   * Sets the hi creation timestamp.
   *
   * @param int $timestamp
   *   The hi creation timestamp.
   *
   * @return \Drupal\dino_roar\Entity\fooInterface
   *   The called hi entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the hi published status indicator.
   *
   * Unpublished hi are only visible to restricted users.
   *
   * @return bool
   *   TRUE if the hi is published.
   */
  public function isPublished();

  /**
   * Sets the published status of a hi.
   *
   * @param bool $published
   *   TRUE to set this hi to published, FALSE to set it to unpublished.
   *
   * @return \Drupal\dino_roar\Entity\fooInterface
   *   The called hi entity.
   */
  public function setPublished($published);

  /**
   * Gets the hi revision creation timestamp.
   *
   * @return int
   *   The UNIX timestamp of when this revision was created.
   */
  public function getRevisionCreationTime();

  /**
   * Sets the hi revision creation timestamp.
   *
   * @param int $timestamp
   *   The UNIX timestamp of when this revision was created.
   *
   * @return \Drupal\dino_roar\Entity\fooInterface
   *   The called hi entity.
   */
  public function setRevisionCreationTime($timestamp);

  /**
   * Gets the hi revision author.
   *
   * @return \Drupal\user\UserInterface
   *   The user entity for the revision author.
   */
  public function getRevisionUser();

  /**
   * Sets the hi revision author.
   *
   * @param int $uid
   *   The user ID of the revision author.
   *
   * @return \Drupal\dino_roar\Entity\fooInterface
   *   The called hi entity.
   */
  public function setRevisionUserId($uid);

}
