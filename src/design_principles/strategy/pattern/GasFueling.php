<?php

namespace Dirst\OoPatterns\DesignPrinciples\strategy\pattern;

/**
 * Class implements fueling with gas
 *
 * @author Dirst <dirst.guy@gmail.com>
 */
class GasFueling implements FuelingInterface {

  /**
   * Fuel Car with Gas.
   */
  public function carFueling() {
    print "Fueled with gas";
  }
}
