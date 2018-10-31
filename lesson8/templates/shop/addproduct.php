
<form method="post">
  <div class="form-group">
    <label for="exampleFormControlInput1">Название товара</label>
    <input type="text" class="form-control" name="name">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Описание</label>
    <textarea class="form-control" name="description" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Цена</label>
    <input type="text" class="form-control" name="price">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Example select</label>
    <select class="form-control" name="category">
      <?php foreach ($categories as $category) : ?>
        <option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
      <?php endforeach; ?>
    </select>
  </div>
  <button type="submit" name="add_product" class="btn btn-primary mb-2">Добавить</button>
</form>