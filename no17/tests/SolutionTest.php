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

    public function test2(){

        $this->assertEquals( [[1,5]],$this->solution->merge([[1,4],[4,5]]));

    }

    public function test3(){

        $this->assertEquals( [[0,5]],$this->solution->merge([[1,4],[0,5]]));

    }

    public function test4(){

        $this->assertEquals( [[1,10]],$this->solution->merge([[2,3],[4,5],[6,7],[8,9],[1,10]]));

    }
}
