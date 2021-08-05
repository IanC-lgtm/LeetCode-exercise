<?php

namespace no1\src;
class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target)
    {

        $checked = [];

        for ($i = 0; $i < count($nums); $i++) {

            $targetValue = $target - $nums[$i];

            if (
                isset($checked[$nums[$i]])
            ) {
                return [$checked[$nums[$i]], $i];
            } else {
                $checked[$targetValue] = $i;
            }


        }

    }

}
