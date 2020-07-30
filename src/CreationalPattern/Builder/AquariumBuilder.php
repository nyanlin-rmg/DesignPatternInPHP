<?php


namespace DesignPatternImplementation\CreationalPattern\Builder;


class AquariumBuilder
{
    public $filter;
    public $co2;
    public $plants;
    public $rocks;
    public $light;

    public function addFilter($filter)
    {
        $this->filter = $filter;
        return $this;
    }

    public function addCo2($co2)
    {
        $this->co2 = $co2;
        return $this;
    }

    public function addPlants($plants)
    {
        $this->plants = $plants;
        return $this;
    }

    public function addRocks($rocks)
    {
        $this->rocks = $rocks;
        return $this;
    }

    public function addLight($light)
    {
        $this->light = $light;
        return $this;
    }

}