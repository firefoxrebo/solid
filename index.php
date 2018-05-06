<?php

use SOLID\SRP\Bus;
use SOLID\SRP\Driver;
use SOLID\SRP\Route;

require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

$mohammed = new Driver('Mohammed Yehia', 36, 'SA746253', "Cairo");

$route80 = new Route('Cairo', 'Alexandria', 302);
$route90 = new Route('Alexandria', 'Marsa Matrouh', 435);

$bus = new Bus(201);
$bus->setDriver($mohammed);
$bus->setColor('red');
$bus->setDoors(2);
$bus->setMaximumSpeed(135);
$bus->setNumberOfPassengers(62);
$bus->addRoute($route80);
$bus->addRoute($route90);
echo $bus->move();