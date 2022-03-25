<?php

namespace no34\src;

class Solution
{

    /**
     * @param Node $node
     * @return Node
     */
    function cloneGraph($node)
    {
        if ($node == null) {
            return $node;
        }

        if ($this->visited[$node->val] != null) {
            return $this->visited[$node->val];
        }

        $copy = new Node($node->val);
        $this->visited[$node->val] = $copy;

        foreach ($node->neighbors as $nb_node) {
            $copy->neighbors[] = $this->cloneGraph($nb_node);
        }

        return $copy;
    }

}
