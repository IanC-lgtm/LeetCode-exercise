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

        $resultArrays = [];

        sort($nums);
        for ($firstIndex = 0; $firstIndex < count($nums) - 2; $firstIndex++) {

            if ($firstIndex === 0 || ($firstIndex > 0 && ($nums[$firstIndex] !== $nums[$firstIndex - 1]))) {

                $targetValue = 0 - $nums[$firstIndex];
                $secondIndex = $firstIndex + 1;
                $thirdIndex = count($nums) - 1;

                while ($secondIndex < $thirdIndex &&
                    $secondIndex < count($nums) - 1 &&
                    $thirdIndex > $firstIndex + 1) {

                    if (($nums[$secondIndex] + $nums[$thirdIndex]) === $targetValue) {
                        $resultArrays[] = [$nums[$firstIndex], $nums[$secondIndex], $nums[$thirdIndex]];

                        while ($thirdIndex > $secondIndex && $nums[$thirdIndex] === $nums[$thirdIndex - 1]) $thirdIndex--;
                        while ($thirdIndex > $secondIndex && $nums[$secondIndex] === $nums[$secondIndex + 1]) $secondIndex++;
                        $secondIndex++;
                        $thirdIndex--;

                    } else if ($targetValue > $nums[$secondIndex] + $nums[$thirdIndex]) {
                        $secondIndex++;
                    } else {
                        $thirdIndex--;
                    }

                }
            }


        }

        return $resultArrays;
    }


}

