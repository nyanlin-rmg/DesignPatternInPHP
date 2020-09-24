<?php


namespace DesignPatternImplementation\BehavioralPattern\StrategyPattern;


interface Payment
{
    public function checkValidate($request);
    public function makeTransaction($request);
}