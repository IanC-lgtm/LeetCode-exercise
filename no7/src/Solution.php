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
        $eg = ["{" => "}", "[" => "]", "(" => ")"];
        $stack = [];
        for ($i = 0; $i < strlen($s); $i++) {
            $tmp = end($stack);
            if ($tmp !== false && $eg["{$tmp}"] == $s[$i]) {
                unset($stack[key($stack)]);
            } else {
                $stack[] = $s[$i];
            }
        }
        return count($stack) == 0;
    }

}
