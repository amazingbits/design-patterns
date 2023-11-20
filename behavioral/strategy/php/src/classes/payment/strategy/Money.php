<?php


namespace Src\Classes\Payment\Strategy;

use Src\Classes\Payment\PaymentStrategy;

class Money implements PaymentStrategy
{
    public function pay(float $value): float
    {
        return $value - ($value * 0.15);
    }
}