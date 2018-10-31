<?php

// поключаем конфигурации приложения
require '../engine/core.php';

function routeIndex() {
  // перехват стандартного действия
  routeLogin();
}

// страница с формой входа
function routeLogin() {
  // редирект если уже авторизован
  if (isLoggedUser()) {
    header("Location: /user.php?action=home");
  }

  // проверка данных из формы
  if (isset($_POST['login_user'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];

    $user = getItem("select * from users where login='{$login}'");
    if ($user != false) {
      if (password_verify($password, $user['password'])) {
        if (isset($_POST['remember'])) {
          loginUser($login, true);
        } else {
          loginUser($login);
        }

        header("Location: /user.php?action=home");
      }
    }
  }

  echo render('user/login');
}

function routeLogout() {
  logoutUser();
}

/**
 * Удаление заказа
 */
function routeRemoveorder() {
  if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM `order` WHERE id='{$id}'";
    if (execute($sql)) {
      renderJson([
        'result' => 'OK',
        'status' => 'deleted',
        'errors' => null,
      ]);
    } else {
      renderJson([
        'result' => 'ERROR',
        'errors' => [
          'Invalid POST data',
        ],
      ]);
    }
  }
}

function routeHome() {
  if (isAdmin()) {
    echo render('user/home', [
      'orders' => getItemArray("SELECT * FROM `order`"),
      'order_items' => getItemArray("SELECT * FROM `order_item`"),
      'products' => getItemArray("SELECT * FROM `products`"),
      'category' => getItemArray("SELECT * FROM `products_category`"),
      'users' => getItemArray("SELECT * FROM `users`"),
    ]);
  } else {
    echo render('user/home', [
      'orders' => getItemArray("SELECT * FROM `order` WHERE user_id='{$_SESSION['auth']['id']}'"),
      'order_items' => getItemArray("SELECT * FROM `order_item`"),
      'products' => getItemArray("SELECT * FROM `products`"),
      'category' => getItemArray("SELECT * FROM `products_category`"),
    ]);
  }
}

function routeRegister() {
  // грузим из POST
  if (isset($_POST['reg_user'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    // хешируем пароль
    $password = password_hash($password, PASSWORD_DEFAULT);

    // готовим запрос SQL
    $sql = "insert into users (`login`, `password`) values ('{$login}', '{$password}')";

    if (execute($sql)) {
      // авторизуем
      loginUser($login, true);
      header("Location: /user.php?action=home");
    }
  }

  echo render('user/register');
}

route();