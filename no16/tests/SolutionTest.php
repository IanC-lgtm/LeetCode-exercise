<?php

namespace no16\tests;

use no16\src\Solution;
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

        $this->assertTrue($this->solution->canJump([2,3,1,1,4]));

    }

    public function test2(){

        $this->assertFalse($this->solution->canJump([3,2,1,0,4]));

    }

    public function test3(){

        $this->assertTrue($this->solution->canJump([0]));

    }

    public function test4(){

        $this->assertFalse($this->solution->canJump([0,2,3]));

    }


}
