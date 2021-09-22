<?php

namespace no24\src;
class Solution
{
    /**
     * @param String $s
     * @return Integer
     */
    function numDecodings($s)
    {

        $nums = str_split($s);
        $results = [];
        // 1 symbol
        $results[] = ($nums[0] != 0) ? 1 : 0;

        $maxLength = count($nums);
        for ($i = 1; $i < $maxLength; $i++) {
            $before1Num = substr($s, $i, 1);
            $before2Num = substr($s, $i - 1, 2);

            $results[$i] = 0;
            if ($before1Num >= 1 && $before1Num <= 9) {
                $results[$i] += $results[$i - 1];
            }

            if ($before2Num >= 10 && $before2Num <= 26) {
                $results[$i] += ($i >= 2) ? $results[$i - 2] : 1;
            }


        }

        return $results[$maxLength - 1];


    }
}

