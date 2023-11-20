<?php

namespace Src\Classes\Payment;

use Src\Classes\Customer\Customer;
use Src\Classes\Product\Product;

class Payment
{
    private string $date;
    private Customer $customer;
    private Product $product;

    public function __construct(string $date, Customer $customer, Product $product)
    {
        $this->date = $date;
        $this->customer = $customer;
        $this->product = $product;
    }

    public function calculatePayment(PaymentStrategy $payment): float
    {
        return $payment->pay($this->product->getPrice());
    }
}
