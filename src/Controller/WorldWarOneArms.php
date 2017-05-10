<?php

namespace Drupal\worldwar\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class WorldWarOneArms
 *
 * @package Drupal\worldwar\Controller
 */
class WorldWarOneArms extends ControllerBase {

  /**
   * Returns the arms used in world war one.
   *
   * @return array
   *   Returns a Render Array.
   */
  public function getarms() {
    // Call service globally by passing the service ID.
    $world_war_arms = \Drupal::service('worldwar.one.arms.service')->GetWorldWarOneArms();
    // Arms Array.
    $arms = array(
      '#markup' => $this->t($world_war_arms),
    );
    // Send Arms.
    return $arms;
  }
}
