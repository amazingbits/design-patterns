<?php

namespace Src\Classes\Product;

class Toys extends Product
{
    private bool $forKids;

    public function __construct(string $id, string $name, string $description, float $price, bool $forKids)
    {
        parent::__construct($id, $name, $description, $price);
        $this->forKids = $forKids;
    }
}
