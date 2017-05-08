<?php

namespace Dirst\OoPatterns\DesignPrinciples\strategy\pattern;

/**
 * Interface for cars fueling
 *
 * @author Dirst <dirst.guy@gmail.com>
 */
interface FuelingInterface {

  /**
   * Fill subject with Fuel.
   */
  public function carFueling();
}
