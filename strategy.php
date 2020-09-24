<?php

require "vendor/autoload.php";

use DesignPatternImplementation\BehavioralPattern\StrategyPattern\Payment;
use DesignPatternImplementation\BehavioralPattern\StrategyPattern\VisaMaster;
use DesignPatternImplementation\BehavioralPattern\StrategyPattern\Mpu;

class Client
{
    private $payment;

    public function makePayment(Payment $payment, $data)
    {
        $this->payment = $payment;

        if ($this->payment->checkValidate($data)) {
            return $this->payment->makeTransaction($data);
        }
        return "transaction interrupt";
    }
}

$client1 = new Client();
$testData = ['test' => 'Test'];

$transaction1 = $client1->makePayment(new VisaMaster(), $testData);
$transaction2 = $client1->makePayment(new Mpu(), $testData);

var_dump($transaction1);
var_dump($transaction2);