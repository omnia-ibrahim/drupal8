<?php

namespace Drupal\dino_roar\Entity;

use Drupal\views\EntityViewsData;

/**
 * Provides Views data for hi entities.
 */
class fooViewsData extends EntityViewsData {

  /**
   * {@inheritdoc}
   */
  public function getViewsData() {
    $data = parent::getViewsData();

    // Additional information for Views integration, such as table joins, can be
    // put here.

    return $data;
  }

}
