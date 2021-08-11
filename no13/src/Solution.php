<?php

namespace no13\src;
class Solution
{
    /**
     * @param String[] $strs
     * @return String[][]
     */
    function groupAnagrams($strs) {

        $map=[];

        for ($i=0 ; $i<count($strs);$i++) {

            $currentWord = $strs[$i];

            $chars=str_split($currentWord);
            sort($chars);

            $sortedWord=implode('',$chars);

            if(isset($map[$sortedWord])){
                $map[$sortedWord][]=$currentWord;
            }else{
                $map[$sortedWord]=[$currentWord];
            }
        }

        $result=[];
        foreach ($map as $array) {

            $result[]=$array;
        }


        return $result;

    }
}
