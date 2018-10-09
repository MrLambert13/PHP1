<?php
/**
 * 7. *Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:
 * 22 часа 15 минут
 * 21 час 43 минуты
 */

?>

<!doctype html>
<html lang="ru">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <title>Hello, world!</title>
</head>
<body>
<h1>Текущее время:</h1>
<?php

function getTrueHour($H) {
  switch ($H % 100) {
    case 12:
    case 13:
    case 14:
      $hour = $H . ' часов ';
      break;
    default:
      switch ($H % 10) {
        case 1:
          $hour = $H . ' час ';
        case 2:
        case 3:
        case 4:
          $hour = $H . ' часа ';
        default:
          $hour = $H . ' часов ';
      }
  }
  return $hour;
}
function getTime($H, $M, $S) {
  $hour = getTrueHour($H);
  $time = $hour . $minute . $second;
  return $time;
}

date_default_timezone_set("UTC");
$time = time();
$time += 3 * 3600;
echo "<h3>" . getTime(date("H", $time), date("i", $time), date("s", $time)) . "</h3>";
?>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>
</html>