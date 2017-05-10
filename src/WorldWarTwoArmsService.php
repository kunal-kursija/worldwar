<?php

namespace Drupal\worldwar;

/**
 * Class WorldWarTwoArmsService
 *
 * @package Drupal\worldwar
 */
class WorldWarTwoArmsService {

  /**
   * Variable for worldWarOneArms.
   *
   * @var string
   */
  protected $worldWarOneArms;

  /**
   * WorldWarTwoArmsService constructor.
   *
   * @param WorldWarOneArmsService $worldWarOneArms
   */
  public function __construct(WorldWarOneArmsService $worldWarOneArms) {
    $this->worldWarOneArms = $worldWarOneArms->GetWorldWarOneArms();
  }

  /**
   * Returns Arms.
   *
   * @return string
   */
  public function GetWorldWarTwoArms() {
    return $this->worldWarOneArms . ', ' . 'Missiles, Rocket Launchers, Nuclear Bombs';
  }

}
