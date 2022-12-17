<?php

$chest = [
    [
        0 => 'Тетрадь',
        1 => 'Книга',
        2 => 'Настольная игра',
        3 => [
            'Настольная игра',
            'Настольная игра',
        ],
        4 => [
            [
                'Ноутбук',
                'Зарядное устройство'
            ],
            [
                'Компьютерная мышь',
                'Набор проводов',
                [
                    'Фотография',
                    'Картина'
                ]
            ],
            [
                'Инструкция',
                [
                    'Ключ'
                ]
            ]
        ]
    ],
    [
        0 => 'Пакет кошачьего корма',
        1 => [
            'Музыкальный плеер',
            'Книга'
        ]
    ]
 ];
 

 function findThing(string $thingName, array $box): bool
{
  foreach ($box as $boxItem) {
     if (gettype($boxItem) != 'string') {
        // Снова коробка. Запустим ту же самую функцию, но с другим содержимым
        $result = findThing($thingName, $boxItem);
        if ($result != null) {
           return $result;
        }
     } elseif ($boxItem == $thingName) {
        // Если нашли вещь, выведем true
        return true;
     }
  }

  return false;
}

var_dump(findThing('Ключ', $chest));
var_dump(findThing('Слон', $chest));




// function mb_ucfirst($text, $enc = 'UTF-8') {
//     return mb_strtoupper(mb_substr($text, 0, 1, $enc)) . mb_substr($text, 1, mb_strlen($text, $enc), $enc);
// }
// echo mb_ucfirst('тест');




