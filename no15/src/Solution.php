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

        $currentX=-1;
        $currentY=0;

        $result=[];
        $iteration=0;
        while( ! ($currentX===$endX && $currentY=== $endY)){

            for ($x1=$iteration ; $x1<count($matrix[0])-$iteration;$x1++) {
                $result[]=$matrix[$iteration][$x1];
                $currentX=$x1;
            }

            if(($currentX===$endX && $currentY=== $endY)) break;
            --$x1;

            for ($y1=$iteration+1 ; $y1<count($matrix)-$iteration;$y1++) {
                $result[]=$matrix[$y1][$x1];
                $currentY=$y1;
            }

            if(($currentX===$endX && $currentY=== $endY)) break;
            --$y1;

            for ($x2=$x1-1-$iteration ; $x2>$iteration-1;$x2--) {
                $result[]=$matrix[$y1][$x2];
                $currentX=$x2;
            }
            if(($currentX===$endX && $currentY=== $endY)) break;

            for ($y2=$y1-1-$iteration ; $y2>$iteration;$y2--) {
                $result[]=$matrix[$y2][$iteration];
                $currentY=$y2;
            }
            if(($currentX===$endX && $currentY=== $endY)) break;

            $iteration++;

            //var_dump($result);

        }

        return $result;

    }
}
