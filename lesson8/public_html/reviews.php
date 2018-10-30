<?php

// поключаем конфигурации приложения
require '../engine/core.php';

// выводим список (БД)
function routeIndex()
{
    $items = getItemArray("select * from reviews");

    echo render('reviews/list', [
        'items' => $items,
    ]);
}

// добавить новый (POST form)
// ?action=add => routeAdd
function routeAdd()
{
    if (!isLoggedUser()) header("Location: /reviews.php");

    $error = false;

    if (isset($_POST['add_comment'])) {
        $content = htmlspecialchars($_POST['content']);
        $sql = "insert into reviews (`content`) values ('{$content}')";

        if (!empty($content) && execute($sql)) {
            header("Location: /reviews.php");
        } else {
            $error = 'Что-то пошло не так!';
        }
    }

    echo render('reviews/add', [
        'error' => $error,
    ]);
}

// удалить (GET button)
function routeDelete()
{
    if (!isAdmin()) {
        header("Location: /reviews.php");
    } else {
        $id = (isset($_GET['id'])) ? intval($_GET['id']) : 0;

        if ($id) {
            $sql = "delete from reviews where id = {$id}";
            execute($sql);
        }

        header("Location: /reviews.php");
    }
}

// запуск маршрутизации
route();