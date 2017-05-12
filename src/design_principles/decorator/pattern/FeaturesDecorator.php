<?php

namespace Dirst\OoPatterns\DesignPrinciples\decorator\pattern;

/**
 * This dmain decorator class needed for declarative purpose only.
 * To not mix features decorators and Figures. 
 *
 * @author Dirst <dirst.guy@gmail.com>
 */
abstract class FeaturesDecorator extends Figure {
  // @var Figure object.
  protected $figure;

  /**
   * Decorate object of superclass figure.
   *
   * @param Figure $figure
   *   Decorated object.
   */
  public function __construct(Figure $figure) {
    $this->figure = $figure;
  }
}
