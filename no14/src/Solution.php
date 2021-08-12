<?php

namespace no14\src;
class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maxSubArray($nums) {

        $max=$nums[0];
        $currentSum=max($max,0);

        for ($i=1 ; $i<count($nums);$i++) {

            $currentSum+=$nums[$i];

            $max= max($max, $currentSum);

            // reset to 0
            $currentSum=($currentSum<0)?0:$currentSum;

        }

        return $max;

    }
}
