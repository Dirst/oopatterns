<?php

namespace Dirst\OoPatterns\DesignPrinciples\observer\pattern;

/**
 * Base class for modules.
 *
 * @notice
 *   Interface implementation is not required here as we already have abstract class.
 * @author Dirst <dirst.guy@gmail.com>
 */
abstract class Module implements ObserverInterface {

  // @var string - id of a module.
  protected $id;

  /**
   * Creates uniqid for module.
   * Will be used in 
   */
  public function __construct() {
    $this->id = uniqid();
  }
  
  /**
   * Update observer on notify.
   * 
   * @param string $state1
   * @param string $state2
   */
  abstract public function updateOnNotify($state1, $state2);

  /**
   * Get Id of Observer.
   */
  public function getId() {
    return $this->id;
  }
}
