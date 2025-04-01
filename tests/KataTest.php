<?php

namespace Deg540\KataEntregable\Test;

use Deg540\KataEntregable\Kata;
use PHPUnit\Framework\TestCase;

class KataTest extends TestCase
{
    /**
     * @test
     */
    public function givenAnyProductHavingEmptyListReturnsProductx1()
    {
        $kata = new Kata();

        $result = $kata->manageList("añadir leche");

        $this->assertEquals("leche x1", $result);
    }

    /**
     * @test
     */
    public function givenAnyCuantityOfProductReturnsCuantity()
    {
        $kata = new Kata();

        $result = $kata->manageList("añadir Pan 2");

        $this->assertEquals("pan x2", $result);
    }

    /**
     * @test
     */
    public function givenProductsWhenAddedAreStoredInTheList()
    {
        $kata = new Kata();

        $kata->manageList("añadir leche");
        $result = $kata->manageList("añadir Pan 2");

        $this->assertEquals("leche x1, pan x2", $result);
    }

}
