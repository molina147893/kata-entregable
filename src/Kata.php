<?php

namespace Deg540\KataEntregable;

class Kata
{
    private array $shoppingList = [];

    public function manageList(string $action): string{

        $parts = explode(" ", $action);

        $product =  strtolower($parts[1]);

        if(isset($parts[2])){
            $quantity = $parts[2];
        }
        if(!isset($parts[2])){
            $quantity = "1";
        }

        return $product . " x" . $quantity;

    }
}
