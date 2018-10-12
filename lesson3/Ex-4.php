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
  $charsArray = preg_split('//u', $someWord,  null, PREG_SPLIT_NO_EMPTY);
  array_walk($charsArray, function ($elem) {
    global $abc;
    $key = array_search($elem, $abc);
    echo $key . "\n";
  });
}

echo transliting('Сергей ловит рыбу.');


