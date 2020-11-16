<div class="box-center">
  <div class="row">
    <div class="box column is-4 is-offset-4">
      <h1 class="title">Dang Nhap</h1>
      <div class="form">
        <form action="<?php echo $base_url . 'logic/login.php'; ?>" method="POST">
          <div class="form-group">
            <label for="username">Username</label>
            <input name="username" type="text" class="">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input name="password" type="password" class="">
          </div>
          <?php
            if(isset($_SESSION['error'])) {
              echo $_SESSION['error']; 
              $_SESSION['error'] = '';
            }
          ?>
          <button class="button is-primary" type="submit">Dang Nhap</button>
          <a href="<?php echo $base_url . 'signup.php'; ?>" class="button">Dang Ky</a>
        </form>
      </div>
    </div>
  </div>
</div>