<?php

// поключаем конфигурации приложения
require '../config/main.php';
// функции для работы с базой данных
include '../engine/database.php';
//получаем данные из БД упорядоченные по просмотрам в обратном порядке
$gallery = getItemArray('select * from `pictures` order by count_saw desc');

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Галерея</title>
  <style>
    .img_small{
      width: 150px;
      margin: 5px;    }

    .galleryWrapper__screen {
      left: 0;
      width: 100%;
      height: 100%;
      background-color: #222;
      opacity: 0.8;
      position: fixed;
      top: 0;
      z-index: 100;
      display: block;
      text-align: center;
    }

    .galleryWrapper__image {
      max-height: 80%;
      max-width: 80%;
      z-index: 101;
      position: absolute;
      margin: auto;
      left: 0;
      top: 0;
      bottom: 0;
      right: 0;
    }

    .galleryWrapper__close {
      z-index: 101;
      position: absolute;
      top: 0;
      right: 0;
    }

    .galleryWrapper__arrow {
      z-index: 102;
      position: absolute;
      top: 50%;
      width: 50px;
    }

    .galleryWrapper__arrow_left {
      left: 0;
    }

    .galleryWrapper__arrow_right {
      right: 0;
    }
  </style>
</head>
<body>
<div class="galleryPreviewsContainer">
  <?php

  //all files, without current and parrent directories
  foreach ($gallery as $pict) {
    //картинка в виде ссылки на новыую страницу с id
    echo "<a href=\"second.php?id=$pict[id]\" target='_blank'>"
    . "<img class=\"img_small\" src=\"$pict[path]\" data-id=\"$pict[id]\">"
    . "</a>";
  }
  ?>
</div>
</body>
</html>

