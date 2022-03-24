<?php

namespace no33\src;
class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function longestConsecutive($nums)
    {

        $numMap = [];

        foreach ($nums as $num) {

            $numMap[$num] = true;

        }

        $best = 0;
        foreach ($nums as $x) {

            if (!isset($numMap[$x - 1])) {
                $y = $x + 1;
                while (isset($numMap[$y])) {
                    $y += 1;
                }
                $best = max($best, $y - $x);
            }
        }

        return $best;
    }
}
