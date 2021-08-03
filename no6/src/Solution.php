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
        if (!$head) {
            return null;
        }
        $arr = [$head->val];
        while ($head = $head->next) {
            $arr[] = $head->val;
        }
        $arr = array_reverse($arr);

        $node = null;
        foreach ($arr as $k => $v) {
            if ($k + 1 === $n) {
                continue;
            }
            $node = new ListNode($v, $node);
        }

        return $node;


    }

}
