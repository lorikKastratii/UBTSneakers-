<?php
  ob_start();
  session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
  </head>
  <body>


    <!--header area start-->
    <header>
      <div class="left_area">
        <h3>UBT<span>Sneakers</span></h3>
      </div>
      <div class="right_area">
        <form method="post">
          <input type="submit" class="logout_btn" name="logout" value="Logout">
        </form>
        <?php
          if(isset($_POST['logout'])){
            session_unset();
            header("Location:../login.php");
          }
        ?>
      </div>
    </header>
    <!--header area end-->
    <!--mobile navigation bar start-->
    <div class="mobile_nav">
      <div class="nav_bar">
        <img src="images/coding.jpg" class="mobile_profile_image">
        <button class="nav_btn">Menu</button>
    </div>
      <div class="mobile_nav_items">
        <a href="index.php"><span>Dashboard</span></a>
        <a href="views/User/users.php"><span>Users</span></a>
        <a href="#"><span>Tables</span></a>
        <a href="#"><span>Forms</span></a>
        <a href="#"></i><span>About</span></a>
        <a href="#"></i><span>Settings</span></a>
      </div>
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
      <div class="profile_info">
        <img src="images/logo.png" class="logo_image">
      </div>
      <a href="index.php"><span>Dashboard</span></a>
      <a href="users.php"><span>Users</span></a>
      <a href="add_users.php"><span>Add Users</span></a>
      <a href="products.php"><span>Products</span></a>
      <a href="add_products.php"><span>Add Products</span></a>

    </div>
    <!--sidebar end-->

    <div class="content">
      <div class="card">

      