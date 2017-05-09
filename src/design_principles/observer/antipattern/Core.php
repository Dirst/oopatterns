<?php

namespace Dirst\OoPatterns\DesignPrinciples\observer\antipattern;

/**
 * Main core class.
 *
 * @author Dirst <dirst.guy@gmail.com>
 */
class Core {
  private $state1;
  private $state2;

  /**
   * Instances of different modules classes that should
   * process new state of the Core. (Names could be random)
   * All modules classes contains update method.
   * 
   * @notice 
   *   now to extend we need to add new variables with modules instances, 
   *   new set methods(if we do implementation with set methods) and modules 
   *   classes of course.
   */
  private $viewModule;
  private $processModule;

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
   * Set view module.
   *
   * @param \Dirst\OoPatterns\DesignPrinciples\observer\antipattern\viewModule $viewModule
   */
  public function setViewModule(viewModule $viewModule) {
    $this->viewModule = $viewModule;
  }

  /**
   * Set process module.
   *
   * @param \Dirst\OoPatterns\DesignPrinciples\observer\antipattern\processModule $processModule
   */
  public function setProcessModule(processModule $processModule) {
    $this->processModule = $processModule;
  }

  /**
   * Called when data should be updated.
   */
  public function updateData() {
    $this->state1 = $this->getOneState();
    $this->state2 = $this->getTwoState();
    
    // Here we program on implementation level. 
    // Core class knows about object classes.
    $this->viewModule.update($this->state1, $this->state2);
    $this->processModule.update($this->state1, $this->state2);
  }
}
