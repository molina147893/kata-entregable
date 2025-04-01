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

}
