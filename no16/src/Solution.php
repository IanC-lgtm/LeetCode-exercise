<?php

namespace no16\src;
class Solution
{

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function canJump($nums) {

        $count = count($nums) - 1;


        $l=0;
        $r= $count;

        while($l <= $r){

            if($r===0){
                return true;
            }

            if($nums[$l] >= $r-$l && $l < $r){
                $r=$l;
                $l=0;
            }else{
                $l++;
            }



        }


        return false;

    }
}
