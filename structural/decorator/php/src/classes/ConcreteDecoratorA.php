<?php

namespace Src\Classes;

class ConcreteDecoratorA extends Decorator
{
    public function operation(): string
    {
        return $this->component->operation(). " A";
    }
}
