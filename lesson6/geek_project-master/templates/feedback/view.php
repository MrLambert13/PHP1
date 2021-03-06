<?php foreach ($feedbacks as $feedback) : ?>
  <?php if ($feedback['approve'] == 1) : ?>
    <div class="container border">
      <div class="row">
        <div class="col-sm">
          № <?= $feedback['id'] ?>
        </div>
        <div class="col-sm">
          <?= $feedback['name'] ?>
        </div>
      </div>
      <div class="row">
        <div class="col-sm">
          <?= $feedback['text'] ?>
        </div>
      </div>
    </div>
  <?php endif; ?>
<?php endforeach; ?>

<?php foreach ($feedbacks as $feedback) : ?>
  <?php if ($feedback['approve'] == 0) : ?>
    <div class="container border">
      <div class="row">
        <div class="col-sm">
          № <?= $feedback['id'] ?>
        </div>
        <div class="col-sm">
          <?= $feedback['name'] ?>
        </div>
      </div>
      <div class="row">
        <div class="col-sm">
          <?= $feedback['text'] ?>
        </div>
      </div>
      <form method="post">
        <input type="hidden" name="id" value="<?= $feedback['id'] ?>">
        <div class="row">
          <div class="col-sm">
            <button name="status" value="1" type="submit">Approve</button>
          </div>
          <div class="col-sm">
            <button name="status" value="0" type="submit">Decline</button>
          </div>
        </div>
      </form>
    </div>
  <?php endif; ?>
<?php endforeach; ?>