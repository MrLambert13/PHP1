<?php

/**
 * начальная страница сайта
 */

// поключаем конфигурации приложения
require '../config/main.php';
require '../engine/core.php';

// логика страницы
$message = 'Hello from index.php!';

// вывод шаблона
, [
    'message' => $message
]);