<?php


namespace DesignPatternImplementation\BehavioralPattern\StrategyPattern;


class VisaMaster implements Payment
{

    public function checkValidate($request)
    {
        return true;
    }

    public function makeTransaction($request)
    {
        return "Make Payment Transaction To Visa/Master";
    }

}