<?php
  require '../configs/base_url.php';
?>
<?php 
  require "../connect_db.php";
  ?>

<?php 
  $id = $_POST["id"];
  $first_name = $_POST["first_name"];
  $last_name = $_POST["last_name"];
  $role = $_POST["role"];
?>

<?php require "../middleware/auth.php"; ?>

<?php 
  $sql= "UPDATE users SET `first_name` = '$first_name', `last_name` = '$last_name', `role`='$role' WHERE id='$id'";
  mysqli_query($link, $sql);
  $employees_tables_url = $base_url . 'users.php';
  header("Location:$employees_tables_url");
?>

<?php
  mysqli_free_result($result);
  return
?>