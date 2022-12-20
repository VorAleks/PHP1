<?php

$arr = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

$evenOdd = function(int $number) : string {
     return ($number % 2) ? "Нечетное" : "Четное";
};

$result = array_map($evenOdd, $arr);

print_r($arr);
print_r($result);


