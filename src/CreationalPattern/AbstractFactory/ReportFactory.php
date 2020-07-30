<?php


namespace DesignPatternImplementation\CreationalPattern\AbstractFactory;


interface ReportFactory
{
    public function createHeader();
    public function createBody();
}