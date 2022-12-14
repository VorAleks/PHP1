<?php
  
$students = [
    'ИТ20' => [
        'Иванов Иван' => 5,
        'Кириллов Кирилл' => 3,
        'Золин Владилен' => 2,
        'Архаткина Владислава' => 4,
        'Мещерякова Мария' => 4,
        'Саврасова Фаина' => 3,
        'Хромченко Зинаида' => 2
    ],
    'БАП20' => [
        'Антонов Антон' => 4,
        'Белорусов Ефрем' =>3,
        'Ягода Назар' => 4,
        'Ярилова Розалия' => 2,
        'Нырко Платон' => 3,
        'Калинин Агап' => 5
    ]
];

$badMarkStudents = [];
$maxAverage = 0;
$group = "";
foreach ($students as $groupName => $studentList) {
    foreach($studentList as $studentName => $mark) {
        if ($mark < 3) {
            $badMarkStudents[$groupName][] = $studentName;
        }  
    }
    if ((array_sum($studentList)/count($studentList)) > $maxAverage) {
        $maxAverage = array_sum($studentList)/count($studentList);
        $group = $groupName;
    }
}
echo $groupName . " ", $maxAverage .PHP_EOL;
echo "Cписок студентов на отчисление.\n";
print_r($badMarkStudents);



