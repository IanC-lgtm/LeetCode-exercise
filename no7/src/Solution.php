<?php

namespace no7\src;
class Solution
{


    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s)
    {
        return $this->test(str_split($s));
    }

    private function test(array $s)
    {
        $checked = [$s[0]];
        $lastIndex = 0;
        $blankCount = ($s[0] === '') ? 1 : 0;

        for ($i = 1; $i < count($s); $i++) {

            if ($s[$i] === '') {
                ++$blankCount;
            } else if (($s[$i] === ']' && array_pop($checked) === '[') ||
                ($s[$i] === ')' && array_pop($checked) === '(') ||
                ($s[$i] === '}' && array_pop($checked) === '{')
            ) {
                $s[$i] = '';
                $s[$lastIndex] = '';
                return $this->test($s);
            } else if ($s[$i] !== '') {
                $checked[] = $s[$i];
                $lastIndex = $i;
            }

        }

        if ($blankCount === count($s)) {
            return true;
        }

        return false;

    }
}
