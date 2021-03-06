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
      <label class="input-group-text" for="inputGroupSelect01">Options</label>
    </div>
    <select name="option" class="custom-select" id="inputGroupSelect01">
      <option selected>Choose...</option>
      <option value="1">Summ</option>
      <option value="2">Diff</option>
      <option value="3">Multiply</option>
      <option value="4">Div</option>
    </select>
  </div>

  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text">Second</span>
      <span class="input-group-text">0.00</span>
    </div>
    <input name="second" type="text" class="form-control" aria-label="Number amount (with dot and two decimal places)">
  </div>

  <div class="form-group">
    <button type="submit">OK</button>
  </div>
</form>

