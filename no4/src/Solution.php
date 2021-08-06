<?php

namespace no4\src;
class Solution
{

    /**
     * @param Integer[] $height
     * @return Integer
     */
    function maxArea($height)
    {

        $max = 0;

        $l = 0;
        $r = count($height) - 1;

        while ($l < $r) {

            $area = ($r - $l) * min($height[$l], $height[$r]);

            $max = max($max, $area);

            if ($height[$l] > $height[$r] || $height[$l] === $height[$r]) {
                $r--;
            } else if ($height[$r] > $height[$l]) {
                $l++;
            }

        }

        return $max;

    }


}

