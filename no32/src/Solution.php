<?php

namespace no32\src;
class Solution
{

    /**
     * @param String $s
     * @return Boolean
     */
    function isPalindrome($s)
    {

        $len = strlen($s);

        if ($len === 1) {
            return true;
        }

        $s = mb_strtolower($s);
        $s = preg_replace("/[^A-Za-z0-9]+/", "", $s);

        $len = strlen($s);

        $left = 0;
        $right = $len - 1;

        while ($left < $right) {
            $leftC = substr($s, $left++, 1);
            $rightC = substr($s, $right--, 1);
            if ($leftC != $rightC) {
                return false;
            }

        }
        return true;

    }

}

