<h1>Категории</h1>

<ul>
  <?php foreach ($cats as $category): ?>
    <li>
      <div class="box"  style="display: flex">
        <div class="left" style="width: 150px;">
          <a href="/shop/category.php?action=view&id=<?= $category['id'] ?>">
            <?= $category['name'] ?>
          </a>
        </div>
        <?php if (isAdmin()) : ?>
          <div class="right">
            <form method="post">
              <button type="submit" name="remove_category" value="<?= $category['id'] ?>" class="btn btn-sm btn-outline-danger">
                x
              </button>
            </form>
          </div>
        <?php endif; ?>
      </div>
    </li>
  <?php endforeach; ?>
  <!--  Кнопки для добавления товара и категорий-->
  <?php if (isAdmin()) : ?>
    <hr/>
    <a href="/shop/category.php?action=addgood" class="btn btn-primary">Добавление товара</a>
    <hr/>
    <form method="post">
      <fieldset>
        <legend>Добавить категорию товара:</legend>
        <div class="form-group">
          <label for="exampleInputEmail1">Название категории</label>
          <input type="text" class="form-control" name="name" aria-describedby="emailHelp"
                 placeholder="">
        </div>
        <button type="submit" name="add_category" class="btn btn-primary">Добавить</button>
      </fieldset>
    </form>
  <?php endif; ?>
</ul>