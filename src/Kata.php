<?php

namespace Deg540\KataEntregable;

class Kata
{
    private array $shoppingList = [];

    public function manageList(string $action): string{

        $parts = explode(" ", $action);

        $product =  strtolower($parts[1]);

        $quantity = isset($parts[2]) ? $parts[2] : "1";

        return $product . " x" . $quantity;

    }
}
