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

    public function test3(){

        $this->assertEquals([1],$this->solution->spiralOrder([[1]]));

    }

    public function test4(){

        $this->assertEquals([2,3],$this->solution->spiralOrder([[2,3]]));

    }

    public function test5(){

        $this->assertEquals([7,9,6],$this->solution->spiralOrder([[7],[9],[6]]));

    }

    public function test6(){

        $this->assertEquals(
            [1,2,3,4,8,12,16,15,14,13,9,5,6,7,11,10],
            $this->solution->spiralOrder([[1,2,3,4],[5,6,7,8],[9,10,11,12],[13,14,15,16]])
        );

    }

    public function test7(){

        $this->assertEquals(
            [1,2,3,4,5,10,15,20,25,24,23,22,21,16,11,6,7,8,9,14,19,18,17,12,13],
            $this->solution->spiralOrder([[1,2,3,4,5],[6,7,8,9,10],[11,12,13,14,15],[16,17,18,19,20],[21,22,23,24,25]])
        );

    }
}
