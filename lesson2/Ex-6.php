<?php
/**
 * 6. *С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow),
 * где $val – заданное число, $pow – степень.
 */

function power($val, $pow) {
  return ($pow > 1) ? $val * power($val, $pow - 1) : $val;
}

echo power(3, 3); //27
echo "\n" . power(2, 3); //8
echo "\n" . power(2, 4); //16