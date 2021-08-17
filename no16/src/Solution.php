<?php

namespace no16\src;
class Solution
{

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function canJump($nums) {

        $r=count($nums)-1;

        for ($r2=$r-1 ; $r2>=0;$r2--) {

            if($nums[$r2] >= $r-$r2 ){
                $r=$r2;
            }

        }

        return $r===0;

    }
}
