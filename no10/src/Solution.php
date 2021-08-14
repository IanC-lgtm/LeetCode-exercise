<?php

namespace no10\src;
class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function search($nums, $target) {


        $left=0;
        $right=count($nums)-1;

        while($right>=$left){

            $mid=(int)floor(($right+$left)/2);
            $midNum=$nums[$mid];

            if($midNum===$target){
                return $mid;
            }

            $leftNum=$nums[$left];
            $rightNum=$nums[$right];

            if($midNum<$rightNum){
                //right is sort

                if($target > $midNum && $rightNum>=$target){
                    // making sure the target is in right hand
                    $left=$mid+1;
                }else{
                    $right=$mid-1;
                }


            }else if($midNum>=$rightNum){
                // left is sort

                if($target < $midNum && $leftNum<=$target){
                    // target is in left hand
                    $right=$mid-1;
                }else{
                    $left=$mid+1;
                }

            }


        }

        return -1;

    }

}
