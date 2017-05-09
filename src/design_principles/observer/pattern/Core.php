<?php

namespace Dirst\OoPatterns\DesignPrinciples\observer\pattern;

/**
 * Main core class.
 *
 * @author Dirst <dirst.guy@gmail.com>
 */
class Core implements ObservableInterface {
  private $state1;
  private $state2;
  
  // @var array
  private $observers;
  
  /**
   * Register new observer.
   *
   * @param \Dirst\OoPatterns\DesignPrinciples\observer\pattern\ObserverInterface $observer
   */
  public function registerObserver(ObserverInterface $observer) {
    $this->observers[$observer->getId()] = $observer;
  }

  /**
   * Remove observer from list.
   *
   * @param \Dirst\OoPatterns\DesignPrinciples\observer\pattern\ObserverInterface $observer
   */
  public function removeObserver(ObserverInterface $observer) {
    $this->observers[$observer->getId()] = $observer;
  }

  /**
   * Notify all observers.
   */
  public function notifyObservers() {
    foreach ($this->observers as &$observer) {
      $observer->updateOnNotify($this->state1, $this->state2);
    } 
  }

  /**
   * Gets 1 state.
   */
  public function getOneState() {
    return "state 1";
  }

  /**
   * Gets 2 state.
   */
  public function getTwoState() {
    return "state 2";
  }


  /**
   * Called when data should be updated.
   */
  public function updateData() {
    $this->state1 = $this->getOneState();
    $this->state2 = $this->getTwoState();
    
    $this->notifyObservers();
  }
}
