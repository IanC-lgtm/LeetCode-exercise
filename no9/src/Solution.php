<?php

namespace no9\src;

class Solution
{

    /**
     * @param ListNode[] $lists
     * @return ListNode|null
     */
    function mergeKLists($lists){

        if(count($lists)===0){
            return null;
        }

        if(count($lists)===1){
            return $lists[0];
        }

        $interval=1;
        $count=count($lists);

        while($count > $interval){

            for ($i=0 ; $i<$count-$interval;$i+=($interval*2)) {

                $lists[$i]=$this->merge($lists[$i],$lists[$i+$interval]);

            }

            $interval*=2;

        }

        return $lists[0];


    }

    private function merge($i1, $i2)
    {

        $result=new ListNode('d',null);
        $head=$result;
        while($i1 && $i2){

            if($i1->val>$i2->val){
                $result->next=$i2;
                $i2=$i2->next;
            }else{
                $result->next=$i1;
                $i1=$i1->next;
            }

            $result=$result->next;

        }
        if($i1)$result->next=$i1;
        if($i2)$result->next=$i2;

        return $head->next;

    }


}
