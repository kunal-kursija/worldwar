<?php

namespace Drupal\worldwar\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\worldwar\WorldWarTwoArmsService;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;

/**
 * Provides World War Block.
 *
 * @Block(
 *   id = "world_war_block",
 *   admin_label = @Translation("World War Block"),
 *   category = @Translation("Custom")
 * )
 */
class WorldWarBlock extends BlockBase implements ContainerFactoryPluginInterface {

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
  public function __construct(array $configuration, $plugin_id, $plugin_definition, WorldWarTwoArmsService $worldWarTwoArms) {
    parent::__construct($configuration, $plugin_id, $plugin_definition);
    $this->worldWarTwoArms = $worldWarTwoArms->GetWorldWarTwoArms();
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static(
      $configuration,
      $plugin_id,
      $plugin_definition,
      $container->get('worldwar.two.arms.service')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    // Part 1.
    return array(
      '#markup' => $this->t('World is at peace.'),
    );
    // Part 2.
    /*return array(
      '#markup' => $this->worldWarTwoArms,
    );*/
  }

}