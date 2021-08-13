<?php

namespace MergeSortExercise\src;
class Solution
{

    public function sort(array $nums){

        $result = $this->startSort($nums, 0, count($nums) - 1);
        return $result;

    }

    private function startSort(array $nums, int $start, int $end):array
    {
        echo json_encode($nums).PHP_EOL;

        $count = count($nums);
        if($count <=2){
            switch ($count){
                case  0:
                    return [];
                case  1:
                    return [$nums[0]];
                case  2:
                    return ($nums[0] > $nums[1])?[$nums[1],$nums[0] ]:[$nums[0],$nums[1]];
            }

        }

        $mid=(int)floor(($end-$start) / 2);
        echo $mid.PHP_EOL;

        // divide
        $leftArray=$this->startSort(array_slice($nums,$start, $mid-$start+1),$start,$mid);
        $rightArray=$this->startSort(array_slice($nums,$mid+1,$end-$mid),$start,$mid);


        // merge these divide array
        $result=[];

        while(count($leftArray) && count($rightArray)){
            if($leftArray[0]>$rightArray[0]){
                $result[]=array_shift($rightArray);

            }else{
                $result[]=array_shift($leftArray);

            }

        }

        return array_merge($result,$leftArray,$rightArray);

    }
}
