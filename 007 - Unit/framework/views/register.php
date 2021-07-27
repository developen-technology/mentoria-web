    <h1>Contact Us!</h1>

    <?= \app\core\form\Form::begin('', 'post') ?>
    <?= \app\core\form\Form::end() ?>

    <?php $form = \app\core\form\Form::begin('', 'post') ?>
      <?= $form->field($model, 'firstname') ?>
      <?= $form->field($model, 'lastname') ?>
      <?= $form->field($model, 'email') ?>
      <?= $form->field($model, 'password') ?>
      <?= $form->field($model, 'confirmPassword') ?>

      <button type="submit" class="btn btn-primary">Submit</button>
    <?php \app\core\form\Form::end() ?>

    <?php $form = \app\core\form\Form::begin('', 'post') ?>
      <div class="row">
        <div class="col">
          <?= $form->field($model, 'firstname') ?>
        </div>
        <div class="col">
          <?= $form->field($model, 'lastname') ?>
        </div>
      </div>
      <?= $form->field($model, 'email') ?>
      <?= $form->field($model, 'password')->passwordField() ?>
      <?= $form->field($model, 'confirmPassword')->passwordField() ?>

      <button type="submit" class="btn btn-primary">Submit</button>
    <?php \app\core\form\Form::end() ?>    

    <form method="post">

      <!--<div class="mb-3">
        <label class="form-label">Firstname</label>
        <input type="text" name="firstname" class="form-control">
      </div>-->
      <div class="mb-3">
        <label class="form-label">Firstname</label>
        <input type="text" name="firstname" value="<?= $model->firstname ?>" 
          class="form-control <?= $model->hasError('firstname') ? 'is-invalid' : '' ?>">

        <div class="invalid-feedback">
          <?= $model->getFirstError('firstname') ?>
        </div>
      </div>      
      <div class="mb-3">
        <label class="form-label">Lastname</label>
        <input type="text" name="lastname" class="form-control">
      </div>
      <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control">
      </div>
      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" name="password" class="form-control">
      </div>      
      <div class="mb-3">
        <label class="form-label">Confirm Password</label>
        <input type="password" name="confirmPassword" class="form-control">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>
