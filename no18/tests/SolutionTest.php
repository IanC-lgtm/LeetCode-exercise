<?php

namespace no18\tests;

use no18\src\Solution;
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

        $this->assertEquals([[1,5],[6,9]],$this->solution->insert([[1,3],[6,9]],[2,5] ));

    }

    public function test2(){

        $this->assertEquals([[1,2],[3,10],[12,16]],$this->solution->insert([[1,2],[3,5],[6,7],[8,10],[12,16]], [4,8]));

    }

    public function test3(){

            $this->assertEquals([[5,7]],$this->solution->insert([], [5,7]));

    }

    public function test4(){

        $this->assertEquals([[1,5]],$this->solution->insert([[1,5]], [2,3]));

    }

    public function test5(){

        $this->assertEquals([[1,7]],$this->solution->insert([[1,5]], [2,7]));

    }

}
