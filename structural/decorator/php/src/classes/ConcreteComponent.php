<?php

namespace Src\Classes;

class ConcreteComponent implements Component
{
    public function operation(): string
    {
        return "Concrete component";
    }
}