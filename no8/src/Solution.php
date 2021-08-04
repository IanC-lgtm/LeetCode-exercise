<?php

namespace no8\src;
class Solution
{

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function mergeTwoLists($l1, $l2)
    {

        if (!$l1 && !$l2) {
            return null;
        }
        $dummy = new ListNode('', null);

        $currentHead = $dummy;


        while ($l1 && $l2) {

            if ($l1->val > $l2->val) {
                $currentHead->next = $l2;
                $l2 = $l2->next;
            } else {
                $currentHead->next = $l1;
                $l1 = $l1->next;
            }

            $currentHead = $currentHead->next;

        }

        if ($l1) $currentHead->next = $l1;
        if ($l2) $currentHead->next = $l2;


        return $dummy->next;

    }

}
