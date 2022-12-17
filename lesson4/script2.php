<?php

$arr = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

function maxMinAvg(array $intNumbers) : array
{
    return ['max' => max($intNumbers), 'min' => min($intNumbers), 'avg' => array_sum($intNumbers)/count($intNumbers)];
}

var_dump(maxMinAvg($arr));
