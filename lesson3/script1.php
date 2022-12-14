<?php
$arrSize = 10;
$arr1 = range(1,$arrSize);
$arr2 = range(1,$arrSize);

shuffle($arr1);
shuffle($arr2);

for ($i = 0; $i < $arrSize; $i++) {
    $arr3[$i] = $arr1[$i] * $arr2[$i];
}

print_r($arr3);


