<?php

// поключаем конфигурации приложения
require '../config/main.php';
require '../engine/core.php';

if (isset($_GET['ver2'])) {
  echo render('calc/input2');
} elseif (isset($_POST['first'])) {
  echo render('calc/result');
} else {
  echo render('calc/input');
}

?>


