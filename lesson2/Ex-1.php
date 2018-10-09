<?php

function compareDigits(int $a, int $b){
  $result = null;
  if ($a >= 0 && $b >= 0) {
    $result = $a - $b;
  } else if ($a < 0 && $b < 0) {
    $result = $a * $b;
  } else $result = $a + $b;

  return $result;
}

echo compareDigits(13, 14) . "\n";  // -1
echo compareDigits(5, -3) . "\n";   // 2
echo compareDigits(-2, -7);         // 14


