<?php

namespace no1\tests;

use no1\src\Solution;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{

    private $solution;

    public function setUp(): void
    {
        parent::setUp();
        $this->solution = new Solution();
    }

    public function testTwoSum1()
    {

        $this->assertEquals([0, 1], $this->solution->twoSum([2, 7, 11, 15], 9));

    }

    public function testTwoSum2()
    {

        $this->assertEquals([1, 2], $this->solution->twoSum([3, 2, 4], 6));

    }


    public function testTwoSum3()
    {

        $this->assertEquals([0, 1], $this->solution->twoSum([3, 3], 6));

    }


}
