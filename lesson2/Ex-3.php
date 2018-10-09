<?php
/**
 * 3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами.
 * Обязательно использовать оператор return.
 */

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

echo summ(1, 3) . "\n"; // 4
echo diff(13.4, 3.4) . "\n"; //10
echo multiplication(5, 4) . "\n"; //20
echo division(27, 9) . "\n"; //3
echo division(10, 0); //error

