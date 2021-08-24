<?php

namespace no18\src;
class Solution
{

    /**
     * @param Integer[][] $intervals
     * @param Integer[] $newInterval
     * @return Integer[][]
     */
    function insert($intervals, $newInterval) {

        $results=[];
        $currentIndex=0;
        $intervalCount=count($intervals);

        // just add the interval without overlapping
        while($currentIndex<$intervalCount &&  $newInterval[0]> $intervals[$currentIndex][1]){
            $results[]=$intervals[$currentIndex++];
        }

        // start merge
        while($currentIndex<$intervalCount
            && $newInterval[0]<= $intervals[$currentIndex][1]
            && $newInterval[1]>=$intervals[$currentIndex][0]
        ){

            $newInterval[0]=min($intervals[$currentIndex][0], $newInterval[0]);
            $newInterval[1]=max($intervals[$currentIndex][1], $newInterval[1]);

            $currentIndex++;

        }

        // add merge results
        $results[]=$newInterval;

        // merge rest
        while($currentIndex<$intervalCount){
            $results[]=$intervals[$currentIndex++];
        }

        return $results;


    }


}
