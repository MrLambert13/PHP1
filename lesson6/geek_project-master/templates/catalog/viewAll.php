<?php foreach ($products as $product) : ?>
  <div class="media">
    <img class="mr-3" style="width: 256px" src="<?= $product['photo1'] ?>" alt="<?= $product['name'] ?>">
    <div class="media-body">
      <h5 class="mt-0"><?= $product['name'] ?></h5>
      <?= $product['description'] ?>
    </div>
  </div>
<?php endforeach; ?>

