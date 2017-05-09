<?php

namespace Dirst\OoPatterns\DesignPrinciples\observer\pattern;

/**
 * Inteface for observable.
 *
 * @author Dirst <dirst.guy@gmail.com>
 */
interface ObservableInterface {
  /**
   * Register Observer.
   *
   * @param \Dirst\OoPatterns\DesignPrinciples\observer\pattern\ObserverInterface $observer
   */
  public function registerObserver(ObserverInterface $observer);

  /**
   * remove Observer from Observable list.
   *
   * @param \Dirst\OoPatterns\DesignPrinciples\observer\pattern\ObserverInterface $observer
   */
  public function removeObserver(ObserverInterface $observer);

  /**
   * Notify all registered observers.
   */
  public function notifyObservers();
}
