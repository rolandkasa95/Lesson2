<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'Classes/Car.php';
require_once 'Classes/Train.php';
require_once 'Classes/Plane.php';
require_once  'Classes/VehicleBase.php';
require_once 'Model/Model.php';

$car = new Car();

$car->setColor("Green")->setType("Sedan")->setColorNumber(14)->setColorHex("#FFFFF");

echo "My car is a " .  implode(" ",$car->getColorInfo()) . PHP_EOL . $car->getType() . "<br />";

$train = new Train();

$train->setColor("Red")->setType("Sw-42")->setSize("Absolutely Huge")->setColorNumber(22);

echo "But my train is " . $train->getColorInfo() . PHP_EOL .$train->getType() . " and it's size is " . $train->getSize() . "<br />";

$plane = new Plane();

$plane->setColor("White")->setType('Boeing 747')->setCapacity(650)->setColorNumber(24);

echo "Last but not least, my airplane is " . $plane->getColorInfo() . PHP_EOL . $plane->getType() . " and it's capacity is " . $plane->getCapacity();

$car->hasSeatBelt = "no";
echo "<br /> Seat belt on: " . $car->hasSeatBelt;

$car->model = "Alfa";

if (isset($car->model)){
    echo "Model: " . $car->model;
}
//$car2 = new Car('sedan',1);
//$car2->runDiagnostic();