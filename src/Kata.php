<?php

namespace Deg540\KataEntregable;

class Kata
{
    private array $shoppingList = [];

    public function manageList(string $action): string{

        $parts = explode(" ", $action);

        $product =  $parts[1];

        return $product . " x1";

    }
}
