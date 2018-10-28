<?php

// поключаем конфигурации приложения
require '../config/main.php';
require '../engine/core.php';

// страница с формой входа
function login() {

  // редирект если уже авторизован
  if (isLoggedUser()) {
    header("Location: /user.php?action=home");
  }

  // проверка данных из формы
  if (isset($_POST['login_user'])) {
    //    systemLog($_POST, 'debug');

    $login = $_POST['login'];
    $password = $_POST['password'];
    //получаем данные уч записи по логину, если есть в БД
    $findUser = getItem("SELECT * FROM users where login='{$login}'");

    if (isset($findUser)) {
      if ($password == $findUser['password']) {
        if (isset($_POST['remember'])) {
          loginUser($login, true);
        } else {
          loginUser($login);
        }
        //после аутентификации в ЛК
        header("Location: /user.php?action=home");
      }
    } else {
      //TODO неверный логин или пароль
    }
  }

  echo render('user/login');
}

function deleteGood($id_product) {
  unset($_SESSION['cart'][$id_product]);
}

function home() {
  //Если была нажата кнопка удалить
  if ($_GET['delete']) {
    deleteGood($_GET['delete']);
  }
  //Проверка корзины, пуста или нет
  if ($_SESSION['cart']) {
    $filter = join(", ", array_keys($_SESSION['cart']));
    echo render('user/home', [
      //выбираем добавленные в корзину товары.
      'products' => getItemArray("SELECT * FROM `products` WHERE id IN ({$filter})"),
    ]);
  } else {
    echo render('user/home', [
      'message' => "Корзина пуста.",
    ]);
  }

}

if (isset($_GET['action'])) {
  $action = $_GET['action'];
} else {
  $action = 'login';
}

switch ($action) {
  case 'login':
    login();
    break;
  case 'logout':
    logoutUser();
    break;
  case 'home':
    home();
    break;
  default:
    header("Location: /");
}