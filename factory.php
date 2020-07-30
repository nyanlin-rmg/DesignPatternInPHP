<?php

require "vendor/autoload.php";

use DesignPatternImplementation\CreationalPattern\Factory\Truck;
use DesignPatternImplementation\CreationalPattern\Factory\Ship;

$deliverByTruck = new Truck();
$deliverByTruck->deliver()->createTransport();

$deliverByShip = new Ship();
$deliverByShip->deliver()->createTransport();