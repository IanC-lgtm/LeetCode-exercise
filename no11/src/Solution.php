<?php

namespace no11\src;
class Solution
{
    private $results = [];

    private $candidates = [];

    /**
     * @param Integer[] $candidates
     * @param Integer $target
     * @return Integer[][]
     */
    function combinationSum($candidates, $target)
    {

        $candidateCount = count($candidates);

        $this->candidates = $candidates;
        if ($candidateCount === 0) {

            return [];

        }

        $this->check(0, [], $target);

        return $this->results;

    }

    private function check($startIndex, $currentCandidates, int $target)
    {
        if ($target === 0) {
            $this->results[] = $currentCandidates;
            return;
        }

        for ($i = $startIndex; $i < count($this->candidates); $i++) {
            $currentNum = $this->candidates[$i];
            $remain = $target - $currentNum;

            if ($remain >= 0) {

                $currentCandidates[] = $currentNum;
                $this->check($i, $currentCandidates, $remain);

                // remove last candidate, try next.
                array_pop($currentCandidates);
            }


        }


    }


}
