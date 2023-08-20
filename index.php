<?php

require_once "./Solution.php";

$subsetSumFinder = new Solution();

$targetValue = 10;
$array = [2, 3, 5, 6, 8];

$combinations = $subsetSumFinder->combinationSum($array, $targetValue);

foreach ($combinations as $combination) {
    echo implode(', ', $combination) . "\n";
}
