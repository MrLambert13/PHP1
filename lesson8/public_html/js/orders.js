$('#add-product').on('click', function () {
  let id = $(this).data('id');

  $.post(
    '/shop/cart.php?action=additem',
    {id: id, quantity: 1},

    function (response, status) {
      if (response.result == "OK") {
        alert('Товар добавлен в корзину');
      } else {
        alert('Не удалось добавить товар в корзину');
      }
    }
  );
});

$('.remove-order').on('click', function () {
  let id = $(this).data('id');

  $.post(
    '/user.php?action=removeorder',
    {id: id},
    function (response, status) {
      if (response.result == "OK") {
        $('.item' + id).remove();
        alert('Заказ удален');
      } else {
        alert('Не удалось удалить заказ');
      }
    }
  );


});