<?php

namespace no28\src;

use no25\src\TreeNode;

class Solution
{

    /**
     * @param TreeNode $root
     * @return Integer
     */
    function maxDepth($root)
    {
        if (!$root) {
            return 0;
        }

        $currentLevel = 1;
        $queue = [$root];

        while (count($queue) > 0) {

            $count = count($queue);
            $hasNextLevel = false;

            for ($i = 0; $i < $count; $i++) {

                $currentNode = $queue[0];

                if ($currentNode->left) {
                    $hasNextLevel = true;
                    $queue[] = $currentNode->left;
                }

                if ($currentNode->right) {
                    $hasNextLevel = true;
                    $queue[] = $currentNode->right;
                }
                
                // remove current node from queue
                array_shift($queue);
            }

            if ($hasNextLevel) {
                $currentLevel++;
            }

        }
        return $currentLevel;
    }

}
