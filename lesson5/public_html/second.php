<?php
// поключаем конфигурации приложения
require '../config/main.php';
// функции для работы с базой данных
include '../engine/database.php';
//повышаем количество просмотров
likePicture($_GET['id']);
//получаем данные о картинке из БД по id
$picture = getItem("select * from `pictures` WHERE id={$_GET['id']}");

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
        <?php
        echo "<img src=\"$picture[path]\" alt=\"$picture[name]\""
          . "<br/><h3>Likes: $picture[count_saw]</h3>";
        ?>
</body>
</html>
