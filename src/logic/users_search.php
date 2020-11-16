<?php
  require '../configs/base_url.php';
?>
<?php 
  $search = $_GET["search"];
?>

<?php 
  require "../connect_db.php";
?>

<?php 
  $sql= "select * from employees where `id`='$search' or `name`='$search'";
  $result = mysqli_query($link, $sql);

  $row = mysqli_fetch_array($result);

  $notFoundURL = $base_url . "404.php";

  if(count($row) === 0) return header("Location:$notFoundURL");

  $employeeURL = $base_url . "employee.php?id=$row[0]&name=$row[1]";

  return header("Location:$employeeURL")


?>