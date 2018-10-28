<?php foreach ($products as $product) : ?>
  <div class="media">
    <a href="?id=<?= $product['id'] ?>">
      <img class="mr-3" style="width: 256px" src="<?= $product['photo1'] ?>" alt="<?= $product['name'] ?>">
    </a>
    <div class="media-body">
      <a href="?id=<?= $product['id'] ?>"><h5 class="mt-0"><?= $product['name'] ?></h5></a>
      <h6 style="color: red"><?= $product['price'] ?> руб. </h6>
      <?= $product['description'] ?>
      <form >
        <button type="submit" name="add" value="<?= $product['id']?>" class="btn btn-outline-primary" >Купить</button>
      </form>
    </div>
  </div>
<?php endforeach; ?>

