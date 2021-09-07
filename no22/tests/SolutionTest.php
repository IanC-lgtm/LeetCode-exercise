<?php

namespace no22\tests;

use no22\src\Solution;
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

        $this->assertEquals("BANC",$this->solution->minWindow("ADOBECODEBANC","ABC"));

    }


    public function test2(){

        $this->assertEquals("a",$this->solution->minWindow("a","a"));

    }

    public function test3(){

        $this->assertEquals("",$this->solution->minWindow("a","aa"));

    }



}
