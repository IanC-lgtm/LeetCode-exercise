<?php

namespace no27\src;

class Solution
{

    /**
     * @param TreeNode $root
     * @return Integer[][]
     */
    function levelOrder($root)
    {
        $queue = [];
        $results = [];

        if (!$root) {
            return $results;
        }

        $queue[] = $root;

        while (count($queue) > 0) {

            $level = count($queue);

            $subResult = [];

            for ($i = 0; $i < $level; $i++) {

                $firstNode = $queue[0];
                
                if ($firstNode->left !== null) {
                    $queue[] = $firstNode->left;
                }

                if ($firstNode->right !== null) {
                    $queue[] = $firstNode->right;
                }

                // remove first one
                $currentNode = array_shift($queue);
                $subResult[] = $currentNode->val;

            }

            $results[] = $subResult;

        }

        return $results;

    }

}
