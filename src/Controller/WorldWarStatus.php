<?php

namespace Drupal\worldwar\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class WorldWarStatus
 *
 * @package Drupal\worldwar\Controller
 */
class WorldWarStatus extends ControllerBase {

  /**
   * Returns the world war status.
   *
   * @return array
   *   Returns a Render Array.
   */
  public function getstatus() {
    $status = array(
      '#markup' => $this->t('There is no war going on.'),
    );
    return $status;
  }
}
