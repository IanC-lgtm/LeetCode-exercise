<?php

namespace no16\src;
class Solution
{

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function canJump($nums)
    {

        $count = count($nums) - 1;
        $r = 0;


        for ($i = 0; $i <= $count; $i++) {

            if($i > $r) return false;
            $r=max($r,$nums[$i]+$i);

        }

        return true;

    }
}
