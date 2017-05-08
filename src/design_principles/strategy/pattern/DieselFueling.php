<?php

namespace Dirst\OoPatterns\DesignPrinciples\strategy\pattern;

/**
 * Class implements fueling with diesel.
 *
 * @author Dirst <dirst.guy@gmail.com>
 */
class DieselFueling implements FuelingInterface {

  /**
   * Fuel Car with Diesel.
   */
  public function carFueling() {
    print "Fueled with diesel";
  }
}
