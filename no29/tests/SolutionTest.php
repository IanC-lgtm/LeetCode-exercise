<?php

namespace no29\tests;

use no29\src\Solution;
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

        $this->assertEquals([3, 9, 20, null, null, 15, 7], $this->solution->buildTree([3, 9, 20, 15, 7], [9, 3, 15, 20, 7]));

    }

    public function test2()
    {

        $this->assertEquals([-1], $this->solution->buildTree([-1], [-1]));

    }

}
