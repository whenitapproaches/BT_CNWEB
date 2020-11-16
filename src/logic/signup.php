<?php
  require '../configs/base_url.php';
?>
<?php 
  require "../connect_db.php";
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $confirm_password = $_POST['confirm_password'];
?>

<?php 
  $sql= "SELECT * FROM users WHERE username='$username'";
  $result = mysqli_query($link, $sql);

  $row = mysqli_fetch_array($result);

  $loginURL = $base_url . 'login.php';

  if($row || count($row) !== 0) {
    $_SESSION["error"] = "Da co ten tai khoan nay";
    header("Location:$loginURL"); exit();
  }

  if($password !== $confirm_password) {
    $_SESSION["error"] = "Mat khau khong khop";
    mysql_free_result($result);
    header("Location:$loginURL"); exit();
  }

  $password = md5($password);

  $sql= "INSERT INTO users (username, first_name, last_name, role, password) VALUES ('$username', '$first_name', '$last_name', 'student', '$password')";

  $result = mysqli_query($link, $sql);
  
  header("Location:$loginURL");
  mysql_free_result($result);
?>