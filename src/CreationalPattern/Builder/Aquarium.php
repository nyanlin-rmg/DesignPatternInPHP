<?php


namespace DesignPatternImplementation\CreationalPattern\Builder;


class Aquarium
{
    public $filter;
    public $co2;
    public $plants;
    public $rocks;
    public $light;

    public function __construct(AquariumBuilder $aquariumBuilder)
    {
        $this->filter = $aquariumBuilder->filter;
        $this->co2 = $aquariumBuilder->co2;
        $this->plants = $aquariumBuilder->plants;
        $this->rocks = $aquariumBuilder->rocks;
        $this->light = $aquariumBuilder->light;
    }

    public function build()
    {
        return "Your Aquarium Setup With => $this->filter, $this->co2,
                $this->rocks, $this->plants, $this->light\n";
    }
}