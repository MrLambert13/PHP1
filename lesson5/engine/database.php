<?php

/**
 * Файл с функциями для работы с базой данных
 */

$connection = mysqli_connect(
    $config['db']['host'],
    $config['db']['user'],
    $config['db']['password'],
    $config['db']['database']
);

function getItem(string $sql) {
    // получение одной строки
    global $connection;
    $result = mysqli_query($connection, $sql);

    $row = mysqli_fetch_assoc($result);
    return $row;
}

/** Функция увеличения количетсва просмотров
 * @param $id {string} - id картинки из галереи
 */
function likePicture($id) {
  global $connection;
  $result = mysqli_query($connection, "select * from `pictures` WHERE id={$_GET['id']}");
  $row = mysqli_fetch_assoc($result);
  $likeCount = (int)$row[count_saw] + 1;
  mysqli_query($connection, "UPDATE `pictures` SET `count_saw` = $likeCount WHERE (`id` = $id)");



}
function getItemArray(string $sql) {
    // получение нескольких строк
    global $connection;
    $result = mysqli_query($connection, $sql);

    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function execute(string $sql) {
    // выполнение запроса (insert, update)
    global $connection;
    $result = mysqli_query($connection, $sql);

    return $result;
}