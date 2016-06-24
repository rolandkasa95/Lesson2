<?php

require_once 'Classes/ObjectFactoryService.php';
require_once 'Loader.php';

$car = new Car();

$car->setColor("Green")->setType("Sedan");

echo "My car is a " .  $car->getColor() . PHP_EOL . $car->getType() . "<br />";

$train = new Train();

$train->setColor("Red")->setType("Sw-42")->setSize("Absolutely Huge");

echo "But my train is " . $train->getColor() . PHP_EOL .$train->getType() . " and it's size is " . $train->getSize() . "<br />";

$plane = new Plane();

$plane->setColor("White")->setType('Boeing 747')->setCapacity(650);

echo "Last but not least, my airplane is " . $plane->getColor() . PHP_EOL . $plane->getType() . " and it's capacity is " . $plane->getCapacity();


$config = require_once 'config/configDatabase.php';

//var_dump($config['Car']);

$model = Model::connection($config);
$model = Model::createTable($config);