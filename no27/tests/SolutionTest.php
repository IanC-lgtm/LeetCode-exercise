<?php

namespace no27\tests;

use no25\src\TreeNode;
use no27\src\Solution;
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
        $this->assertEquals([[3], [9, 20], [15, 7]], $this->solution->levelOrder($tree));

    }

    public function test2()
    {

        $tree = TreeNode::generateFromArray([1, 2, 3, 4, 5]);
        $this->assertEquals([[1], [2, 3], [4, 5]], $this->solution->levelOrder($tree));

    }

}
