<?php

namespace Dirst\OoPatterns\DesignPrinciples\decorator\antipattern;

/**
 * Main Geometric figure class
 *
 * @author Dirst <dirst.guy@gmail.com>
 */
abstract class Figure {

  // additionnal features.
  private $colored;
  private $dashed;
  private $threeDimensional;

  /**
   * Set colored.
   * For simplification we are not using specific color.
   */
  public function setColored() {
    $this->colored = true;      
  }

  /**
   * Set 3d.
   */
  public function set3D() {
    $this->threeDimensional = true;      
  }

  /**
   * Set dashed.
   */
  public function setDashed() {
    $this->dashed = true;      
  }

  /**
   * Get figure name;
   */
  abstract public function getName();
  
  /**
   * Lets draw the figure.
   * We not really draw anything.
   * Just show messages, about this, for simplification
   * 
   * @return array
   *   $additional feature.
   */
  public function draw() {
    $additional = [];
    if ($this->colored) {
      $additional[] = $this->getName(). " color added";
    }
    if ($this->threeDimensional) {
      $additional[] = $this->getName() . " 3d added";
    }
    if ($this->dashed) {
      $additional[] = $this->getName() . " dash added";
    }
    
    return $additional;
  }
}
