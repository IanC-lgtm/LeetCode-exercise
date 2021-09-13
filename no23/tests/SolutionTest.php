<?php

namespace no23\tests;

use no23\src\Solution;
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

        $this->assertTrue(
            $this->solution->exist([["A","B","C","E"],["S","F","C","S"],["A","D","E","E"]],"ABCCED"));

    }

    public function test2(){

        $this->assertTrue(
            $this->solution->exist([["A","B","C","E"],["S","F","C","S"],["A","D","E","E"]],"SEE"));

    }

    public function test3(){

        $this->assertFalse(
            $this->solution->exist([["A","B","C","E"],["S","F","C","S"],["A","D","E","E"]],"ABCB"));

    }

    public function test4(){

        $this->assertTrue(
            $this->solution->exist([["a"]],"a"));

    }

}
