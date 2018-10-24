<?php

/**
 * @var $id int Номер пользователя
 */

?>

<?php if ($id <= 0): ?>
    <h1>User not found!</h1>
<?php else: ?>
    <div class="text-center">
        <h1>Username #<?= $id ?></h1>

        <p>
            user info
        </p>

        <a href="/users.php">Back</a>
    </div>
<?php endif ?>