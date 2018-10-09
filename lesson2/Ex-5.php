<?php
/**
 * 5. Посмотреть на встроенные функции PHP. Используя имеющийся HTML-шаблон, вывести текущий год в подвале
 * при помощи встроенных функций PHP.
 */

?>

<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <!-- Последняя компиляция и сжатый CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- Дополнение к теме -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
        integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <!-- Последняя компиляция и сжатый JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
          integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
          crossorigin="anonymous"></script>
</head>
<body style="width: 30%; margin: 20px auto">
<div class="panel panel-default">
  <div class="panel-heading">Текущая дата</div>
  <div class="panel-body">
    <?php
      echo date("d.m.Y");
    ?>
  </div>
</div>

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Текущее время</h3>
  </div>
  <div class="panel-body">
    <?php
    date_default_timezone_set("UTC");
    $time = time();
    $time += 3 * 3600;
    echo date("H:i", $time);
    ?>
  </div>
</div>
</body>
</html>