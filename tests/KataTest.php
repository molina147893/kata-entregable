<?php

namespace Deg540\KataEntregable\Test;

use Deg540\KataEntregable\Kata;
use PHPUnit\Framework\TestCase;

class KataTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->kata = new Kata();
    }


    /**
     * @test
     */
    public function givenAnyProductHavingEmptyListReturnsProductx1()
    {
        $result = $this->kata->manageList("añadir leche");

        $this->assertEquals("leche x1", $result);
    }

    /**
     * @test
     */
    public function givenAnyCuantityOfProductReturnsCuantity()
    {
        $result = $this->kata->manageList("añadir Pan 2");

        $this->assertEquals("pan x2", $result);
    }

    /**
     * @test
     */
    public function givenProductsWhenAddedAreStoredInTheList()
    {
        $this->kata->manageList("añadir leche");
        $result = $this->kata->manageList("añadir Pan 2");

        $this->assertEquals("leche x1, pan x2", $result);
    }

}
