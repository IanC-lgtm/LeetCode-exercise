<?php

namespace no2\src;
class Solution
{

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s)
    {
        $strLen = strlen($s) - 1;

        $si = 0;
        $ei = 0;
        $max = 0;
        $checked = [];

        while ($ei <= $strLen) {

            $c = substr($s, $ei, 1);

            if (
                !isset($checked[$c])
            ) {
                //not exist
                $checked[$c] = true;

                $ei++;

                $max = max($max, $ei - $si);

            } else {
                // exist
                unset($checked[substr($s, $si, 1)]);
                $si++;

            }

        }

        return $max;

    }
}
