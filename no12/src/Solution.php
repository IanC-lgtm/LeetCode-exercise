<?php

namespace no12\src;
use function MongoDB\BSON\fromJSON;

class Solution
{

    /**
     * @param Integer[][] $matrix
     * @return NULL
     */
    function rotate(array $matrix) {

        $new2D=array_slice($matrix,0);

        $xMax=count($matrix[0])-1;
        for ($i=0 ; $i<count($matrix[0]);$i++) {

            for ($j=0 ; $j<count($matrix[0]);$j++) {

                $new2D[$j][$xMax-$i]=$matrix[$i][$j];

            }

        }

        return $new2D;


    }

}
