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

        $treeNode = $this->solution->buildTree([3, 9, 20, 15, 7], [9, 3, 15, 20, 7]);
        $this->assertEquals(null, $treeNode);

    }

    public function test2()
    {

        $treeNode = $this->solution->buildTree([-1], [-1]);
        $this->assertEquals(null, $treeNode);

    }

}
