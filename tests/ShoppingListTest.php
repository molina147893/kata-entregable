<?php

namespace Deg540\KataEntregable\Test;

use Deg540\KataEntregable\ShoppingList;
use PHPUnit\Framework\TestCase;

class ShoppingListTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->shoppingList = new ShoppingList();
    }


    /**
     * @test
     */
    public function givenAnyProductHavingEmptyListReturnsProductx1()
    {
        $result = $this->shoppingList->manageList("añadir leche");

        $this->assertEquals("leche x1", $result);
    }

    /**
     * @test
     */
    public function givenAnyCuantityOfProductReturnsCuantity()
    {
        $result = $this->shoppingList->manageList("añadir Pan 2");

        $this->assertEquals("pan x2", $result);
    }

    /**
     * @test
     */
    public function givenProductsWhenAddedAreStoredInTheList()
    {
        $this->shoppingList->manageList("añadir leche");
        $result = $this->shoppingList->manageList("añadir Pan 2");

        $this->assertEquals("leche x1, pan x2", $result);
    }

}
