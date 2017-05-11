<?php require __DIR__ . "/vendor/autoload.php";

use Dirst\OoPatterns\DesignPrinciples\observer\pattern\Core;
use Dirst\OoPatterns\DesignPrinciples\observer\pattern\SomeObserverModule;


$core = new Core();
$m = new SomeObserverModule($core);
$core->updateData();