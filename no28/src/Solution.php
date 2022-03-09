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

        return 1 + max($this->maxDepth($root->left), $this->maxDepth($root->right));
    }

}
