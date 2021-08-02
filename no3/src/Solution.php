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
        if (strlen($s) === 1 || strlen($s) === 0) {
            return $s;
        }


        $maxResult = '';
        for ($i = 0; $i < strlen($s); $i++) {

            $odd = $this->getLongestPalindrome($s, $i, $i);
            $oven = $this->getLongestPalindrome($s, $i, $i + 1);

            $currentResult = (strlen($odd) > strlen($oven)) ? $odd : $oven;

            $maxResult = (strlen($currentResult) > strlen($maxResult)) ? $currentResult : $maxResult;

        }

        return $maxResult;

    }

    private function getLongestPalindrome($s, int $left, int $right)
    {

        while ($left >= 0 && $right <= strlen($s) && (substr($s, $left, 1) === substr($s, $right, 1))) {
            $left--;
            $right++;
        }

        return substr($s, $left + 1, $right - $left - 1);

    }
}

