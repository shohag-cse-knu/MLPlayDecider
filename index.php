<?php
error_reporting(E_ALL | E_STRICT);

include_once "Class/Tree.php";
include_once "Class/Node.php";
include_once "Class/DecissionTree.php";

echo "Using training data to generate Decision Tree...<br>";
$dec_tree = new DecisionTree('data/train.csv', 0);

echo "Decision tree using ID3:<br>";
$dec_tree->display();

echo "<br>Prediction on new data set:";
$dec_tree->predict_outcome('data/test.csv');
?>