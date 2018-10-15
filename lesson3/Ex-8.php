<?php
/**
 * 8. *Повторить третье задание, но вывести на экран только города, начинающиеся с буквы «К».
 */

$regions = [
    'Московская' => [
        'Москва',
        'Зеленоград',
        'Клин'
    ],
    'Ленинградская' => [
        'Санкт-Петербург',
        'Всеволожск',
        'Павловск',
        'Кронштадт'
    ],
    'Новгородская' => [
        'Боровичи',
        'Березник',
        'Великий Новгород',
        'Любытино',
        'Мошенское',
        'Комарово'
    ]
];

//show all array
foreach ($regions as $regionName => $cityArr) {
  //print region name
  echo $regionName . " область:\n".
    "Города начинающиеся на \"К\":\n";
  foreach ($cityArr as $cityName) {
    //TODO substr not working
    echo mb_substr($cityName, 0 ,1);
    if ($cityName[0] == "К") {
      echo $cityName . "\n";
    }
  }
}