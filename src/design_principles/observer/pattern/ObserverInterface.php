<?php

namespace Dirst\OoPatterns\DesignPrinciples\observer\pattern;

/**
 * Inteface for observer.
 *
 * @author Dirst <dirst.guy@gmail.com>
 */
interface ObserverInterface {
  /**
   * Update observer on notify.
   * 
   * @param string $state1
   * @param string $state2
   */
  public function updateOnNotify($state1, $state2);
  
  /**
   * Gets id of current observer. 
   */
  public function getId();
}
