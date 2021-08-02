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

        $leftIndex = 0;
        $rightIndex = count($height) - 1;

        do {
            $leftH = $height[$leftIndex];
            $rightH = $height[$rightIndex];
            $finalH = min($leftH, $rightH);

            $result = $finalH * ($rightIndex - $leftIndex);

            $max = max($result, $max);

            if ($leftH > $rightH || $leftH === $rightH) {

                $rightIndex--;
            } else if ($leftH < $rightH) {

                $leftIndex++;
            }

        } while ($rightIndex > $leftIndex);

        return $max;

    }


}

