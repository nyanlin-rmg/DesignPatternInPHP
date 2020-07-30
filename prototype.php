<?php

require "vendor/autoload.php";

use DesignPatternImplementation\CreationalPattern\Prototype\Book;

$firstObject = new Book();
$firstObject->setTitle("This is Title By First Object");

$secondObject = $firstObject->reproduce();

var_dump($secondObject);

