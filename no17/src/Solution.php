<?php

namespace no17\src;
class Solution
{
    /**
     * @param Integer[][] $intervals
     * @return Integer[][]
     */
    function merge($intervals) {


        if(!$intervals){
           return [];
        }

        sort($intervals);

        $results=[];

        for ($i=0 ; $i<=count($intervals)-1;$i++) {

            $currentInterval = $intervals[$i];

            $lastIndex = count($results) - 1;

            if($lastIndex===-1 || $results[$lastIndex][1] < $currentInterval[0]){
                $results[]= $currentInterval;
            }else{

                if($results[$lastIndex][1] >= $currentInterval[0]){
                    $results[$lastIndex][0]=min($currentInterval[0],$results[$lastIndex][0]);
                    $results[$lastIndex][1]=max($currentInterval[1],$results[$lastIndex][1]);
                }

            }


        }

        return $results;

    }

}
