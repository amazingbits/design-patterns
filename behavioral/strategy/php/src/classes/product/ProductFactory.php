<?php

namespace Src\Classes\Product;

class ProductFactory
{
    public static function create(
        string $type,
        string $id,
        string $name,
        string $description,
        float $price,
        string $serialNumber = null,
        bool $forKids = null
    ): Product {
        switch ($type) {
            case 'toys':
                return new Toys($id, $name, $description, $price, $forKids);
            case 'electronic':
                return new Electronic($id, $name, $description, $price, $serialNumber);
            default:
                throw new \Exception('Invalid product type');
        }
    }
}
