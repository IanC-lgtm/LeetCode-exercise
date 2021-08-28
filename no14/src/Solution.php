<?php

namespace no14\src;
class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maxSubArray($nums)
    {
        
        $currentSum = 0;
        $maxSum = $nums[0];

        foreach ($nums as $num) {

            $currentSum += $num;

            $maxSum = max($currentSum, $maxSum);

            $currentSum = ($currentSum < 0) ? 0 : $currentSum;


        }

        return $maxSum;

    }
}
