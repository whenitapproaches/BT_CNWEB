<?php
  $employeeID = $_GET['id'];
  $name = $_GET['name'];
  $sql= "select * from employees where id='$employeeID' or name='$name'";
  $result=mysqli_query($link,$sql);
?>

<div class="employees-table">
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th colspan="5" align='left'>Name</th>
        <th align='right'>Address</th>
        <th>Room ID</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php
        while($row=mysqli_fetch_array($result)){
          $id=$row{'id'};
          $name=$row{'name'};
          $room_id=$row{'room_id'};
          $address=$row{'address'};
          $edit_url = $base_url . "users_modify.php?id=$id&name=$name&address=$address&room_id=$room_id";
          $remove_url = $base_url . "logic/users_delete.php?id=$id";
          echo "<tr><td align='center'>$id</td><td colspan='5'>$name</td><td align='right'>$address</td><td align='center'>$room_id</td><td><a href='$edit_url'>Modify</a></td><td><a href='$remove_url'>Remove</a></td></tr>";
        }
      ?>
    </tbody>
  </table>
</div>

<?php
  mysqli_free_result($result);
?>