<?php

namespace Dirst\OoPatterns\DesignPrinciples\decorator\pattern;

/**
 * Specific feature decorator.
 *
 * @author Dirst <dirst.guy@gmail.com>
 */
class ColoredFeature extends FeaturesDecorator {

  /**
   * Draw feature.
   */
  public function draw() {
    return $this->figure->draw() . " make colored";  
  }
}
