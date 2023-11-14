<?php

use Src\Classes\Component;
use Src\Classes\ConcreteComponent;
use Src\Classes\ConcreteDecoratorA;
use Src\Classes\ConcreteDecoratorB;

require_once "./vendor/autoload.php";

function clientCode(Component $component)
{
    echo "RESULT: " . $component->operation();
}

$simple = new ConcreteComponent();
echo "Client: I've got a simple component:\\n";
clientCode($simple);
echo "\\n\\n";

$decoratorA = new ConcreteDecoratorA($simple);
$decoratorB = new ConcreteDecoratorB($decoratorA);
echo "Client: Now I've got a decorated component:\\n";
clientCode($decoratorB);
