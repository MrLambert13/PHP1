<?php

require '../../engine/core.php';

/**
 * Выводим информацию о товаре
 */
function routeIndex() {
    $id = $_GET['id'];

    $item = getItem(
        "select * from product where id={$id}"
    );

    echo render('shop/details', [
        'item' => $item
    ]);
}

route();