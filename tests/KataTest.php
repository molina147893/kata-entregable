<?php

namespace Deg540\KataEntregable\Test;

use Deg540\KataEntregable\Kata;
use PHPUnit\Framework\TestCase;

class KataTest extends TestCase
{
    /**
     * @test
     */
    public function givenEmptyListReturnsEmpty()
    {
        $kata = new Kata();

        $result = $kata->manageList("añadir pan");

        $this->assertEquals("pan x1", $result);
    }

}
