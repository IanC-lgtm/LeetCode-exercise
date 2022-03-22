<?php

namespace no31\tests;

use no25\src\TreeNode;
use no31\src\Solution;
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

        $node = TreeNode::generateFromArray([1, 2, 3]);
        $this->assertEquals(6, $this->solution->maxPathSum($node));

    }

    public function test2()
    {

        $node = TreeNode::generateFromArray([-10, 9, 20, null, null, 15, 7]);
        $this->assertEquals(42, $this->solution->maxPathSum($node));

    }
}
