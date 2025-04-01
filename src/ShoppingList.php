<?php

namespace Deg540\KataEntregable;

class ShoppingList
{
    private array $shoppingList = [];

    public function manageList(string $action): string{

        $parts = explode(" ", $action);

        $product =  strtolower($parts[1]);

        $quantity = isset($parts[2]) ? $parts[2] : "1";

        if (isset($this->shoppingList[$product])) {
            $this->shoppingList[$product] .= $quantity;
        } else {
            $this->shoppingList[$product] = $quantity;
        }

        $result = [];
        foreach ($this->shoppingList as $product => $quantity) {
            $result[] = "$product x$quantity";
        }

        return implode(", ", $result);

    }
}
