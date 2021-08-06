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

        $this->candidates = $candidates;

        $this->sum(0, $target, []);

        return $this->results;

    }

    function sum($i, $target, $currentResult = [])
    {
        if ($target === 0) {
            // get result
            $this->results[] = $currentResult;
            return;
        }

        if ($i >= count($this->candidates) || $target < 0) {
            // no need processed
            return;
        }

        $currentResult[] = $this->candidates[$i];

        // keep check current
        $this->sum($i, $target - $this->candidates[$i], $currentResult);

        array_pop($currentResult);

        // next
        $this->sum($i + 1, $target, $currentResult);

    }

}
