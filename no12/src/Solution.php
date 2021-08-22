<?php

namespace no12\src;

class Solution
{

    /**
     * @param Integer[][] $matrix
     * @return NULL
     */
    function rotate(&$matrix)
    {


        $this->transpose($matrix);

        $this->reflect($matrix);

    }

    private function transpose(array &$matrix)
    {
        for ($i = 0; $i < count($matrix); $i++) {
            for ($j = $i; $j < count($matrix); $j++) {
                $temp = $matrix[$j][$i];
                $matrix[$j][$i] = $matrix[$i][$j];
                $matrix[$i][$j] = $temp;

            }
        }

    }

    private function reflect(array &$matrix)
    {
        $n = count($matrix);
        for ($i = 0; $i < floor($n / 2); $i++) {
            for ($j = 0; $j < $n; $j++) {

                $temp = $matrix[$j][$i];
                $matrix[$j][$i] = $matrix[$j][$n - $i - 1];
                $matrix[$j][$n - $i - 1] = $temp;

            }
        }

    }


}
