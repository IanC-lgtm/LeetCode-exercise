<?php

namespace no15\src;
class Solution
{

    /**
     * @param Integer[][] $matrix
     * @return Integer[]
     */
    function spiralOrder($matrix) {

        $result=[];
        $round=1;
        $cStart=0;
        $cEnd=count($matrix[0])-1;
        $rStart=0;
        $rEnd=count($matrix)-1;

        while($cEnd>=$cStart && $rEnd>=$rStart){
            for ($currentCol=$cStart ; $currentCol<=$cEnd;$currentCol++) {

                $result[]= $matrix[$round-1][$currentCol];

            }

            $currentCol--;
            for ($currentRow=$rStart+1 ; $currentRow<=$rEnd;$currentRow++) {

                $result[]=  $matrix[$currentRow][$currentCol];

            }

            $currentRow--;
            // 1 or round
            for ($currentCol=$cEnd-1 ; $currentCol>=$cStart && ($rStart!==$rEnd);$currentCol--) {

                $result[]=  $matrix[$currentRow][$currentCol];

            }


            $currentCol++;
            // 1 or round
            for ($currentRow=$rEnd-1 ; $currentRow>=$rStart+1  && ($cStart!==$cEnd);$currentRow--) {

                $result[]=  $matrix[$currentRow][$currentCol];

            }

            $round++;

            $cStart++;
            $cEnd--;
            $rStart++;
            $rEnd--;
        }

        return $result;


    }
}
