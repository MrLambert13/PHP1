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

function home() {
  // ДЗ
  echo render('user/home');
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