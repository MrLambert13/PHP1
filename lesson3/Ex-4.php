<?php
/**
 * Объявить массив, индексами которого являются буквы русского языка, а значениями – соответствующие
 * латинские буквосочетания (‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’).
 * Написать функцию транслитерации строк.
 */

//from website http://translitter.ru
$abc = [
  'а' => 'a',
  'б' => 'b',
  'в' => 'v',
  'г' => 'g',
  'д' => 'd',
  'е' => 'e',
  'ё' => 'yo',
  'ж' => 'zh',
  'з' => 'z',
  'и' => 'i',
  'й' => 'j',
  'к' => 'k',
  'л' => 'l',
  'м' => 'm',
  'н' => 'n',
  'о' => 'o',
  'п' => 'p',
  'р' => 'r',
  'с' => 's',
  'т' => 't',
  'у' => 'u',
  'ф' => 'a',
  'х' => 'h',
  'ц' => 'c',
  'ч' => 'ch',
  'ш' => 'sh',
  'щ' => 'shh',
  'ъ' => '``',
  'ы' => 'y`',
  'ь' => '``',
  'э' => 'e`',
  'ю' => 'yu',
  'я' => 'ya',
];

function transliting($someWord) {
  //convert string to array of chars
  $charsArray = preg_split('//u', $someWord, null, PREG_SPLIT_NO_EMPTY);
  //для доступа к внешнему массиву
  global $abc;
  //массив в который сложим все переведенные буквы
  $newArr = [];
  //проходим по массиву
  foreach ($charsArray as $item) {
    //если символ есть в ключах глобального массива abc
    if (array_search($item, array_keys($abc))) {
      //номер ключа найденного элемента
      $key = array_search($item, array_keys($abc));
      //ложим транслитированную букву в массив
      array_push($newArr, $abc[array_keys($abc)[$key]]);
    } else {
      //если это не буква из массива abc то просто возвращаем как есть
      array_push($newArr, $item);
    }
  }
  //возвращаем массив в виде строки
  return implode($newArr);
}

echo transliting('сергей ловит рыбу.') ."\n";
echo transliting('заковыристое выражение');


