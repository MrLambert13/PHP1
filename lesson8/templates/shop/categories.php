<h1>Категории</h1>

<ul>
    <?php foreach ($cats as $category): ?>
    <li>
        <a href="/shop/category.php?action=view&id=<?= $category['id'] ?>">
            <?= $category['name'] ?>
        </a>
    </li>
    <?php endforeach; ?>
  <?php if (isAdmin()) :?>
    <a href="/shop/category.php?action=addgood" class="btn btn-primary"  value="Input">Добавление товара</a>
  <?php endif; ?>
</ul>