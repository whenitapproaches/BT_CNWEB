<?php
  require '../configs/base_url.php';
?>
<?php 

  setcookie("token", "", [
    "path" => "/"
  ]);
  setcookie("username", "", [
    "path" => "/"
  ]);

  header("Location:$base_url");
?>