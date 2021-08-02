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

        for ($left = 0; $left < count($height); $left++) {

            for ($right = $left + 1; $right < count($height); $right++) {

                $currentHeight = ($height[$left] > $height[$right]) ? $height[$right] : $height[$left];
                $currentWidth = $right - $left;

                $result = $currentHeight * $currentWidth;

                $max = ($result > $max) ? $result : $max;

            }

        }

        return $max;

    }


}

