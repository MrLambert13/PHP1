<?php

return [
    //  Настройки приложения
    'app' => [
        'name' => 'Geekbrains PHP 1',
        'logPath' => ROOT . "/data/logs",
        'templatesPath' => ROOT . '/templates',

        'assets' => [
            'css' => [
                '/css/bootstrap.min.css',
                '/css/style.css',
            ],
            'js' => [
                '/js/jquery-3.3.1.min.js',
                '/js/popper.min.js',
                '/js/bootstrap.min.js',
                '/js/app.js',
            ],
        ],
    ]
];