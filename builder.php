<?php

require_once "vendor/autoload.php";
use DesignPatternImplementation\CreationalPattern\Builder\Aquarium;
use DesignPatternImplementation\CreationalPattern\Builder\AquariumBuilder;

$aquariumBuilder = new AquariumBuilder();
$aquariumBuilder->addCo2("MyCO2")
    ->addFilter("Canister");

$myAquarium = new Aquarium((new AquariumBuilder())->addRocks("DragonStones")->addFilter("Canister")->addPlants("Java Moss"));
echo $myAquarium->build();
