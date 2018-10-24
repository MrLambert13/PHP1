<?php
// поключаем конфигурации приложения
require '../config/main.php';
require '../engine/core.php';

if (isset($_POST['username'])) {
  execute("INSERT INTO `feedbacks` (`name`, `text`, `approve`) 
    VALUE ('{$_POST['username']}', '{$_POST['feedbackText']}', '0')");

  echo render('feedback/view', [
    'feedbacks' => getItemArray('SELECT * FROM `feedbacks`'),
  ]);
} elseif (isset($_POST['status'])) {

  switch ($_POST['status']) {
    case '1':
      execute("UPDATE `feedbacks` SET `approve` = '{$_POST['status']}' WHERE (`id` = '{$_POST['id']}')");
      break;
    case '0':
      execute("DELETE FROM `feedbacks` WHERE (`id` = '{$_POST['id']}')");
      break;
  }

  echo render('feedback/view', [
    'feedbacks' => getItemArray('SELECT * FROM `feedbacks`')
  ]);
} else {
  echo render('feedback/add');
}
