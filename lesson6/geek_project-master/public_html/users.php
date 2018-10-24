<?php

// поключаем конфигурации приложения
require '../config/main.php';
require '../engine/core.php';

// вывод шаблона
if (isset($_GET['add'])) {

    if (isset($_POST['user_login'])) {
        // add to database

        header("Location: /users.php");
    }

    echo render('users/add');
} else {
    if (isset($_GET['user_id'])) {
        $id = $_GET['user_id'];
        $id = strip_tags($id);
        $id = htmlspecialchars($id);
        $id = (int)$id;

        echo render('users/view', [
            'id' => $id,
        ]);
    } else {
        echo render('users/list');
    }
}
