<h1>Добро пожаловать, <?= $_SESSION['auth']['login'] ?></h1>

<? if (isAdmin()) :?>
  <!--//вывод списка заказов
  // с кнопкой удалить-->
<? foreach ($orders as $order) :?>
    <?php
    ?>
  <h2>Заказ № <?= $order['id'] ?></h2>
  <p>Заказал <?= $users[$order['user_id']]['login'] ?></p>
<!--  TODO-->

  <button class="btn btn-outline-danger" data-it="<?=  $order['id'] ?>" id="remove-order">Удалить заказ</button>
  <?php endforeach; ?>

<? endif; ?>

<?php
var_dump(array_search($orders[1]['id'], $users));
?>

<script src="/js/"'></script>
