<?php

namespace Dirst\OoPatterns\DesignPrinciples\decorator\antipattern;

/**
 * Specific geometric figure - square.
 *
 * @author Dirst <dirst.guy@gmail.com>
 */
class SquareFigure extends Figure {

  /**
   * {@inheritdoc}
   */
  public function getName() {
    return "Square";
  }

  /**
   * {@inheritdoc}
   * Here we draw square and then implement additional features to it.
   */
  public function draw() {
    print "We draw a square" . " " . implode(",", parent::draw($this));
  }
}
