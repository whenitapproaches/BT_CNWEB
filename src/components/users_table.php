<?php
  $sql='select * from users';
  $result=mysqli_query($link,$sql);
?>

<div class="employees-search-form">
  <form action="<?php echo $base_url . 'logic/users_search.php'; ?>" method="GET">
    <div class="form-group">
      <label>Tim kiem:</label>
      <input name="search" type="text" placeholder="Nhap id nguoi dung hoac ho va ten...">
    </div>
    <button class="button is-primary" type="submit">Tim</button>
  </form>
</div>

<div class="employees-table">
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th colspan="5" align='left'>Username</th>
        <th align='right'>Ho</th>
        <th>Ten</th>
        <th>Role</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php
        while($row=mysqli_fetch_array($result)){
          $id=$row{'id'};
          $username=$row{'username'};
          $first_name=$row{'first_name'};
          $last_name=$row{'last_name'};
          $role=$row{'role'};
          $edit_url = $base_url . "users_modify.php?id=$id&username=$username&first_name=$first_name&last_name=$last_name&role=$role";
          $remove_url = $base_url . "logic/users_delete.php?id=$id";
          echo "<tr><td align='center'>$id</td><td colspan='5'>$username</td><td align='right'>$first_name</td><td align='center'>$last_name</td><td>$role</td><td><a href='$edit_url'>Modify</a></td><td><a href='$remove_url'>Remove</a></td></tr>";
        }
      ?>
    </tbody>
  </table>
</div>

<?php
  mysqli_free_result($result);
?>