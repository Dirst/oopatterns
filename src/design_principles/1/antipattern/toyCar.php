<?php

namespace Dirst\OoPatterns\DesignPrinciples\ex1\antipattern;

/**
 * Child class of the Car.
 *
 * @author Dirst <dirst.guy@gmail.com>
 */
class toyCar extends Car {
  
  /**
   * Show toy car.
   */
  public function showCar() {
    print "Toy car is showed";
  }
  
  /**
   * Override parent class method to do nothing.
   * 
   * @notice
   *   If we have to inherit every time from base class with
   *   this method, than we have to not forget to override this method every time.
   *   What if there'll be many such child classes?
   *   What if there'll be many such methods?
   */
  public function fillWithGas() {
    print "Do nothing";
  }
}
