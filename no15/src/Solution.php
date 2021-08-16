<?php

namespace no15\src;
class Solution
{

    /**
     * @param Integer[][] $matrix
     * @return Integer[]
     */
    function spiralOrder($matrix) {

        if(count($matrix) ===0){
            return [];
        }

        $r1=0;
        $c1=0;
        $r2=count($matrix)-1;
        $c2=count($matrix[0])-1;

        $result=[];
        while($r1<=$r2 && $c1<=$c2){

            for ($c=$c1 ; $c<=$c2;$c++) {
                $result[]=$matrix[$r1][$c];
            }

            for ($r=$r1+1 ; $r<=$r2;$r++) {
                $result[]=$matrix[$r][$c2];
            }

            if($r1 < $r2 && $c1<$c2){

                for ($c=$c2-1 ; $c>$c1;$c--) {
                    $result[]=$matrix[$r2][$c];
                }

                for ($r=$r2 ; $r>$r1;$r--) {
                    $result[]=$matrix[$r][$c1];
                }

            }



            $r1++;
            $r2--;
            $c1++;
            $c2--;

        }

        return $result;


    }
}
