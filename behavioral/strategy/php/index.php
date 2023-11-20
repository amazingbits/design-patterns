<?php

use Src\Classes\Customer\Customer;
use Src\Classes\Payment\Payment;
use Src\Classes\Payment\Strategy\CreditCard;
use Src\Classes\Payment\Strategy\DebitCard;
use Src\Classes\Payment\Strategy\Money;
use Src\Classes\Product\ProductFactory;

require_once "./vendor/autoload.php";

// create a new Customer
$customer = new Customer("125b18", "Guilherme Andrade", "guilherme@email.com");

// create a new Product
$product1 = ProductFactory::create("toys", "1", "Buzz Light Year", "A little toy of buzz", 100, null, true);
$product2 = ProductFactory::create("toys", "2", "Woody", "A little toy of woody", 120, null, true);
$product3 = ProductFactory::create("electronic", "3", "Notebook", "A portable machine", 1500, "AVAB18T");

// create a new Payment

$payment1 = new Payment("2020-01-01", $customer, $product1);
$payment2 = new Payment("2020-01-01", $customer, $product2);
$payment3 = new Payment("2020-01-01", $customer, $product3);

// calculate the payment

$payment1 = $payment1->calculatePayment(new CreditCard());
$payment2 = $payment2->calculatePayment(new DebitCard());
$payment3 = $payment3->calculatePayment(new Money());

// print the results

echo "The first payment (Credit Card) $ 100.00 + 25% = $ 125.00<br>";
echo "Payment 1: ". $payment1. "<br><br>";

echo "The second payment (Debit Card) $ 120 + 10% = $ 132<br>";
echo "Payment 2: ". $payment2. "<br><br>";

echo "The third payment (Money) $ 1500 - 15% = $ 1275<br>";
echo "Payment 3: ". $payment3. "<br>";
