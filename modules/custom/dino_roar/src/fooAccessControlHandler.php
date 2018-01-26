<?php

namespace Drupal\dino_roar;

use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * Access controller for the hi entity.
 *
 * @see \Drupal\dino_roar\Entity\foo.
 */
class fooAccessControlHandler extends EntityAccessControlHandler {

  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, AccountInterface $account) {
    /** @var \Drupal\dino_roar\Entity\fooInterface $entity */
    switch ($operation) {
      case 'view':
        if (!$entity->isPublished()) {
          return AccessResult::allowedIfHasPermission($account, 'view unpublished hi entities');
        }
        return AccessResult::allowedIfHasPermission($account, 'view published hi entities');

      case 'update':
        return AccessResult::allowedIfHasPermission($account, 'edit hi entities');

      case 'delete':
        return AccessResult::allowedIfHasPermission($account, 'delete hi entities');
    }

    // Unknown operation, no opinion.
    return AccessResult::neutral();
  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    return AccessResult::allowedIfHasPermission($account, 'add hi entities');
  }

}
