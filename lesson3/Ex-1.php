<?php
/**
 * С помощью цикла while вывести все числа в промежутке от 0 до 100, которые делятся на 3 без остатка.
 */

while ($i <= 100) {
  //проверяем остаток от деления на 3 с помощью оператора %
  if ($i % 3 == 0) {echo "$i ";}
  $i++;
}

?>
