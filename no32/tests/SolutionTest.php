<?php

namespace no32\tests;

use no32\src\Solution;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{

    private $solution;

    public function setUp(): void
    {
        parent::setUp();
        $this->solution = new Solution();
    }

    public function test1()
    {

        $this->assertTrue($this->solution->isPalindrome("A man, a plan, a canal: Panama"));

    }

    public function test2()
    {

        $this->assertFalse($this->solution->isPalindrome("race a car"));

    }

    public function test3()
    {

        $this->assertTrue($this->solution->isPalindrome(" "));

    }
}
