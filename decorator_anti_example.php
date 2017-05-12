<?php require __DIR__ . "/vendor/autoload.php";

use Dirst\OoPatterns\DesignPrinciples\decorator\antipattern\SquareFigure;

$square = new SquareFigure();
$square->set3D();
$square->setColored();
$square->draw();