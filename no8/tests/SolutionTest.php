<?php

namespace no8\tests;

use no8\src\ListNode;
use no8\src\Solution;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{

    private $solution;

    public function setUp(): void
    {
        parent::setUp();
        $this->solution = new Solution();
    }

    public function testMergeTwoLists1()
    {
        $this->assertEquals(
            '{"val":1,"next":{"val":1,"next":{"val":2,"next":{"val":3,"next":{"val":4,"next":{"val":4,"next":null}}}}}}'
            ,
            json_encode($this->solution->mergeTwoLists(
                $this->arrayToListAndGetFirstNode([1, 2, 4]),
                $this->arrayToListAndGetFirstNode([1, 3, 4])
            )
            )
        );

    }

    public function testMergeTwoLists2()
    {
        $this->assertEquals(
            "null"
            ,
            json_encode($this->solution->mergeTwoLists(
                $this->arrayToListAndGetFirstNode([]),
                $this->arrayToListAndGetFirstNode([])
            )
            )
        );

    }

    public function testMergeTwoLists3()
    {
        $this->assertEquals(
            '{"val":0,"next":null}',
            json_encode($this->solution->mergeTwoLists(
                $this->arrayToListAndGetFirstNode([]),
                $this->arrayToListAndGetFirstNode([0])
            )
            )
        );

    }

    private function arrayToListAndGetFirstNode(array $nums)
    {
        if (!$nums) {
            return null;
        }

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
