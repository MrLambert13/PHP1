<?php

$items = [
  ['label' => 'Home', 'url' => '/'],
  ['label' => 'Reviews', 'url' => '/reviews.php'],
  ['label' => 'Login', 'url' => '/user.php', 'role' => '?'],
  //добавил имя пользователя в навбар, а то не комильфо
  ['label' => 'Profile: '.$_SESSION['auth']['login'],
    'url' => '/user.php',
    'role' => '@'],
  ['label' => 'Logout', 'url' => '/user.php?action=logout', 'role' => '@'],
];

?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand d-flex align-items-center" href="/">
    <img src="/img/logo.png" alt="<?= $config['name'] ?>" height="30" class="mr-2">
    <?= $config['name'] ?>
  </a>
  <div class="collapse navbar-collapse navbar-right" id="navbarNav">
    <ul class="navbar-nav ml-auto">
<!--      перебираем массив items-->
      <?php foreach ($items as $link) : ?>
<!--        если есть значение с ключем role-->
        <?php if (isset($link['role'])): ?>
<!--          проверим нужно ли выводить данный link в навбар по роли-->
          <?php if (userHasRole($link['role'])): ?>
            <li class="nav-item">
              <a class="nav-link" href="<?= $link['url'] ?>"><?= $link['label'] ?></a>
            </li>
          <?php endif ?>
<!--        //если link без role то просто выводим ссылку и текст ссылки в виджет-->
        <?php else: ?>
          <li class="nav-item">
            <a class="nav-link" href="<?= $link['url'] ?>"><?= $link['label'] ?></a>
          </li>
        <?php endif ?>
      <?php endforeach; ?>
    </ul>
  </div>
</nav>