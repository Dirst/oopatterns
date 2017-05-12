<?php require __DIR__ . "/vendor/autoload.php";

use Dirst\OoPatterns\DesignPrinciples\decorator\pattern\SquareFigure;
use Dirst\OoPatterns\DesignPrinciples\decorator\pattern\ColoredFeature;
use Dirst\OoPatterns\DesignPrinciples\decorator\pattern\ThreeDFeature;

$figure = new ColoredFeature(new ThreeDFeature(new SquareFigure()));
print $figure->draw();