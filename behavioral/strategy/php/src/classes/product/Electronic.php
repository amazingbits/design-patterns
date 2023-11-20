<?php

namespace Src\Classes\Product;

class Electronic extends Product
{
    private string $serialNumber;

    public function __construct(string $id, string $name, string $description, float $price, string $serialNumber)
    {
        parent::__construct($id, $name, $description, $price);
        $this->serialNumber = $serialNumber;
    }
}
