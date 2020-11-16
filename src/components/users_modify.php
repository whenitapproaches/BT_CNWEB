<?php 
  $id = $_GET["id"];
  $username = $_GET["username"];
  $first_name = $_GET["first_name"];
  $last_name = $_GET["last_name"];
  $role = $_GET["role"];
?>

<div class="form">
<h1>Modify an employee</h1>

<form action="<?php echo $base_url . 'logic/users_modify.php'; ?>" method="POST">
  <div class="form-group">
    <label for="id">ID</label>
    <input name="id" type="number" value="<?php echo $id; ?>" readonly class="">
  </div>
  <div class="form-group">
    <label for="username">Username</label>
    <input name="username" type="text" value="<?php echo $username; ?>" readonly class="">
  </div>
  <div class="form-group">
    <label for="first_name">Ho</label>
    <input name="first_name" type="text" value="<?php echo $first_name; ?>" class="">
  </div>
  <div class="form-group">
    <label for="last_name">Ten</label>
    <input name="last_name" type="text" value="<?php echo $last_name; ?>" class="">
  </div>
  <div class="form-group">
    <label for="role">Role</label>
    <select name="role">
<option <?php if($role == 'student'): ?>selected<?php endif; ?> value="student">student</option>
      <option <?php if($role == 'teacher'): ?>selected<?php endif; ?> value="teacher">teacher</option>
      <option <?php if($role == 'admin'): ?>selected<?php endif; ?> value="admin">admin</option>
    </select>
  </div>
  <button class="button is-primary"  type="submit">Sua</button>
</form>
</div>