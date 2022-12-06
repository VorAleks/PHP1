<?php

$name = readline("Введите ваше имя: ");
$age = readline("Введите ваш возраст: ");

echo "Вас зовут $name, вам $age лет\n";

$task1 = readline("Какая задача стоит перед вами сегодня? ");
$time1 = readline("Сколько примерно времени эта задача займет? ");

$task2 = readline("Какая задача стоит перед вами сегодня? ");
$time2 = readline("Сколько примерно времени эта задача займет? ");

$task3 = readline("Какая задача стоит перед вами сегодня? ");
$time3 = readline("Сколько примерно времени эта задача займет? ");

echo "$name, на сегодня у вас запланировано 3 приоритетных задачи на день:\n";
$i = 1;
$allTime = 0;
$task = "task$i";
$time = "time$i";
echo "-{$$task} ({$$time}ч)\n";
$allTime += $$time;
$i++;
$task = "task$i";
$time = "time$i";
echo "-{$$task} ({$$time}ч)\n";
$allTime += $$time;
$i++;
$task = "task$i";
$time = "time$i";
echo "-{$$task} ({$$time}ч)\n";
$allTime += $$time;

echo "Примерное время выполнения плана = {$allTime}ч";