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

        $start=0;
        $end=count($intervals)-1;

        $results=$this->startMerge($intervals,$start,$end);

        return $results;

    }

    private function startMerge(array $intervals, int $start, int $end, $s='start')
    {
        echo $s.':'. json_encode($intervals).PHP_EOL;
        if(count($intervals)<=1){
            return $intervals;
        }

        $mid=(int)floor(($end-$start) /2 );

        $left=$this->startMerge( array_slice($intervals,$start,$mid-$start+1),0,$mid,'left');
        $right=$this->startMerge(array_slice($intervals,$mid+1,$end-$mid),0,$mid,'right');


        $result=[];
        while(count($left) && count($right) ){
            $leftT=$left[0];
            $rightT=$right[0];

            $l1=$leftT[0];
            $l2=$leftT[1];
            $r1=$rightT[0];
            $r2=$rightT[1];

            if(
                ($l2>=$r1 && $l1<=$r1) ||
                ($l2>=$r2 && $l1<=$r2) ||
                // all coverage
                ($l1 <= $r1 && $l2>=$r2) ||
                ($r1 <= $l1 && $r2 >= $l2)
            ){
                //head include
                //end include
                $result[]=[min($l1,$r1),max($l2,$r2)];
            }else{
                $result[]=$leftT;
                $result[]=$rightT;
            }
            array_shift($left);
            array_shift($right);
        }


        return array_merge($result,$left,$right);


    }
}
