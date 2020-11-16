<?php
  $path = "$_SERVER[REQUEST_URI]";
  $regexp = "/\/([A-z]+).php/";
  preg_match($regexp, $path, $matches, PREG_OFFSET_CAPTURE);
  $path = $matches ? $matches[1] ? $matches[1][0] : "/" : "/";
?>

<header class="header">
  <nav class="navbar">
    <div class="navbar-left">
      <div class="logo">
        <img src="../assets/src/images/logo.png" alt="Logo">
      </div>
    </div>
    <div class="navbar-right">
      <ul class="menu">
        <li class="item"><a href="<?php echo $base_url; ?>" class="link <?php if($path === "/") echo "is-active"; ?>">Home</a></li>
        <li class="item">
          <span class="link has-dropdown <?php if($path === "employees" || $path === "rooms") echo "is-active"; ?>">
            Quan ly
            <ul class="dropdown">
              <li class="item">
                <a href="<?php echo $base_url . "users.php"; ?>" class="link <?php if($path === "employees") echo "is-active"; ?>">Nguoi dung</a>
              </li>
            </ul>
          </span>
        </li>
        <li class="item"><a href="#" class="link">Contact</a></li>
        <li class="item"><a href="#" class="link">About</a></li>
      </ul>
      <div class="user">
        <?php if(isset($_COOKIE['token'])): ?>
        <div class="username">
          Welcome, <?php echo $_COOKIE["username"]; ?>
          <i class="las la-angle-down"></i>
          <ul class="dropdown menu">
            <li class="item">
              <a href="<?php echo $base_url . "logic/logout.php"; ?>" class="link">Log out</a>
            </li>
          </ul>
        </div>
        <?php else: ?>
        <a class="button is-primary" href="<?php echo $base_url . "login.php"; ?>" class="link">Dang nhap</a>
        <?php endif; ?>
      </div>
    </div>
  </nav>
</header>