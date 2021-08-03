<?php

namespace no7\tests;

use no7\src\Solution;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{

    private $solution;

    public function setUp(): void
    {
        parent::setUp();
        $this->solution = new Solution();
    }

    public function testIsValid1()
    {
        $this->assertTrue($this->solution->isValid("()"));
    }

    public function testIsValid2()
    {
        $this->assertTrue($this->solution->isValid("()[]{}"));
    }


    public function testIsValid3()
    {
        $this->assertFalse($this->solution->isValid("(]"));
    }

    public function testIsValid4()
    {
        $this->assertFalse($this->solution->isValid("([)]"));
    }

    public function testIsValid5()
    {
        $this->assertTrue($this->solution->isValid("{[]}"));
    }

    public function testIsValid6()
    {
        $this->assertFalse($this->solution->isValid("(}{)"));
    }

    public function testIsValid7()
    {
        $this->assertTrue($this->solution->isValid("(([]){})"));
    }
}
