<?php

namespace no19\src;
class Solution
{
    /**
     * @param Integer $m
     * @param Integer $n
     * @return Integer
     */
    function uniquePaths($m, $n) {

        // m = rows
        // n = columns

        $table=[[]];



        for ($row=0 ; $row<$m;$row++) {

            for ($col=0 ; $col<$n;$col++) {

                if($row===0 || $col===0){
                    $table[$row][$col]=1;
                }else{
                    $table[$row][$col] =$table[$row-1][$col]+$table[$row][$col-1];
                }

            }

        }

        return $table[$m-1][$n-1];


    }
}
