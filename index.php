<?php


use Application\Meat;
use Application\Patty;

$loader = require( __DIR__ . '/vendor/autoload.php' );

$pattyWithMeat = new Meat(new Patty());

echo $pattyWithMeat->coast();
echo '</br>';
echo $pattyWithMeat->getDescription();