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

        $start = $end = 0;
        for ($i = 0; $i < strlen($s); $i++) {

            $oddLength = $this->getLongestPalindrome($s, $i, $i);
            $ovenLength = $this->getLongestPalindrome($s, $i, $i + 1);

            $currentLength = (($oddLength) > ($ovenLength)) ? $oddLength : $ovenLength;

            if ($currentLength > ($end - $start)) {

                $start = $i - floor(($currentLength - 1) / 2);
                $end = $i + ($currentLength / 2);

            }

        }

        return substr($s, $start, $end - $start + 1);

    }

    private function getLongestPalindrome($s, int $left, int $right)
    {

        while ($left >= 0 && $right <= strlen($s) && (substr($s, $left, 1) === substr($s, $right, 1))) {
            $left--;
            $right++;
        }

        return $right - $left - 1;

    }
}

