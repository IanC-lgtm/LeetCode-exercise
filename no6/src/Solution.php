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
        $dummy = new ListNode(0, $head);

        $first = $dummy;
        $second = $dummy;

        for ($i = 0; $i < $n + 1; $i++) {
            $first = $first->next;
        }

        while ($first) {
            $first = $first->next;
            $second = $second->next;
        }

        $second->next = $second->next->next;

        return $dummy->next;


    }

}
