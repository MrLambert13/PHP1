<?php
var_dump($_POST);
?>
<form method="post">
  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text" id="basic-addon1">Username</span>
    </div>
    <input name="username" type="text" class="form-control" placeholder="Username" aria-label="Username"
           aria-describedby="basic-addon1">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Your feedback:</label>
    <textarea name="feedbackText" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-group">
    <button type="submit">Add</button>
  </div>
</form>