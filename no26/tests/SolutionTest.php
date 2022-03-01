<?php

namespace no26\tests;

use no26\src\Solution;
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

        $this->assertTrue($this->solution->isSameTree([1,2,3],[1,2,3]));

    }

    public function test2(){

        $this->assertFalse($this->solution->isSameTree([1,2],[1,null,2]));

    }

    public function test3(){

        $this->assertFalse($this->solution->isSameTree([1,2,1],[1,1,2]));

    }

}
