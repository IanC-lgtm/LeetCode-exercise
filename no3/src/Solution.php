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

        for ($mid = 0; $mid < strlen($s); $mid++) {

            if ($mid === 0) {

                $maxResult = substr($s, 0, 1);


            } else {

                $currentResult = substr($s, $mid, 1);
                $left = $mid - 1;
                $right = $mid + 1;
                do {
                    
                    $leftLetter = substr($s, $left, 1);
                    $rightLetter = substr($s, $right, 1);

                    if ($leftLetter === $rightLetter) {
                        $currentResult = $leftLetter . $currentResult . $rightLetter;
                        $maxResult = (strlen($currentResult) > strlen($maxResult)) ? $currentResult : $maxResult;

                        $left -= 1;
                        $right += 1;
                    } else {
                        // stop search
                        $left = -1;
                    }

                } while ($left >= 0 && $right <= strlen($s));

            }

        }

        return $maxResult;
    }
}
