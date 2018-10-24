<?php

/**
 * @var $id int Номер пользователя
 */

?>

<form method="post">
    <div class="form-group">
        <label for="formGroupExampleInput">Login</label>
        <input type="text"
               name="user_login"
               class="form-control"
               id="formGroupExampleInput"
               placeholder="John">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Password</label>
        <input type="password"
               name="user_pass"
               class="form-control"
               id="formGroupExampleInput2"
               placeholder="12uygZHDgsug8273g4f">
    </div>

    <div class="form-group">
        <button type="submit">OK</button>
    </div>
</form>