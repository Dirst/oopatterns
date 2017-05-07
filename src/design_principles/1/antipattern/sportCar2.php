<?php

namespace Dirst\OoPatterns\DesignPrinciples\ex1\antipattern;

/**
 * Child class of the Car.
 *
 * @author Dirst <dirst.guy@gmail.com>
 */
class sportCar2 extends Car2 implements FillableInterface {
  
  /**
   * Show a sport car.
   */
  public function showCar() {
    print "Sport car is showed";
  }

  /**
   * Override parent class method to do nothing.
   * 
   * @notice
   *   This time we implement the interface and not override parrent class.
   *   It is bad because code can't be reused. And now every of child class have
   *   to implement this interface.
   */
  public function fillWithGas() {
    print "Filled With sport gas";
  }
}
