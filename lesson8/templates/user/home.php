<h1>Добро пожаловать, <?= $_SESSION['auth']['login'] ?></h1>

  <!--//вывод списка заказов
  // с кнопкой удалить-->
  <?php foreach ($orders as $order) : ?>
    <div class="card item<?= $order['id'] ?>">
      <div class="card-header">
        <h3>Заказ № <?= $order['id'] ?></h3>
      </div>
      <div class="card-body">
        <p>
          Описание заказа
        </p>
        <button class="btn btn-outline-danger remove-order" data-id="<?= $order['id'] ?>" id="remove-order">Удалить
          заказ
        </button>
      </div>
    </div>
  <?php endforeach; ?>



<script src="/js/orders.js" defer></script>
