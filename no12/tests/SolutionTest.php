<?php

namespace no12\tests;

use no12\src\Solution;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{

    private $solution;

    public function setUp(): void
    {
        parent::setUp();
        $this->solution = new Solution();
    }

    public function testRotate1(){

        $matrix = [[1, 2, 3], [4, 5, 6], [7, 8, 9]];
        $this->assertEquals([[7,4,1],[8,5,2],[9,6,3]], $this->solution->rotate($matrix));

    }

    public function testRotate2(){

        $matrix = [[5,1,9,11],[2,4,8,10],[13,3,6,7],[15,14,12,16]];
        $this->assertEquals([[15,13,2,5],[14,3,4,1],[12,6,8,9],[16,7,10,11]], $this->solution->rotate($matrix));

    }


    public function testRotate3(){

        $matrix = [[1]];
        $this->assertEquals([[1]], $this->solution->rotate($matrix));

    }


    public function testRotate4(){

        $matrix = [[1,2],[3,4]];
        $this->assertEquals([[3,1],[4,2]], $this->solution->rotate($matrix));

    }
}
