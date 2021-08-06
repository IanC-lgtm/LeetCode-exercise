<?php

namespace no11\src;
class Solution
{

    private $results = [];
    private $candidates = [];
    private $candidateCount = 0;

    /**
     * @param Integer[] $candidates
     * @param Integer $target
     * @return Integer[][]
     */
    function combinationSum($candidates, $target)
    {

        $this->candidates = $candidates;
        $this->candidateCount = count($candidates);

        $this->sum(0, $target, []);

        return $this->results;

    }

    private function sum(int $startIndex, int $target, array $resultArray)
    {
        if ($target === 0) {
            $this->results[] = $resultArray;
            return;
        }

        for ($i = $startIndex; $i < $this->candidateCount; $i++) {

            $remain = $target - $this->candidates[$i];

            if ($remain >= 0) {

                $resultArray[] = $this->candidates[$i];
                // recursive
                $this->sum($i, $remain, $resultArray);

                // remove the test one from current testing results
                array_pop($resultArray);
            }

        }

    }


}
