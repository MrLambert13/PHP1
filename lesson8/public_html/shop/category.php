<?php

require '../../engine/core.php';

/**
 * Выводим список категорий
 */
function routeIndex() {
  $cats = getItemArray(
    "select * from products_category"
  );

  //если нажата добавить категорию
  if (isset($_POST['add_category']) && !empty($_POST['name'])) {
    $sqlAddCat = "INSERT INTO `products_category` (`name`) VALUES ('{$_POST['name']}')";
    if (execute($sqlAddCat)) {
      header("Location: /shop/category.php");
    } else {
      echo "=(";
    }
  }

  //если нажата кнопка удалить
  if (isset($_POST['remove_category'])) {
    $sqlRmCat = "DELETE FROM `products_category` WHERE id=('{$_POST['remove_category']}')";
    if (execute($sqlRmCat)) {
      header("Location: /shop/category.php");
    } else {
      echo "=(";
    }
  }

  echo render('shop/categories', [
    'cats' => $cats,
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
    'prods' => $prods,
  ]);
}

/**
 * Переходим на добавление товара
 */
function routeAddgood() {

  if (isAdmin()) {
    $sql = "select * from `products_category`";
    $category = getItemArray($sql);
    echo render('shop/addproduct', [
      'categories' => $category,
    ]);
  } else {
    header("Location: /shop/category");

  }
  if (isset($_POST['add_product'])) {
    $sqlAdd = "INSERT INTO `products` (`name`, `description`, `price`, `id_category`) VALUES ('{$_POST['name']}','{$_POST['description']}','{$_POST['price']}','{$_POST['category']}')";

    if (!empty($_POST['name'] && !empty($_POST['description']) && !empty($_POST['price']))) {
      execute($sqlAdd);
    }
  }
}

/**
 * Выводим список товаров в категории
 */
function routeRemoveprod() {
  $id = $_GET['id'];
  $sql = "DELETE FROM `products` WHERE 'id'={$id}";
  if (execute($sql)){
    header("Location: /shop/category.php");
  }

}

route();