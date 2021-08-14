<?php

namespace no9\src;

class Solution
{

    /**
     * @param ListNode[] $lists
     * @return ListNode|null
     */
    function mergeKLists($lists){

        $listCount=count($lists);

        $result=$this->startMerge($lists,0,$listCount-1);

        return $result;

    }

    private function startMerge($lists, $start, $end)
    {

        echo json_encode($lists).PHP_EOL;

        if(count($lists)===0){
            return null;
        }else if(count($lists)<=1){
            return $lists[0];
        }

        $mid=(int)floor(($end-$start)/2);

        $leftLists=$this->startMerge(array_slice($lists,$start,$mid-$start+1),0,$mid-$start);
        $rightLists=$this->startMerge(array_slice($lists,$mid+1,$end-$mid),$start,$mid);

        $sortedResult=new ListNode('d',null);
        $returnHead=$sortedResult;

        while($leftLists && $rightLists){

            if($leftLists->val > $rightLists->val){
                $sortedResult->next=new ListNode($rightLists->val,null);
                $rightLists=$rightLists->next;
            }else{
                $sortedResult->next=new ListNode($leftLists->val,null);
                $leftLists=$leftLists->next;
            }

            $sortedResult=$sortedResult->next;

        }

        if($leftLists)$sortedResult->next=$leftLists;
        if($rightLists)$sortedResult->next=$rightLists;

        return $returnHead->next;


    }


}
