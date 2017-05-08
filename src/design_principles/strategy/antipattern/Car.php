<?php

namespace Dirst\OoPatterns\DesignPrinciples\strategy\antipattern;

/**
 * Base class for all cars
 *
 * @author Dirst <dirst.guy@gmail.com>
 */
abstract class Car {
  
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

  /**
   * Fill up with Gas.
   *
   * @notice
   *   Here is an inheritance problem. If we'll have some type of car(child class) 
   *   which can't be filled with gas, a toyCar for example, than we gotta 
   *   override this method. It is not a big problem if there is one or two 
   *   child classes. But if there is many of it than there is a problem with
   *   maintainability.
   */
  public function fillWithGas() {
    print "Car is filled with gas";
  }
}
