<?php

namespace no12\src;

class Solution
{

    /**
     * @param Integer[][] $matrix
     * @return NULL
     */
    function rotate(&$matrix) {

        $n = count($matrix[0]);

        // do matrix transpose
        $this->transpose($n, $matrix);
        $this->reflect($n, $matrix);


    }


    protected function transpose(int $n, array &$matrix)
    {
        for ($i = 0; $i < $n; $i++) {
            for ($j = $i; $j < $n; $j++) {
                $temp = $matrix[$j][$i];
                $matrix[$j][$i] = $matrix[$i][$j];
                $matrix[$i][$j] = $temp;
            }

        }
    }

    private function reflect(int $n, &$matrix)
    {
        for ($i = 0; $i < $n; $i++) {
            for ($j = 0; $j < floor($n/2); $j++) {
                $temp = $matrix[$i][$j];
                $matrix[$i][$j] = $matrix[$i][$n-$j-1];
                $matrix[$i][$n-$j-1] = $temp;
            }

        }
    }


}
