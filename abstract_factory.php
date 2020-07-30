<?php

require "vendor/autoload.php";

$html_factory = new \DesignPatternImplementation\CreationalPattern\AbstractFactory\HtmlReportFactory();

$header = $html_factory->createHeader();
$body = $html_factory->createBody();

$header->generateHeader("This is header");
$body->generateBody("This is body");