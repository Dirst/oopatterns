<?php

namespace Dirst\OoPatterns\DesignPrinciples\strategy\pattern;

/**
 * Child class of the Car.
 *
 * @author Dirst <dirst.guy@gmail.com>
 */
class sportCar extends Car {

  /**
   * Constructor.
   *
   * @notice
   *   Here we add fueling behaviour to this class.
   *   Just one line and now sportCar can use Gas Fueling behaviour.
   *   No code doubling. Possible code reusing in other classes. We also can assign
   *   another Fueling behaviour during runtime.
   *   
   *   But still we have a problem. Class Constructor knows what type of object
   *   will be passed to fuelingBehaviour var. 
   */
  public function __construct() {
    $this->fuelingBehaviour = new GasFueling();
  }

  /**
   * Show a sport car.
   */
  public function showCar() {
    print "Sport car is showed";
  }
}
