<?php

namespace Dirst\OoPatterns\DesignPrinciples\observer\pattern;

/**
 * Module that will be used as observer.
 *
 * @author Dirst <dirst.guy@gmail.com>
 */
class SomeObserverModule extends Module {
  
  // Assume we have to save states on notify in the object.
  private $state1;
  private $state2;
  
  // @var - ObservableInterface. 
  private $observable;

  /**
   * Register new observer
   */
  public function __construct(ObservableInterface $observable) {
    parent::__construct();
    $this->observable = $observable;
    $observable->registerObserver($this);
  }

  /**
   * {@inheritdoc}
   */
  public function updateOnNotify($state1, $state2) {
    $this->state1 = $state1;
    $this->state2 = $state2;
    print "Updated on notify " . $this->getId();
  }
}
