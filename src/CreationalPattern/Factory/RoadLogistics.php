<?php


namespace DesignPatternImplementation\CreationalPattern\Factory;


class RoadLogistics implements Logistics
{
    public function createTransport()
    {
        echo "Make Transportation By Road Logistics\n";
    }
}