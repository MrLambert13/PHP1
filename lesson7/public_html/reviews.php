<?php

// поключаем конфигурации приложения
require '../config/main.php';
require '../engine/core.php';

// выводим список (БД)
function getComments()
{
    $items = getItemArray(
        "select * from reviews"
    );

    echo render('reviews/list', [
        'items' => $items,
    ]);
}

// добавить новый (POST form)
function addComment()
{
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
function deleteComment()
{
    $id = (isset($_GET['id'])) ? intval($_GET['id']) : 0;

    if ($id) {
        $sql = "delete from reviews where id = {$id}";
        execute($sql);
    }

    header("Location: /reviews.php");
}

if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'list';
}

switch ($action) {
    case 'list':
        getComments();
        break;
    case 'add':
        addComment();
        break;
    case 'delete':
        deleteComment();
        break;
    default:
        echo render('site/error');
}