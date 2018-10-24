<?php
$x = $_POST['first'];
$y = $_POST['second'];
switch ($_POST['option']) {
  case '1':
    $result = "$x + $y = " . ($x + $y);
    break;
  case '2':
    $result = "$x - $y = " . ($x - $y);
    break;
  case '3':
    $result = "$x * $y = " . ($x * $y);
    break;
  case '4':
    $result = ($y != 0) ? "$x / $y = " . ($x / $y) : "division by ZERO!";
    break;
}
?>

<h1><?php echo $result;?></h1>

