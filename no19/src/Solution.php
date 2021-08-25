<?php

namespace no19\src;
class Solution
{
    /**
     * @param Integer $m
     * @param Integer $n
     * @return Integer
     */
    function uniquePaths($m, $n) {

        // m = rows
        // n = columns

        $N=$n+$m-2;

        $k=$m-1;
        $res=1;

        for ($i=1 ; $i<=$k;$i++) {

            $res=$res*($N-$k+$i)/$i;

        }

        return $res;


    }
}
