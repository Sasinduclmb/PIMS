<!DOCTYPE html>
<html>

<head>
  <title>Home - PIMS</title>
  <?php include_once('layouts/header_links.php'); ?>
  <link href="css/home.css" type="text/css" rel="stylesheet">
</head>

<body style="font-family:'Poppins', sans-serif;color:#aaaaaa;">

  <?php
  if (!array_key_exists('email', $_SESSION)) {
    header("location: login.php");
  }
  ?>

  <div style="overflow:auto">
    <div class="menu">
      <a href="index.php">Home</a>
    </div>

    <div class="menu">
      <a href="contact.php">Contact Us</a>
    </div>

    <div class="menu">
      <a href="about.php"> About </a>
    </div>

    <div class="menu">
      <?php
      if (array_key_exists('email', $_SESSION)) {
        echo '<a href="functions/logout.php">Logout</a>';
      } else {
        echo '<a href="login.php">Login</a>';
      }


      ?>


    </div>

    <div class="title">
      <h1> Welcome to PIMS version 1.0 </h1>
    </div>

    <div class="main">
      <ul>

        <div class="top"><a href="user_interface.php"> User Management </a></div>
        <div class="top"><a href="supplier_menu.php"> Supplier Management </a></div>
        <div class="top"><a href="report.php"> Report Analysis </a></div>
        <div class="top"><a href="location.php"> Medicine Stock Management </a></div>
      </ul>

    </div>
  </div>

  <div class="footer">
    <div style="background-color:#000;text-align:center;padding:10px;color:#fff">© copyright - ALL RIGHTS RESERVED 2022.PIMS version 1.1 developed by <a href="#" style="color:#fff; text-transform:uppercase; text-decoration:none;">Group 05</a></div>
  </div>

</body>

</html>