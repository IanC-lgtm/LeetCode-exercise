<?php

namespace no20\src;
class Solution
{
    /**
     * @param Integer $n
     * @return Integer
     */
    function climbStairs($n) {

        if ($n===0) return 0;
        if ($n===1) return 1;
        if ($n===2) return 2;

        $before2Step=1;
        $before1Step=2;
        $totalSteps=0;

        for ($i=2 ; $i<$n;$i++) {

            $totalSteps=$before2Step+$before1Step;

            $before2Step=$before1Step;
            $before1Step=$totalSteps;


        }

        return $totalSteps;

    }
}
