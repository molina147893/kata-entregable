<?php

namespace Deg540\KataEntregable;

class ShoppingList
{
    private array $shoppingList = [];

    public function manageList(string $action): string{

        $parts = explode(" ", $action);

        $product =  strtolower($parts[1]);

        $quantity = isset($parts[2]) ? $parts[2] : "1";

        if ($this->productExists($product)) {
            $this->shoppingList[$product] += $quantity;
        }
        if(!$this->productExists($product)){
            $this->shoppingList[$product] = $quantity;
        }

        ksort($this->shoppingList);

        $result = [];
        foreach ($this->shoppingList as $product => $quantity) {
            $result[] = "$product x$quantity";
        }

        return implode(", ", $result);
    }

    public function productExists(string $product): bool
    {
        return isset($this->shoppingList[$product]);
    }
}
