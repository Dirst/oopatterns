<?php

namespace Dirst\OoPatterns\DesignPrinciples\strategy\antipattern;

/**
 * Base class for all cars
 *
 * @author Dirst <dirst.guy@gmail.com>
 */
abstract class Car2 {
  
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
   * Shows car on the display.
   */
  abstract public function showCar();
}
