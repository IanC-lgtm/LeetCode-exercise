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
        $leftStacks = [];

        $rightMap = [
            ')' => '(',
            '}' => '{',
            ']' => '['
        ];
        for ($i = 0; $i < strlen($s); $i++) {
            $c = substr($s, $i, 1);
            if (isset($rightMap[$c]) && $rightMap[$c] === end($leftStacks)) {
                array_pop($leftStacks);
            } else {
                $leftStacks[] = $c;
            }
        }

        return count($leftStacks) === 0;

    }

}
