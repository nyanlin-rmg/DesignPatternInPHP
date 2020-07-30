<?php


namespace DesignPatternImplementation\CreationalPattern\Prototype;


class Book implements Prototype
{
    private $title;

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function reproduce()
    {
        return clone $this;
    }
}