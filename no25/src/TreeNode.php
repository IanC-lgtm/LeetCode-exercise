<?php

namespace no25\src;

class TreeNode
{
    public $val = null;
    public $left = null;
    public $right = null;

    function __construct($val = 0, $left = null, $right = null)
    {
        $this->val = $val;
        $this->left = $left;
        $this->right = $right;
    }

    public static function generateFromArray($nodes = []): TreeNode
    {

        return self::tree(null, $nodes, 0);

    }

    public static function tree($root, $data, $level)
    {

        // Base case for recursion
        if ($level < count($data) && $data[$level]) {
            $root = new TreeNode($data[$level]);

            // insert left child
            $root->left = self::tree($root->left, $data,
                2 * $level + 1);

            // insert right child
            $root->right = self::tree($root->right, $data,
                2 * $level + 2);
        }

        return $root;

    }

}
