<?php

namespace no26\src;
class Solution
{

    /**
     * @param TreeNode $p
     * @param TreeNode $q
     * @return Boolean
     */
    function isSameTree($p, $q) {

        $traveledStackP=[];
        $traveledStackQ=[];

        $resultsP=[];
        $resultsQ=[];

        while(
            ($p || count($traveledStackP)>0) ||
            ($q || count($traveledStackQ)>0)
        ){

            while($p || $q){
                // keep going to left
                $traveledStackP[]=$p;
                $traveledStackQ[]=$q;

                if($p->val !== $q->val){
                    return false;
                }

                $p=$p->left;
                $q=$q->left;


            }

            if($p->val !== $q->val){
                return false;
            }

            $resultsP[]=$p->val;
            $resultsQ[]=$q->val;

            $currentP=array_pop($traveledStackP);
            $p=($currentP->right)??null;

            $currentQ=array_pop($traveledStackQ);
            $q=($currentQ->right)??null;

        }


        return $resultsP===$resultsQ;

    }
}
