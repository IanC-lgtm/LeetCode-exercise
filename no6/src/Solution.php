<?php

namespace no6\src;
class Solution
{


    /**
     * @param ListNode $head
     * @param Integer $n
     * @return ListNode
     */
    function removeNthFromEnd($head, $n)
    {
        $totalCount = 0;

        $current = $head;
        while ($current !== null) {
            $totalCount++;
            $current = $current->next;
        }

        $removeTarget = $this->removeTarget($head, $totalCount, $totalCount - $n, 0);
        return $removeTarget;


    }

    private function removeTarget($head, int $totalCount, int $targetIndex, $currentIndex)
    {

        if ($currentIndex + 1 === $targetIndex) {
            //skip the link
            $head->next = $head->next->next;

        } else if ($head && $head->next && $currentIndex !== $targetIndex) {
            // go deeper
            $head->next = $this->removeTarget($head->next, $totalCount, $targetIndex, ++$currentIndex);
        } else if ($head && $currentIndex === $targetIndex) {
            // remove self
            return $this->removeTarget($head->next, $totalCount, $targetIndex, ++$currentIndex);
        }

        return $head;

    }

}
