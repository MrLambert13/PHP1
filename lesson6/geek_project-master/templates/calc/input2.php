<?php
var_dump($_POST);

?>

<form method="POST">
  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text">First</span>
      <span class="input-group-text">0.00</span>
    </div>
    <input name="first" type="text" class="form-control" aria-label="Number amount (with dot and two decimal places)">
  </div>

  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text">Second</span>
      <span class="input-group-text">0.00</span>
    </div>
    <input name="second" type="text" class="form-control" aria-label="Number amount (with dot and two decimal places)">
  </div>

  <div class="form-group">
    <button name="option" value="1" type="submit">+</button>
    <button name="option" value="2" type="submit">-</button>
    <button name="option" value="3" type="submit">*</button>
    <button name="option" value="4" type="submit">/</button>
  </div>
</form>

