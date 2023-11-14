<?php

namespace Src\Classes;

class ConcreteDecoratorB extends Decorator
{
    public function operation(): string
    {
        return $this->component->operation(). " B";
    }
}
