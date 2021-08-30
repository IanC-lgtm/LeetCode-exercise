<?php

namespace no21\tests;

use no21\src\Solution;
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

        $matrix = [[1, 1, 1], [1, 0, 1], [1, 1, 1]];
         $this->solution->setZeroes($matrix);
        $this->assertEquals([[1,0,1],[0,0,0],[1,0,1]], $matrix);

    }

    public function test2(){

        $matrix = [[0, 1, 2, 0], [3, 4, 5, 2], [1, 3, 1, 5]];
        $this->solution->setZeroes($matrix);
        $this->assertEquals([[0,0,0,0],[0,4,5,0],[0,3,1,0]],$matrix);

    }

}
