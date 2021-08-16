<?php

namespace no15\src;
class Solution
{

    /**
     * @param Integer[][] $matrix
     * @return Integer[]
     */
    function spiralOrder($matrix) {

        $endX=(int)floor(count($matrix[0])/2);
        $endY=(int)floor(count($matrix)/2);

        $currentX=0;
        $currentY=0;

        $result=[];
        $iteration=0;
        while( ! ($currentX===$endX && $currentY=== $endY)){

            for ($x1=$iteration ; $x1<count($matrix[0])-$iteration;$x1++) {
                $result[]=$matrix[$iteration][$x1];
                $currentX=$x1;
            }

            --$x1;

            for ($y1=$iteration+1 ; $y1<count($matrix)-$iteration;$y1++) {
                $result[]=$matrix[$y1][$x1];
                $currentY=$y1;
            }

            --$y1;

            for ($x2=$x1-1 ; $x2>$iteration-1;$x2--) {
                $result[]=$matrix[$y1][$x2];
                $currentX=$x2;
            }
            --$x2;

            for ($y2=$y1-1 ; $y2>$iteration;$y2--) {
                $result[]=$matrix[$y2][$iteration];
                $currentY=$y2;
            }

            $iteration++;

            var_dump($result);

        }

        return $result;

    }
}
