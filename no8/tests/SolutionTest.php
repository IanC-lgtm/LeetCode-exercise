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
