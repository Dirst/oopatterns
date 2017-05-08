<?php

namespace Dirst\OoPatterns\DesignPrinciples\strategy\pattern;

/**
 * Base class for all cars
 *
 * @author Dirst <dirst.guy@gmail.com>
 */
abstract class Car {
  
  // @var FuelingInterface object.
  protected $fuelingBehaviour;
  
  /**
   * Perform driving.
   */
  public function doDrive() {
    print "Car Drives";
  }

  /**
   * Open the door.
   */
  public function openDoor() {
    print "Door opened";
  }

  /**
   * Performs car fueling.
   *
   * @notice 
   *   No need to know what type of fueling is in the fuelingBehaviour 
   *   until it could do carFueling method. 
   */
  public function performFueling() {
    $this->fuelingBehaviour->carFueling();
  }

  /**
   * Set fueling behaviour
   * @param \Dirst\OoPatterns\DesignPrinciples\ex1\pattern\FuelingInterface $fuelingBehaviour
   * 
   * @notice
   *   With this method we can dynamicly change fueling behaviour during runtime.
   */
  public function setFuelingBehaviour(FuelingInterface $fuelingBehaviour) {
    $this->fuelingBehaviour = $fuelingBehaviour;
  }

  /**
   * Shows car on the display.
   */
  abstract public function showCar();
}
