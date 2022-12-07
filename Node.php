<?php 

class Node {
    public $left  = null;
    public $right = null;
    public $value = null;

    public function __construct($value) {
        $this->value = $value;
    }

    public function imLeaf() {

        return !isset($this->left) && !isset($this->right);
    }
}