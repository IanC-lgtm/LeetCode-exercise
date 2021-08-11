<?php

namespace no13\tests;

use no13\src\Solution;
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

        $this->assertCount(3,
            $this->solution->groupAnagrams(["eat","tea","tan","ate","nat","bat"]));

    }


    public function test2(){

        $this->assertEquals([[""]],
            $this->solution->groupAnagrams([""]));

    }

    public function test3(){

        $this->assertEquals([["a"]],
            $this->solution->groupAnagrams(["a"]));

    }
}
