<?php

namespace Dirst\OoPatterns\DesignPrinciples\decorator\pattern;

/**
 * Specific geometric figure - square.
 *
 * @author Dirst <dirst.guy@gmail.com>
 */
class SquareFigure extends Figure {

  /**
   * {@inheritdoc}
   * Here we draw square only.
   */
  public function draw() {
    print "We draw a square";
  }
}
