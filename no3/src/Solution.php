<?php

namespace no3\src;
class Solution
{

    /**
     * @param String $s
     * @return String
     */
    function longestPalindrome(string $s): string
    {
        if (!$s || strlen($s) === 1) {
            return $s;
        }

        $start = 0;
        $end = 0;

        for ($i = 0; $i < strlen($s); $i++) {
            $oddLength = $this->get($s, $i, $i);
            $evenLength = $this->get($s, $i, $i + 1);

            $currentLength = max($oddLength, $evenLength);

            if ($currentLength > ($end - $start)) {
                // refresh max needle
                $start = $i - (int)floor(($currentLength - 1) / 2);

                // if it's even, the distance between middle and right will > 1 compare with middle to left
                $end = $i + (int)floor($currentLength / 2);
            }

        }

        return substr($s, $start, $end - $start + 1);


    }

    private function get(string $s, int $left, int $right)
    {
        while (
            $left >= 0 && $right < strlen($s) &&
            substr($s, $left, 1) === substr($s, $right, 1)
        ) {
            $left--;
            $right++;
        }
        return $right - $left - 1;

    }

}

