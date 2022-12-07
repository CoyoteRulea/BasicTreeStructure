<?php

class BinaryTree {
    public $root = null;

    public function __construct($nodes, $separator = ' ') {
        $nodesArr = explode($separator, $nodes);
        $arrLen = count($nodesArr);

        for ($pos = 0; $pos < $arrLen; $pos++) {
            $this->simpleInsert($this->root, $nodesArr[$pos]);
        }
    }

    public function simpleInsert(&$currentNode, $value) {
        if (!isset($currentNode)) {
            $currentNode = new Node($value);
            return true;
        }

        if ($currentNode->value > $value) {
            $this->simpleInsert($currentNode->left, $value);
        } elseif ($currentNode->value < $value) {
            $this->simpleInsert($currentNode->right, $value);
        }

        return false;
    }

    public function getMaxValue($current = null) {
        if (!isset($current)) {
            $current = $this->root;
        }

        if (isset($current->right)) return $this->getMaxValue($current->right);

        return $current->value;
    }

    public function getDepth($current = null) {
        if (!isset($current)) {
            $current = $this->root;
        }
        
        $leftDepth = !isset($current->left) ? 0 : $this->getDepth($current->left);
        $rightDepth = !isset($current->right) ? 0 : $this->getDepth($current->right);

        if ($leftDepth > $rightDepth)
            return $leftDepth + 1;
        else
            return $rightDepth + 1;
    }

    public function sumLeftLeaves($current = null) {
        $sum = 0;

        if (!isset($current)) {
            $current = $this->root;
        }

        if (isset($current->left)) {
            //if (!isset($current->left->left) && !isset($current->left->right))
            if ($current->left->imLeaf())
                $sum += $current->left->value;
            else
                $sum += $this->sumLeftLeaves($current->left);
        }

        if (isset($current->right))
            $sum +=  $this->sumLeftLeaves($current->right);

        return $sum;
    }
}