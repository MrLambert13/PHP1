<h1>Отзывы</h1>

<?php if (count($items) > 0) : ?>
<div class="container mt-5">
    <?php foreach ($items as $item) : ?>
    <div class="card col-12 mt-2">
        <div class="card-body">
            <h5 class="card-title">Отзыв #<?= $item['id'] ?></h5>
            <h6 class="card-subtitle mb-2 text-muted">
                Сделан <?= date('d.m.Y', strtotime($item['datetime'])) ?> в <?= date('H:i', strtotime($item['datetime'])) ?>
            </h6>
            <p class="card-text">
                <?= $item['content'] ?>
            </p>
            <?php if (isAdmin()) : ?>
            <a href="reviews.php?action=delete&id=<?= $item['id'] ?>" class="card-link">Удалить</a>
            <?php endif ?>
        </div>
    </div>
    <?php endforeach; ?>
</div>
<?php else: ?>
<div class="py-5">
    <em>Отзывов пока нет...</em>
</div>
<?php endif ?>

<?php if (isLoggedUser()) : ?>
<div class="text-center py-5">
    <a href="reviews.php?action=add" class="btn btn-info">
        Добавить отзыв
    </a>
</div>
<?php endif; ?>