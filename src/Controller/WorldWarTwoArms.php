<?php

namespace Drupal\worldwar\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\worldwar\WorldWarTwoArmsService;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Class WorldWarTwoArms
 *
 * @package Drupal\worldwar\Controller
 */
class WorldWarTwoArms extends ControllerBase {

  /**
   * Variable for worldWarTwoArms.
   *
   * @var string
   */
  protected $worldWarTwoArms;

  /**
   * WorldWarTwoArms constructor.
   *
   * @param WorldWarTwoArmsService $worldWarTwoArms
   */
  public function __construct(WorldWarTwoArmsService $worldWarTwoArms) {
    $this->worldWarTwoArms = $worldWarTwoArms->GetWorldWarTwoArms();
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('worldwar.two.arms.service')
    );
  }

  /**
   * Returns the arms used in world war two.
   *
   * @return array
   *   Returns a Render Array.
   */
  public function getarms() {
    // Arms Array.
    $arms = array(
      '#markup' => $this->worldWarTwoArms,
    );
    // Send Arms.
    return $arms;
  }
}
