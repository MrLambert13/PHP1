<?php
/**
 * Создать галерею фотографий. Она должна состоять из одной страницы, на которой пользователь видит все картинки в
 * уменьшенном виде. При клике фотография должна открыться в новой вкладке. Лучше в этой же, с кнопкой закрытия.
 */

//path to gallery folder with images
$pathToImgFolder = 'img/gallery/';

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
<!--  <img src="img/image1.jpg" data-full_image_url="img/image1.jpg" alt="Картинка1">-->
  <?php
  //all files, without current and parrent directories
  $arrImg = array_diff(scandir($pathToImgFolder), array('..', '.'));
  foreach ($arrImg as $imgName) {
    $path = $pathToImgFolder . $imgName;
    echo "<img class=\"img_small\" src=\"{$path}\" data-full_image_url=\"{$path}\">";
  }
  ?>
</div>
<script src="js/script.js"></script>
</body>
</html>

