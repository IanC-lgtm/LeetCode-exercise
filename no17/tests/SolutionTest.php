<?php

namespace no17\tests;

use no17\src\Solution;
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

        $this->assertEquals( [[1,6],[8,10],[15,18]],$this->solution->merge([[1,3],[2,6],[8,10],[15,18]]));

    }

}
