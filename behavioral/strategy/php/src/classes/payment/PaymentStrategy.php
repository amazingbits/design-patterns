<?php

namespace Src\Classes\Payment;

interface PaymentStrategy
{
    public function pay(float $value): float;
}
