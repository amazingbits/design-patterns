<?php

namespace Src\Classes\Product;

abstract class Product
{
    private string $id;
    private string $name;
    private string $description;
    private float $price;

    public function __construct(string $id, string $name, string $description, float $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }

    public function getPrice(): float
    {
        return $this->price;
    }
}
