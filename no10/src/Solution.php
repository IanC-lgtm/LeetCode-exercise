<?php

namespace no10\src;
class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function search($nums, $target)
    {

        $left = 0;
        $right = count($nums) - 1;

        while ($left <= $right) {

            $mid = $left + (int)floor(($right - $left) / 2);

            if ($nums[$mid] === $target) {
                return $mid;
            }

            if ($nums[$mid] < $nums[$right]) {
                //right is sorted, check right hand
                if ($target > $nums[$mid] && $nums[$right] >= $target) {
                    $left = $mid + 1;
                } else {
                    $right = $mid - 1;
                }
            } else if ($nums[$mid] >= $nums[$right]) {
                //left is sorted
                if ($target < $nums[$mid] && $nums[$left] <= $target) {
                    $right = $mid - 1;
                } else {
                    $left = $mid + 1;
                }
            }

        }

        return -1;

    }
}
