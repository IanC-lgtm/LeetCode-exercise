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

}
