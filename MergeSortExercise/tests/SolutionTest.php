<?php

namespace MergeSortExercise\tests;

use MergeSortExercise\src\Solution;
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

        $this->assertEquals([1,2,3,5],$this->solution->sort([1,5,3,2]));

    }


    public function test2(){

        $this->assertEquals([3,5,9,21,32,34,35,37,50,55,64,70,82,89],$this->solution->sort([21, 34, 3, 32, 82, 55, 89, 50, 37, 5, 64, 35, 9, 70]));

    }

    public function test3(){

        $this->assertEquals([1,2,4,6,7,9],$this->solution->sort([1,6,4,9,7,2]));

    }


}
