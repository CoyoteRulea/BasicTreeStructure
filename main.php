<?php

include "BinaryTree.php";
include "Node.php";

$arrayStr = "1 2 5 3 4 6 8 7";
$tree = new BinaryTree($arrayStr);
echo "Data: [$arrayStr]\n";
echo "Sum Left Leaves: {$tree->sumLeftLeaves()} Max Value: {$tree->getMaxValue()} Depth: {$tree->getDepth()} \n";

$arrayStr = "3,9,20,15,7";
$tree = new BinaryTree($arrayStr, ',');
echo "Data: [$arrayStr]\n";
echo "Sum Left Leaves: {$tree->sumLeftLeaves()} Max Value: {$tree->getMaxValue()} Depth: {$tree->getDepth()} \n";

$arrayStr = "5,3,2,4,7,6,8";
//$arrayStr = "5,3,4,7,8";
//$arrayStr = "2";
$tree = new BinaryTree($arrayStr, ',');
$tree->printTree();
