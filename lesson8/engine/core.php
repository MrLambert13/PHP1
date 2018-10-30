<?php

// первоначальный запуск (сессия, константы, окружение)
define('ROOT', dirname(__DIR__));

// включаем показ ошибок
ini_set('display_errors', 'on');

// запускаем сессию
session_start();

include ROOT.'/config/main.php';         // конфигурация

require ROOT.'/engine/database.php';     // база данных
require ROOT.'/engine/logger.php';       // логирование
require ROOT.'/engine/render.php';       // генерация шаблонов
require ROOT.'/engine/auth.php';         // авторизация
require ROOT.'/engine/router.php';       // маршрутизация