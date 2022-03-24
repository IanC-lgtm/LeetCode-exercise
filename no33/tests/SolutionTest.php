<?php

namespace no33\tests;

use no33\src\Solution;
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

        $this->assertEquals(4, $this->solution->longestConsecutive([100, 4, 200, 1, 3, 2]));

    }

    public function test2()
    {

        $this->assertEquals(9, $this->solution->longestConsecutive([0, 3, 7, 2, 5, 8, 4, 6, 0, 1]));

    }

}
