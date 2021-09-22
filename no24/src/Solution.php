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
            $currentNum = substr($s, $i, 1);
            $currentAndBefore1Num = substr($s, $i - 1, 2);

            $results[$i] = 0;
            if ($currentNum >= 1 && $currentNum <= 9) {
                $results[$i] += $results[$i - 1];
            }

            if ($currentAndBefore1Num >= 10 && $currentAndBefore1Num <= 26) {
                $results[$i] += ($i >= 2) ? $results[$i - 2] : 1;
            }


        }

        return $results[$maxLength - 1];


    }
}

