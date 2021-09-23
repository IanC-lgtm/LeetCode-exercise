<?php

namespace no17\src;
class Solution
{
    /**
     * @param Integer[][] $intervals
     * @return Integer[][]
     */
    function merge($intervals)
    {
        if(count($intervals)===0) return [];

        sort($intervals);

        $result=[];

        $result[]=$intervals[0];

        $currentResultIndex=0;
        for ($i=1 ; $i<count($intervals);$i++) {

            $currentArray=$intervals[$i];

            if($result[$currentResultIndex][1] > $currentArray[0] && $result[$currentResultIndex][1] > $currentArray[1]){
                // totally include current, do nothing
            }

            if($result[$currentResultIndex][1] >= $currentArray[0] && $result[$currentResultIndex][1] <= $currentArray[1]){
                // merge
                $result[$currentResultIndex][0]=min($result[$currentResultIndex][0],$currentArray[0]);
                $result[$currentResultIndex][1]=max($result[$currentResultIndex][1],$currentArray[1]);
            }

            if($result[$currentResultIndex][1] < $currentArray[0]){
                //other section
                $result[]=$currentArray;
                $currentResultIndex++;
            }

        }

        return $result;
    }
}
