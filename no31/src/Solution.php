<?php

namespace no31\src;

use no25\src\TreeNode;

class Solution
{
    private $max = -1000;

    /**
     * @param TreeNode $root
     * @return Integer
     */
    function maxPathSum($root)
    {

        $this->goDeep($root);
        return $this->max;

    }

    function goDeep($node)
    {

        if ($node == null) {
            return 0;
        }

        $left = max(0, $this->goDeep($node->left));
        $right = max(0, $this->goDeep($node->right));

        $this->max = max($this->max, $left + $right + $node->val);

        return max($left, $right) + $node->val;

    }
}
