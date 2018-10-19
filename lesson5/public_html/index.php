<?php

/**
 * начальная страница сайта
 */

// поключаем конфигурации приложения
require '../config/main.php';
// функции для работы с базой данных
include '../engine/database.php';

$user = getItem('select * from `users`');

?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Страница пользователя</h1>

    <ul>
        <?php foreach ($user as $key => $value) :?>
        <li><?= $key ?>: <?= $value ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
