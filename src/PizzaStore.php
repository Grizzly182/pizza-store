<?php
namespace Mikhail\Repo;

require_once __DIR__ . '/../vendor/autoload.php';
use Mikhail\Repo\Pizza;

abstract class PizzaStore
{
    public function orderPizza(string $type): void
    {
        $pizza = $this->createPizza($type);
        $pizza->prepare()->cut();
    }

    public abstract function createPizza(string $pizzaType): Pizza;
}