<?php

namespace no29\src;

use no25\src\TreeNode;

class Solution
{
    /**
     * @var int
     */
    private $preorderIndex;
    /**
     * @var array
     */
    private $inorderIndexMap = [];

    /**
     * @param Integer[] $preorder
     * @param Integer[] $inorder
     * @return TreeNode
     */
    function buildTree($preorder, $inorder)
    {

        $this->preorderIndex = 0;

        for ($i = 0; $i < count($inorder); $i++) {
            $this->inorderIndexMap[$inorder[$i]] = $i;
        }

        return $this->arrayToTree($preorder, 0, count($inorder) - 1);
    }

    function arrayToTree($preorder, $left, $right)
    {

        if ($left > $right) {
            return null;
        }

        $rootValue = $preorder[$this->preorderIndex++];
        $root = new TreeNode($rootValue);

        $root->left = $this->arrayToTree($preorder, $left, $this->inorderIndexMap[$rootValue] - 1);
        $root->right = $this->arrayToTree($preorder, $this->inorderIndexMap[$rootValue] + 1, $right);

        return $root;
    }

}
