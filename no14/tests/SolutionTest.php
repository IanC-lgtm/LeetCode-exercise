<?php

namespace no14\tests;

use no14\src\Solution;
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

        $this->assertEquals(6,$this->solution->maxSubArray([-2,1,-3,4,-1,2,1,-5,4]));

    }

    public function test2(){

        $this->assertEquals(1,$this->solution->maxSubArray([1]));

    }


    public function test3(){

        $this->assertEquals(23,$this->solution->maxSubArray([5,4,-1,7,8]));

    }



}
