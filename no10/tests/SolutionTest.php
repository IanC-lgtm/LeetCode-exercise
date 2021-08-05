<?php

namespace no10\tests;

use no10\src\Solution;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{

    private $solution;

    public function setUp(): void
    {
        parent::setUp();
        $this->solution = new Solution();
    }

    public function testSearch1()
    {
        $this->assertEquals(4, $this->solution->search([4, 5, 6, 7, 0, 1, 2], 0));
    }

    public function testSearch2()
    {
        $this->assertEquals(-1, $this->solution->search([4, 5, 6, 7, 0, 1, 2], 3));
    }

    public function testSearch3()
    {
        $this->assertEquals(-1, $this->solution->search([1], 0));
    }

    public function testSearch4()
    {
        $this->assertEquals(0, $this->solution->search([1, 3], 1));
    }

    public function testSearch5()
    {
        $this->assertEquals(0, $this->solution->search([3, 5, 1], 3));
    }
}
