<?php

namespace no24\tests;

use no24\src\Solution;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{

    private $solution;

    public function setUp(): void
    {
        parent::setUp();
        $this->solution = new Solution();
    }

    public function test1(){

        $this->assertEquals(2,$this->solution->numDecodings('12'));

    }

    public function test2(){

        $this->assertEquals(3,$this->solution->numDecodings('226'));

    }

    public function test3(){

        $this->assertEquals(0,$this->solution->numDecodings('0'));

    }

    public function test4(){

        $this->assertEquals(0,$this->solution->numDecodings('06'));

    }


}
