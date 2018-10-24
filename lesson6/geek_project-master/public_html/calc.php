<?php

// поключаем конфигурации приложения
require '../config/main.php';
require '../engine/core.php';

if (isset($_POST['first'])) {
  echo render('calc/result');
} elseif (isset($_GET['ver2'])) {
  echo render('calc/input2');
} else {
  echo render('calc/input');
}

?>



