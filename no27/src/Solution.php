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

        /** @var TreeNode[] $queue */
        $queue = [];

        $wrapList = [];

        if (!$root) {
            return $wrapList;
        }

        $queue[] = $root;

        while (count($queue) > 0) {

            $level = count($queue);
            $subArray = [];

            for ($i = 0; $i < $level; $i++) {

                $firstNodeInQueue = $queue[0];

                if ($firstNodeInQueue->left !== null) {
                    $queue[] = $firstNodeInQueue->left;
                }

                if ($firstNodeInQueue->right !== null) {
                    $queue[] = $firstNodeInQueue->right;
                }

                $last = array_shift($queue);

                echo $last->val . PHP_EOL;

                $subArray[] = $last->val;

            }

            $wrapList[] = $subArray;

        }

        return $wrapList;

    }

}
