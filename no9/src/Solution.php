<?php

namespace no9\src;

use no8\src\ListNode;

class Solution
{

    /**
     * @param ListNode[] $lists
     * @return ListNode|null
     */
    function mergeKLists($lists)
    {
        if (!$lists) {
            return null;
        }
        if (count($lists) === 1) {
            return $lists[0];
        }

        $lastList = $this->mergeTwoLists($lists[0], $lists[1]);

        for ($i = 2; $i < count($lists); $i++) {

            $lastList = $this->mergeTwoLists($lists[$i], $lastList);

        }

        return $lastList;

    }

    /**
     * @param $l1
     * @param $l2
     * @return ListNode|null
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
