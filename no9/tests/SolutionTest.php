<?php

namespace no9\tests;

use no9\src\ListNode;
use no9\src\Solution;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{

    private $solution;

    public function setUp(): void
    {
        parent::setUp();
        $this->solution = new Solution();
    }

    public function testMergeKLists1()
    {

        $this->assertEquals(
            '{"val":1,"next":{"val":1,"next":{"val":2,"next":{"val":3,"next":{"val":4,"next":{"val":4,"next":{"val":5,"next":{"val":6,"next":null}}}}}}}}'
            ,
            json_encode($this->solution->mergeKLists(
                [
                    $this->arrayToListAndGetFirstNode([1, 4, 5]),
                    $this->arrayToListAndGetFirstNode([1, 3, 4]),
                    $this->arrayToListAndGetFirstNode([2, 6])
                ]
            )
            )
        );

    }


    public function testMergeKLists2()
    {

        $this->assertEquals(
            '{"val":1,"next":{"val":1,"next":{"val":1,"next":{"val":1,"next":{"val":2,"next":{"val":2,"next":{"val":3,"next":{"val":4,"next":{"val":4,"next":{"val":5,"next":{"val":6,"next":{"val":6,"next":{"val":8,"next":{"val":4,"next":{"val":10,"next":{"val":5,"next":null}}}}}}}}}}}}}}}}'
            ,
            json_encode($this->solution->mergeKLists(
                [
                    $this->arrayToListAndGetFirstNode([1, 4, 5]),
                    $this->arrayToListAndGetFirstNode([1, 3, 4]),
                    $this->arrayToListAndGetFirstNode([2, 6]),
                    $this->arrayToListAndGetFirstNode([1, 10, 5]),
                    $this->arrayToListAndGetFirstNode([1, 8, 4]),
                    $this->arrayToListAndGetFirstNode([2, 6])
                ]
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
