<?php

namespace no16\src;
class Solution
{

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function canJump($nums) {

        $targetIndex=count($nums)-1;
        $isOk=true;

        for ($i=$targetIndex ; $i>=1;$i--) {

            if($nums[$i-1]+ $i-1 >= $targetIndex){
                $isOk=true;
                $targetIndex=$i-1;
            }else{
                $isOk=false;
            }

        }

        return $isOk;
    }

}
