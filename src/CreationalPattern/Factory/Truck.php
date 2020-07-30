<?php


namespace DesignPatternImplementation\CreationalPattern\Factory;


class Truck extends Transport
{
    public function deliver()
    {
        return new RoadLogistics();
    }
}