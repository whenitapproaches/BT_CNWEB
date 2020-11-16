<?php
  require '../configs/base_url.php';
?>
<?php 
  require "../connect_db.php";
?>
<?php 
  $id = $_GET["id"];
?>

<?php require "../middleware/auth.php"; ?>

<?php 
  $sql = "DELETE FROM users WHERE id=$id";
  mysqli_query($link, $sql);
  $employees_tables_url = $base_url . 'users.php';
  header("Location:$employees_tables_url");
?>

<?php
  mysqli_free_result($result);
  exit();
?>