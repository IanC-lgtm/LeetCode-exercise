<?php

namespace no25\src;
class Solution
{

    /**
     * @param TreeNode $root
     * @return Boolean
     */
    function isValidBST(TreeNode $root)
    {

        if (!$root) {
            return true;
        }

        $nodeStack = [];
        $storedValues = [];

        while ($root || count($nodeStack) > 0) {

            while ($root) {
                $nodeStack[] = $root;
                $root = $root->left;
            }

            /** @var TreeNode $checkNode */
            $checkNode = array_pop($nodeStack);

            if (count($storedValues) > 0) {
                if ($checkNode->val !== null && $checkNode->val <= $storedValues[count($storedValues) - 1]) {
                    // the most top node in the stack, should have bigger value then the latest stored node
                    return false;
                }
            }

            $storedValues[] = $checkNode->val;
            $root = ($checkNode->right) ?? null;

        }

        return true;
    }

}
