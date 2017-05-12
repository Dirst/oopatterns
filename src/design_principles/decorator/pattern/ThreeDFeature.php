<?php

namespace Dirst\OoPatterns\DesignPrinciples\decorator\pattern;

/**
 * Specific Feature decorator.
 *
 * @author Dirst <dirst.guy@gmail.com>
 */
class ThreeDFeature extends FeaturesDecorator {

  /**
   * Draw feature.
   */
  public function draw() {
    return $this->figure->draw() . " make 3d";  
  }
}
