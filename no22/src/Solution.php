<?php

namespace no22\src;
class Solution
{
    /**
     * @param String $s
     * @param String $t
     * @return String
     */
    function minWindow($s, $t) {
        $expectWords=str_split($t);
        $charNeedCountMap=[];
        foreach ($expectWords as $expectWord) {

            if(!isset($charNeedCountMap[$expectWord])){
                $charNeedCountMap[$expectWord]=1;
            }else{
                $charNeedCountMap[$expectWord]+=1;
            }

        }

        $currentLeft=0;
        $minLeft=0;
        $minLen=strlen($s)+1;

        $findStrCount=0;
        for ($right=0 ; $right<strlen($s);$right++) {
            $currentWord=substr($s,$right,1);

            if(isset($charNeedCountMap[$currentWord])){

                $charNeedCountMap[$currentWord]--;

                if($charNeedCountMap[$currentWord]>=0){

                    $findStrCount++;

                }

            }

            while($findStrCount === strlen($t)){

                if( ($right - $currentLeft+1) <= $minLen ){
                    // find new min window
                    $minLeft=$currentLeft;
                    $minLen=($right - $currentLeft+1);
                }

                $currentLeftWord=substr($s,$currentLeft,1);

                if(isset($charNeedCountMap[$currentLeftWord])){

                    $charNeedCountMap[$currentLeftWord]++;
                    if($charNeedCountMap[$currentLeftWord]>0){
                        $findStrCount--;
                    }

                }
                $currentLeft+=1;

            }


        }


        if($minLen > strlen($s)){
            return "";
        }

        return substr($s,$minLeft, $minLen);


    }
}
