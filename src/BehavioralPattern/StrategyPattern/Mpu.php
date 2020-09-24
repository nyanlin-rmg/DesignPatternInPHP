<?php


namespace DesignPatternImplementation\BehavioralPattern\StrategyPattern;


class Mpu implements Payment
{
    public function makeTransaction($request)
    {
        return "Make Payment Transaction To MPU";
    }

    public function checkValidate($request)
    {
        return true;
    }
}