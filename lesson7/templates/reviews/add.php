<h1>Добавление комментария</h1>

<?php if ($error) : ?>
    <div class="alert alert-danger" role="alert">
        <?= $error ?>
    </div>
<?php endif ?>

<form method="post" class="mt-5">
    <div class="form-group">
        <label for="content">Текст</label>
        <textarea class="form-control" name="content" id="content" rows="5"></textarea>
    </div>

    <div class="form-group">
        <button type="submit" name="add_comment" class="form-control btn btn-success">Отправить</button>
    </div>
</form>