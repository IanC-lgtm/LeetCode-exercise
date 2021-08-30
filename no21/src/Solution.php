<?php

namespace no21\src;
class Solution
{
    /**
     * @param Integer[][] $matrix
     * @return NULL
     */
    function setZeroes(&$matrix) {

        $colCount=count($matrix[0]);
        $rowCount=count($matrix);

        $col0Is0=false;

        // mark which starts of row / column is 0
        for ($row=0 ; $row<$rowCount;$row++) {

            if($matrix[$row][0]===0){
                // A
                $col0Is0=true;
            }

            for ($col=1 ; $col<$colCount;$col++) {

                if($matrix[$row][$col]===0){

                    // mark row or col's beginning as 0
                    $matrix[$row][0]=0;
                    $matrix[0][$col]=0;
                }

            }

        }


        // start to set 0 from part 1 result
        for ($row=$rowCount-1 ; $row>=0;$row--) {

            for ($col=$colCount-1 ; $col>=1;$col--) {

                if($matrix[$row][0]===0 || $matrix[0][$col]===0){
                    $matrix[$row][$col]=0;
                }

            }
            if($col0Is0){
                // A'
                $matrix[$row][0]=0;
                //$matrix[$row][$col]=0;
            }

        }

            echo json_encode($matrix);

    }
}
