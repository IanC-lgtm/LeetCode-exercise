<?php

namespace no25\tests;

use no25\src\Solution;
use no25\src\TreeNode;
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

        $treeArray = [2, 1, 3];

        $treeNode = TreeNode::generateFromArray($treeArray);
        $this->assertEquals(true, $this->solution->isValidBST($treeNode));

    }

    public function test2()
    {

        $treeArray = [5, 1, 4, null, null, 3, 6];

        $treeNode = TreeNode::generateFromArray($treeArray);
        $this->assertEquals(false, $this->solution->isValidBST($treeNode));

    }

}
