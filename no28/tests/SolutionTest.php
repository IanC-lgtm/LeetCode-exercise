<?php

namespace no28\tests;

use no25\src\TreeNode;
use no28\src\Solution;
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

        $tree = TreeNode::generateFromArray([3, 9, 20, null, null, 15, 7]);
        $this->assertEquals(3, $this->solution->maxDepth($tree));

    }

    public function test2()
    {

        $tree = TreeNode::generateFromArray([1, null, 2]);
        $this->assertEquals(2, $this->solution->maxDepth($tree));

    }

    public function test3()
    {

        $tree = TreeNode::generateFromArray([1, 2, 3, 4, null, null, 5]);
        $this->assertEquals(3, $this->solution->maxDepth($tree));

    }

}
