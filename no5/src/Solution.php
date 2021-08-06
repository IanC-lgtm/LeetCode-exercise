<?php

namespace no5\src;
class Solution
{


    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function threeSum($nums)
    {
        if (count($nums) < 3) {
            return [];
        }

        sort($nums);
        $resultArrays = [];

        for ($i = 0; $i < count($nums) - 2; $i++) {

            if ($i > 0 && $nums[$i] === $nums[$i - 1]) {
                //ignore duplicate

            } else {

                $currentNum = $nums[$i];
                $targetNumber1 = 0 - $currentNum;

                $left = $i + 1;
                $right = count($nums) - 1;

                while (
                    $right < count($nums)
                    && $right > $left
                ) {

                    $leftNum = $nums[$left];
                    $rightNum = $nums[$right];

                    $targetNumber2 = $targetNumber1 - $leftNum;

                    if ($rightNum === $targetNumber2) {
                        $resultArrays[] = [$currentNum, $leftNum, $rightNum];

                        // skip duplicate
                        while ($left < count($nums) - 1 && $nums[$left] === $nums[$left + 1]) $left++;
                        $left++;
                        while ($right > 1 && $nums[$right] === $nums[$right - 1]) $right--;
                        $right--;


                    } else if ($rightNum > $targetNumber2) {
                        // right too much

                        // skip duplicate
                        $right--;

                    } else {
                        //right too less
                        $left++;

                    }
                }


            }


        }


        return $resultArrays;
    }


}

