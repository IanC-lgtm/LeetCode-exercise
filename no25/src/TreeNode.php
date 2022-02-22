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

    public static function arrayToBST($nums): TreeNode
    {
        $len = count($nums);
        $mid = floor($len / 2);
        $leftPart = array_slice($nums, 0, $mid);
        $root = new TreeNode($nums[$mid]);
        $rightPart = array_slice($nums, $mid + 1);

        if (count($leftPart)) {
            $root->left = self::arrayToBST($leftPart);
        }
        if (count($rightPart)) {
            $root->right = self::arrayToBST($rightPart);
        }
        return $root;
    }

    public static function generateFromArray($nodes = []): TreeNode
    {

        $currentValue = array_pop($nodes);
        $currentNode = null;

        if (!$currentNode) {
            // 0
            $currentNode = new TreeNode($currentValue);
        }

        return self::tree($currentNode, $nodes);

    }

    public static function tree($root, $data): TreeNode
    {

        $currentValue = array_pop($data);
        while ($currentValue) {

            if (!$root->left) {
                // 1
                $root->left = new TreeNode($currentValue);
                return self::tree($root->left, array_slice($data, 0, 2));
            }

            if (!$root->right) {
                // 2
                $root->right = new TreeNode($currentValue);
                return self::tree($root->right, $data);
            }

        }

        return $root;

    }
}
