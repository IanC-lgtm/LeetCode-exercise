<?php

namespace no5\tests;

use no5\src\Solution;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{

    private $solution;

    public function setUp(): void
    {
        parent::setUp();
        $this->solution = new Solution();
    }

    public function testThreeSum1()
    {
        $this->assertEquals([[-1, -1, 2], [-1, 0, 1]], $this->solution->threeSum([-1, 0, 1, 2, -1, -4]));
    }

    public function testThreeSum2()
    {
        $this->assertEquals([], $this->solution->threeSum([]));
    }

    public function testThreeSum3()
    {
        $this->assertEquals([], $this->solution->threeSum([0]));
    }


}
