<?php

namespace no20\tests;

use no20\src\Solution;
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

        $this->assertEquals(2,$this->solution->climbStairs(2));

    }

    public function test2(){

        $this->assertEquals(3,$this->solution->climbStairs(3));

    }

    public function test3(){

        $this->assertEquals(5,$this->solution->climbStairs(4));

    }

    public function test4(){

        $this->assertEquals(8,$this->solution->climbStairs(5));

    }
}
