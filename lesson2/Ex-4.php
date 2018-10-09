<?php
/**
 * 4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation),
 * где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции.
 * В зависимости от переданного значения операции выполнить одну из арифметических операций
 * (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).
 */

/**
 * Release one of four math operations +,-,/,*
 * @param $arg1 {number} first digit
 * @param $arg2 {number} second digit
 * @param $operation {string} symbol of operation
 *
 * @return mixed result of operation or error
 */
function mathOperation($arg1, $arg2, $operation) {
  switch ($operation) {
    case '+':
      return summ($arg1, $arg2);
    case '-':
      return diff($arg1, $arg2);
    case '/':
      return division($arg1, $arg2);
    case '*':
      return multiplication($arg1, $arg2);
  }
}

/**
 * Return sum of two digits
 *
 * @param $a {number} first digits
 * @param $b {number} second digits
 *
 * @return mixed {number} result of sum
 */
function summ($a, $b) {
  return $a + $b;
}

/**
 * Return difference of two digits
 *
 * @param $a {number} first digits
 * @param $b {number} second digits
 *
 * @return mixed {number} result of difference
 */
function diff($a, $b) {
  return $a - $b;
}

/**
 * Return multiplication of two digits
 *
 * @param $a {number} first digits
 * @param $b {number} second digits
 *
 * @return mixed {number} result of multiplication
 */
function multiplication($a, $b) {
  return $a * $b;
}

/**
 * Return division of two digits
 *
 * @param $a {number} first digits
 * @param $b {number} second digits
 *
 * @return mixed {number} result of division
 */
function division($a, $b) {
  return ($b == 0) ? 'Error, division by zero' : $a / $b;
}

echo mathOperation(1, 3, '+') . "\n"; //4
echo mathOperation(1, 3, '-') . "\n"; //-2
echo mathOperation(1, 3, '*') . "\n"; //3
echo mathOperation(1, 4, '/') . "\n"; // 0.25
echo mathOperation(1, 0, '/') . "\n"; //error
