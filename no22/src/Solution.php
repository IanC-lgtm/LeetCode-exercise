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

        $l=0;
        $minLeft=0;
        $minLen=strlen($s)+1;
        $currentFindCount=0;

       for ($r=0 ; $r<strlen($s);$r++) {
           $currentChar = substr($s, $r, 1);

           if(isset($charNeedCountMap[$currentChar])) {

               $charNeedCountMap[$currentChar]--;

               if($charNeedCountMap[$currentChar]>=0){
                   $currentFindCount++;
               }

               while ($currentFindCount === strlen($t)) {

                   if ($minLen > ($r - $l + 1)) {
                       $minLeft = $l;
                       $minLen = ($r - $l + 1);
                   }

                   $currentLeftChar = substr($s, $l, 1);
                   if (isset($charNeedCountMap[$currentLeftChar])) {

                       $charNeedCountMap[$currentLeftChar] += 1;

                       if ($charNeedCountMap[$currentLeftChar] > 0) {
                           $currentFindCount--;
                       }
                   }
                   $l++;

               }
           }

       }

        if($minLen>strlen($s))
        {
            return "";
        }

        return substr($s,$minLeft,$minLen);

    }
}
