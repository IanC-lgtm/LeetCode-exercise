<?php

namespace no23\src;
class Solution
{
    /**
     * @param String[][] $board
     * @param String $word
     * @return Boolean
     */
    function exist($board, $word) {

        $words=str_split($word);

        $maxX = count($board[0]);
        $maxY = count($board);

        for ($x=0 ; $x< $maxX; $x++) {

            for ($y=0 ; $y< $maxY; $y++) {

                if($this->checkExist($board, $words,$x,$y,0,$maxX-1,$maxY-1)) return true;

            }

        }

        return false;

    }

    private function checkExist($board, $words, $currentX, $currentY, $currentFinding,$maxX, $maxY)
    {
        if($currentFinding===count($words)) return true;
        if($currentX<0 || $currentY<0 || $currentX>$maxX || $currentY>$maxY)return false;
        if($board[$currentY][$currentX]===0) return false;
        if($board[$currentY][$currentX]!==$words[$currentFinding]) return false;

        // checked
        $board[$currentY][$currentX]=0;

        $exist =
            $this->checkExist($board, $words, $currentX+1, $currentY, $currentFinding+1,$maxX, $maxY) ||
            $this->checkExist($board, $words, $currentX, $currentY+1, $currentFinding+1,$maxX, $maxY) ||
            $this->checkExist($board, $words, $currentX-1, $currentY, $currentFinding+1,$maxX, $maxY) ||
            $this->checkExist($board, $words, $currentX, $currentY-1, $currentFinding+1,$maxX, $maxY);

        // checked
        //$board[$currentY][$currentX]=0;

        return $exist;
    }
}
