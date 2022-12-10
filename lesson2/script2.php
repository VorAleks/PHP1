<?php
$allTime = 0;
$report = "";
$name = readline("Введите ваше имя: ");
$taskNumber = (float)readline("Сколько задач вы планируете на сегодня: ");

for ($i = 1; $i <= $taskNumber; $i++) {
    $task = "task$i";
    $time = "time$i";
    $$task = readline("Какая задача стоит перед вами сегодня? ");
    $$time = (float)readline("Сколько примерно времени эта задача займет? ");
    $report .= "-{$$task} ({$$time}ч)\n";
    $allTime += $$time;
}

echo "$name, на сегодня у вас запланировано $taskNumber приоритетных задачи на день:\n";
echo $report;
echo "Примерное время выполнения плана = {$allTime}ч";