<?php
/**
 *Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку.
 */

function chgSpcToUnderine($someString) {
  //create array
  $arrChar = preg_split('//u', $someString, null, PREG_SPLIT_NO_EMPTY);
  $newArr = array_map(function ($elem) {
    //Space change to _, else return char without change
    return ($elem == " ") ? "_" : $elem;
  }, $arrChar);
  //return new array as string
  return implode('', $newArr)."\n";
}
$a = "Test tring #1. It's great.";
$b = "Тестовая строка №2. Всё работает.";

echo "$a\n";
echo chgSpcToUnderine($a);
echo "$b\n";
echo chgSpcToUnderine($b);