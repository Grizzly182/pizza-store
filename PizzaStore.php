<?php
namespace Mikhail\Repo;

use Mikhail\Repo\Pizza;

abstract class PizzaStore
{
    public function orderPizza(Pizza $type)
    {
        $pizza = $this->createPizza($type);
        $pizza->prepare()->cut();
    }

    public abstract function createPizza(Pizza $type): Pizza;
}
