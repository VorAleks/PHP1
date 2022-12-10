<?php

$variant1 = 810;
$variant2 = 988;
$variant3 = 740;

$correctAnswer = $variant2;
echo "В каком году произошло крeщение Руси?\n";
do {
    echo "Варианты:$variant1, $variant2, $variant3.\n";
    $answer = readline("Ваш ответ: ");

} while ($answer != $variant1 && $answer != $variant2 && $answer != $variant3);

if ($answer == $correctAnswer) {
    echo "Поздравляем! Это правильный ответ!";
} else {
    echo "Ответ неверный.";
}

/* Вариант 2.  мне больше нравится
echo "В каком году произошло крещение Руси?\n";
do {
    echo "Варианты:$variant1, $variant2, $variant3.\n";
    $answer = readline("Ваш ответ: ");
    switch(true) {
        case ($answer == $variant1 || $answer == $variant3): echo "Ответ неверный."; break;
        case ($answer == $variant2): echo "Поздравляем! Это правильный ответ!"; break;
        default: echo "Выберете один из предложенных ответов\n";
    }
} while ($answer != $variant1 && $answer != $variant2 && $answer != $variant3);
*/