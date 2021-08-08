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

        $dummy = new ListNode('', null);
        $head = $dummy;
        while ($l1 || $l2) {

            if (($l1 && !$l2)) {
                $value = $l1->val;
                $l1 = $l1->next;
            } else if ((!$l1 && $l2)) {
                $value = $l2->val;
                $l2 = $l2->next;
            } else if (($l1->val < $l2->val)) {
                $value = $l1->val;
                $l1 = $l1->next;
            } else {
                $value = $l2->val;
                $l2 = $l2->next;
            }

            $dummy->next = new ListNode($value, null);

            $dummy = $dummy->next;

        }

        return $head->next;
    }
}
