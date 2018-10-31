<?php

$items = [
    ['label' => 'Главная', 'url' => '/'],
    ['label' => 'AJAX', 'url' => '/ajax.php'],
    ['label' => 'Отзывы', 'url' => '/reviews.php'],
    ['label' => 'Каталог', 'url' => '/shop/category.php'],
    ['label' => 'Корзина', 'url' => '/shop/cart.php'],
    ['label' => 'Вход', 'url' => '/user.php', 'role' => '?'],
    ['label' => 'Личный кабинет', 'url' => '/user.php', 'role' => '@'],
    ['label' => 'Выход', 'url' => '/user.php?action=logout', 'role' => '@'],
];

?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand d-flex align-items-center" href="/">
        <img src="/img/logo.png" alt="<?= $config['name'] ?>" height="30" class="mr-2">
        <?= $config['name'] ?>
    </a>
    <div class="navbar-collapse navbar-right" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <?php foreach ($items as $link) : ?>
                <?php if (isset($link['role'])): ?>
                    <?php if (userHasRole($link['role'])): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= $link['url'] ?>"><?= $link['label'] ?></a>
                        </li>
                    <?php endif ?>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $link['url'] ?>"><?= $link['label'] ?></a>
                    </li>
                <?php endif ?>
            <?php endforeach; ?>
        </ul>
    </div>
</nav>