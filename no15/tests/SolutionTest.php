<?php

namespace no15\tests;

use no15\src\Solution;
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

        $this->assertEquals([1,2,3,6,9,8,7,4,5],$this->solution->spiralOrder( [[1,2,3],[4,5,6],[7,8,9]]));

    }


    public function test2(){

        $this->assertEquals([1,2,3,4,8,12,11,10,9,5,6,7],$this->solution->spiralOrder( [[1,2,3,4],[5,6,7,8],[9,10,11,12]]));

    }
}
