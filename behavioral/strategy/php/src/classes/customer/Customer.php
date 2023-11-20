<?php

namespace Src\Classes\Customer;

class Customer
{
    private string $id;
    private string $name;
    private string $email;

    public function __construct(string $id, string $name, string $email)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
    }
}
