<?php
  
do {
    $number = (int)readline("Введите положительное число: ");
} while ($number <= 0);

$res = $number % 8;

switch(true) {
    case ($res === 1): echo "Большой палец.\n"; break;
    case ($res === 0 || $res === 2): echo "Указательный палец.\n"; break;
    case ($res === 3 || $res === 7): echo "Средний палец.\n"; break;
    case ($res === 4 || $res === 6): echo "Безымянный палец.\n"; break;
    default: echo "Мизинец\n";
};
