<?php

/**
 * начальная страница сайта
 */

// поключаем конфигурации приложения
require '../config/main.php';
require '../engine/core.php';

var_dump($_POST);
var_dump($_FILES);

//move_uploaded_file($_FILES['avatar']['tmp_name'], 'TEST.jpg');

// вывод шаблона
echo render('site/upload');