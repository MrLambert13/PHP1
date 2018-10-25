<?php
/**
 *номер/артикул, название, описание, стоимость, количество, категория (желательно через связь), фото (в идеале несколько, но не обязательно)
 */

// поключаем конфигурации приложения
require '../config/main.php';
require '../engine/core.php';

$allProducts = getItemArray("SELECT * FROM `products`");

var_dump($allProducts);

echo render('catalog/viewAll', [
  'products' => $allProducts
]);