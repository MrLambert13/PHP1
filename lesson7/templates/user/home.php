<h1>Welcome back, <?= $_SESSION['auth']['login'] ?>!</h1>

<h2>Корзина:</h2>
<?php if ($message) : ?>
  <?= $message ?>
<?php else: ?>
  <?php foreach ($products as $product) : ?>
    <div class="media">
      <a href="?id=<?= $product['id'] ?>">
        <img class="mr-3" style="width: 256px" src="<?= $product['photo1'] ?>" alt="<?= $product['name'] ?>">
      </a>
      <div class="media-body">
        <a href="?id=<?= $product['id'] ?>"><h5 class="mt-0"><?= $product['name'] ?></h5></a>
        <h6 style="color: red"><?= $product['price'] ?> руб. * Кол-во: <?= $_SESSION['cart'][$product['id']]?> = <?= $product['price'] * $_SESSION['cart'][$product['id']] ?></h6>
        <?= $product['description'] ?>
        <br>
        <a href="user.php?action=home&delete=<?= $product['id'] ?>" class="btn btn-outline-danger">Удалить</a>
      </div>
    </div>
  <?php endforeach; ?>
<?php endif; ?>