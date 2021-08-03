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
        $queue = [
            '[' => [],
            ']' => [],
            '(' => [],
            ')' => [],
            '{' => [],
            '}' => [],
        ];

        for ($i = 0; $i < strlen($s); $i++) {
            $char = substr($s, $i, 1);
            $queue[$char][] = $i;
        }

        if (
            count($queue['[']) === count($queue[']']) &&
            count($queue['(']) === count($queue[')']) &&
            count($queue['{']) === count($queue['}'])
        ) {

            $isValid = true;
            for ($i = 0; $i < count($queue['[']) && $isValid; $i++) {

                if (($queue['['][$i] + $queue[']'][$i]) === strlen($s) - 1 && $queue['['][$i] < $queue[']'][$i]) {
                    //
                } else if (($queue[']'][$i] - $queue['['][$i]) === 1) {
                    //
                } else {
                    return false;
                }

            }

            for ($i = 0; $i < count($queue['(']) && $isValid; $i++) {

                if (($queue['('][$i] + $queue[')'][$i]) === strlen($s) - 1 && $queue['('][$i] < $queue[')'][$i]) {
                    //
                } else if (($queue[')'][$i] - $queue['('][$i]) === 1) {
                    //
                } else {
                    return false;
                }

            }

            for ($i = 0; $i < count($queue['{']) && $isValid; $i++) {

                if (($queue['{'][$i] + $queue['}'][$i]) === strlen($s) - 1 && $queue['{'][$i] < $queue['}'][$i]) {
                    //
                } else if (($queue['}'][$i] - $queue['{'][$i]) === 1) {
                    //
                } else {
                    return false;
                }

            }

        } else {
            return false;
        }

        return true;


    }
}
