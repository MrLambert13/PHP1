<h1><?= $item['name'] ?></h1>

<p>
  <img style="width: 70%" src="<?= $item['photo1']?>">
</p>

<p>
    <?= $item['description'] ?>
</p>

<p>
    Цена: <?= $item['price'] ?>p
</p>

<p>
    Осталось: <?= $item['count'] ?>
</p>

<p>
    <button class="btn btn-info" id="add-product" data-id="<?= $item['id'] ?>">
        Добавить в корзину
    </button>
</p>

<?php if (isAdmin()) : ?>
<hr/>
<a href="/shop/category.php?action=removeprod&id=<?= $item['id'] ?>" class="btn btn-primary">Удаление товара</a>
<?php endif; ?>


<script src="/js/product.js" defer></script>