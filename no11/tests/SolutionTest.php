<?php

namespace no11\tests;

use no11\src\Solution;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{

    private $solution;

    public function setUp(): void
    {
        parent::setUp();
        $this->solution = new Solution();
    }

    public function testCombinationSum1()
    {

        $this->assertEquals([[2, 2, 2, 2], [2, 3, 3], [3, 5]], $this->solution->combinationSum([2, 3, 5], 8));

    }

    public function testCombinationSum2()
    {

        $this->assertEquals([[2, 2, 3], [7]], $this->solution->combinationSum([2, 3, 6, 7], 7));

    }

}
