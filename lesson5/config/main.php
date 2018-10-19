<?php

// подгрузка всех настроек приложения
$config = array_merge(
    include 'app.php',
    include 'db.php'
);
// первоначальный запуск (сессия, константы, окружение)
define('ROOT', dirname(__DIR__));