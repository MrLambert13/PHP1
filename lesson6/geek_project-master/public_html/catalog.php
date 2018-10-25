<?php
/**
 *номер/артикул, название, описание, стоимость, количество, категория (желательно через связь), фото (в идеале несколько, но не обязательно)
*/

// поключаем конфигурации приложения
require '../config/main.php';
require '../engine/core.php';

if (isset($_GET['id'])) {
  echo render('catalog/viewOne', [
    'product' => getItem("SELECT * FROM `products` WHERE id={$_GET['id']}")
  ]);
} else {
  echo render('catalog/viewAll', [
    'products' => getItemArray("SELECT * FROM `products`")
  ]);
}