<?php


namespace DesignPatternImplementation\CreationalPattern\Factory;


class SeaLogistics implements Logistics
{
    public function createTransport()
    {
        echo "Make Transportation By Sea Logistics\n";
    }
}