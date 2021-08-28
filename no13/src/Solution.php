<?php

namespace no13\src;
class Solution
{
    /**
     * @param String[] $strs
     * @return String[][]
     */
    function groupAnagrams($strs)
    {
        $map = [];
        foreach ($strs as $rawStr) {
            $sortedChars = str_split($rawStr);
            sort($sortedChars);

            $sortedStr = implode('', $sortedChars);

            if (!isset($map[$sortedStr])) {
                $map[$sortedStr] = [$rawStr];
            } else {
                $map[$sortedStr][] = $rawStr;
            }

        }

        return $map;

    }

}
