<?php

require '../../engine/core.php';

/**
 * Выводим список категорий
 */
function routeIndex() {
    $cats = getItemArray(
        "select * from products_category"
    );

    echo render('shop/categories', [
        'cats' => $cats
    ]);
}

/**
 * Выводим список товаров в категории
 */
function routeView() {
    $id = $_GET['id'];

    $prods = getItemArray(
        "select * from products where id_category={$id}"
    );

    echo render('shop/products', [
        'prods' => $prods
    ]);
}

route();