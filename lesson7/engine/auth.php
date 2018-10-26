<?php

/**
 * Файл для работы с аутентификацией в сессии
 */

/**
 * Проверка авторизован ли пользователь
 * @return bool
 */
function isLoggedUser()
{
    return isset($_SESSION['auth']['login']);
}

/**
 * Проверка прав пользователя для показа блоков (например в меню, смотреть пункт role в navbar.php)
 * @param string $role
 * @return bool
 */
function userHasRole(string $role) {
    if ($role == '?') return !isLoggedUser();
    if ($role == '@') return isLoggedUser();

    return false;
}

/**
 * Авторизация пользователя
 * @param string $login
 * @param bool $remember
 */
function loginUser(string $login, bool $remember = false)
{
    $_SESSION['auth']['login'] = $login;

    if ($login == 'admin') {
        $_SESSION['auth']['admin'] = true;
    }

    if ($remember) {
        $auth = [
            'login' => $_SESSION['auth']['login'],
        ];
        setCook('auth', json_encode($auth));
    }
}

/**
 * Выход из системы
 */
function logoutUser()
{
    session_destroy();
    header("Location: /");
}

/**
 * Проверка на администратора (смотреть в функции логина)
 * @return bool
 */
function isAdmin()
{
    return (isset($_SESSION['auth']['admin']) && $_SESSION['auth']['admin']);
}

/**
 * Попытка загрузки авторизации через COOKIES
 */
function autoLogin() {
    if (isset($_COOKIE['auth'])) {
        $auth = json_decode($_COOKIE['auth'], true);

        loginUser($auth['login']);
    }
}

/**
 * Функция для упрощения записи COOKIES
 * @param string $key
 * @param $value
 */
function setCook(string $key, $value) {
    setcookie(
        $key,
        $value,
        time() + 3600 * 2, //seconds
        '/',
        'geekbrains.local',
        true,
        true
    );
}