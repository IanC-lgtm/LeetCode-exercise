<?php

namespace no6\tests;

use no6\src\ListNode;
use no6\src\Solution;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{

    private $solution;

    public function setUp(): void
    {
        parent::setUp();
        $this->solution = new Solution();
    }

    public function testRemoveNthFromEnd1()
    {
        //$first = $this->arrayToListAndGetFirstNode([1, 2, 3, 4, 5]);

        //$this->assertTrue(true);
        $this->assertEquals(
            '{"val":1,"next":{"val":2,"next":{"val":3,"next":{"val":5,"next":null}}}}'
            , json_encode($this->solution->removeNthFromEnd($this->arrayToListAndGetFirstNode([1, 2, 3, 4, 5]), 2)));
    }

    public function testRemoveNthFromEnd2()
    {
        //$first = $this->arrayToListAndGetFirstNode([1, 2, 3, 4, 5]);

        //$this->assertTrue(true);
        $this->assertEquals(
            '{"val":2,"next":null}'
            , json_encode($this->solution->removeNthFromEnd($this->arrayToListAndGetFirstNode([1, 2]), 2)));
    }

    public function testRemoveNthFromEnd3()
    {
        //$first = $this->arrayToListAndGetFirstNode([1, 2, 3, 4, 5]);

        //$this->assertTrue(true);
        $this->assertEquals(
            'null'
            , json_encode($this->solution->removeNthFromEnd($this->arrayToListAndGetFirstNode([1]), 1)));
    }

    private function arrayToListAndGetFirstNode(array $nums): ListNode
    {

        $firstNode = new ListNode(
            $nums[0],
            (count($nums) === 1) ? null : $this->getNextNode(1, $nums));

        return $firstNode;

    }

    private function getNextNode(int $currentIndex, array $nums): ListNode
    {
        if ($currentIndex >= count($nums) - 1) {
            return new ListNode($nums[$currentIndex], null);
        }
        return new ListNode($nums[$currentIndex], $this->getNextNode($currentIndex + 1, $nums));
    }

}
