<div class="box-center">
  <div class="row">
    <div class="box column is-4 is-offset-4">
      <h1 class="title">Dang Ky</h1>
      <div class="form">
        <form action="<?php echo $base_url . 'logic/signup.php'; ?>" method="POST">
          <div class="form-group">
            <label for="username">Username</label>
            <input name="username" type="text" class="">
          </div>
          <div class="form-group">
            <label for="first_name">Ho</label>
            <input name="first_name" type="text" class="">
          </div>
          <div class="form-group">
            <label for="last_name">Ten</label>
            <input name="last_name" type="text" class="">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input name="password" type="password" class="">
          </div>
          <div class="form-group">
            <label for="confirm_password">Confirm your password</label>
            <input name="confirm_password" type="password" class="">
          </div>
          <?php
            if(isset($_SESSION['error'])) {
              echo $_SESSION['error']; 
              $_SESSION['error'] = '';
            }
          ?>
          <button class="button is-primary" type="submit">Dang Ky</button>
          <a href="<?php echo $base_url . 'login.php'; ?>" class="button is-light">Dang Nhap</a>
        </form>
      </div>
    </div>
  </div>
</div>