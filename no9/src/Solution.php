<?php

namespace no9\src;

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
        $amount = count($lists);
        if ($amount === 1) {
            return $lists[0];
        }

        $interval = 1;

        while ($amount > $interval) {
            for ($i = 0; $i < $amount - $interval; $i = $i + ($interval * 2)) {

                $lists[$i] = $this->mergeTwoLists($lists[$i], $lists[$i + $interval]);

            }
            $interval *= 2;
        }

        return $lists[0];

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
