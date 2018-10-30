<?php
$category = getItem("SELECT * FROM `products_category` WHERE id={$product['id_category']}")
?>
<div class="text-center">

  <h2><?= $product['name'] ?></h2>
  <h4><?= $product['price'] ?> руб.</h4>
  <?php if ($_SESSION['auth']['login']) : ?>
    <form>
      <button type="submit" name="add" value="<?= $product['id'] ?>" class="btn btn-outline-primary">Купить</button>
    </form>
  <?php endif; ?>
  <h5>Категория: <?= $category['name'] ?></h5>
  <span><img style="width: 70%" src="<?= $product['photo1']?>"></span>
  <p><?= $product['description'] ?></p>
  <?php if($product['photo2']) : ?>
    <span><img style="width: 70%" src="<?= $product['photo2']?>"</span>
  <?php endif; ?>
  <?php if($product['photo3']) : ?>
    <span><img style="width: 70%" src="<?= $product['photo3']?>"</span>
  <?php endif; ?>
  <br>
  <a href="/catalog.php">Back</a>
</div>