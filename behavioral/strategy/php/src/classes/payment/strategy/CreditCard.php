<?php

namespace Src\Classes\Payment\Strategy;

use Src\Classes\Payment\PaymentStrategy;

class CreditCard implements PaymentStrategy
{
    public function pay(float $value): float
    {
        return $value + ($value * 0.25);
    }
}
