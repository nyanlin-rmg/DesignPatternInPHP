<?php

require "vendor/autoload.php";

use DesignPatternImplementation\CreationalPattern\Singleton\DatabaseConnection;

$connection1 = DatabaseConnection::getConnection();
$connection2 = DatabaseConnection::getConnection();
$connection3 = DatabaseConnection::getConnection();
$connection4 = DatabaseConnection::getConnection();