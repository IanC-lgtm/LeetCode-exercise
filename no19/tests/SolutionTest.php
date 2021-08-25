<?php

namespace no19\tests;

use no19\src\Solution;
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

        $this->assertEquals(28,$this->solution->uniquePaths(7,3));

    }

    public function test2(){

        $this->assertEquals(6,$this->solution->uniquePaths(3,3));

    }

    public function test3(){

        $this->assertEquals(28,$this->solution->uniquePaths(3,7));

    }

    public function test4(){

        $this->assertEquals(6,$this->solution->uniquePaths(3,3));

    }

}
