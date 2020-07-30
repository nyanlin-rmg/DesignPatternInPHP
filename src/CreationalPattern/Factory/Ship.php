<?php


namespace DesignPatternImplementation\CreationalPattern\Factory;


class Ship extends Transport
{
    public function deliver()
    {
        return new SeaLogistics();
    }
}