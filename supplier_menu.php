<!DOCTYPE html>
<html>

<head>
  <title>Supplier Management - PIMS</title>
  <?php include_once('layouts/header_links.php'); ?>
  <link href="css/supplier.css" type="text/css" rel="stylesheet">
</head>

<body style="font-family:Times New Roman;color:#aaaaaa;">

  <div style="overflow:auto">
    <h1 class="title"> Welcome To Supplier Management </h1>
    <div class="menu">
      <a class="active" href="index.php">Home</a>
    </div>
    <div class="menu">
      <a href="contact.php">Contact Us</a>
    </div>
    <div class="menu">
      <a href="about.php">About</a>
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

    <div class="left">
      <h1>Supplier Management</h1>
      <div style="margin: 415px 0px 0px 0px;">
        <a href="sups.php" class="btn btn-light fw-bold shadow-none">
          <h5>Details of Supliers</h5>
        </a>
      </div>
    </div>

    <div class="main">
      <ul>

        <div class="top"><a href="add_supplier.php" target="_blank">Add New Suppliers </a></div>
        <div class="top"><a href="delete_supplier.php" target="_blank">Delete Suppliers</a></div>

        <div class="top"><a href="edit_supplier.php" target="_blank">Edit Suppliers</a></div>
        <div class="top"><a href="more_about_orders.php" target="_blank">More About Orders</a></div>
      </ul>

    </div>
  </div>

  <div class="footer">
    <div style="background-color:#000; text-align:center;padding:10px;color:#fff">© copyright - ALL RIGHTS RESERVED 2022.PIMS version 1.1 developed by <a href="#" style="color: #fff; text-decoration:none; text-transform:uppercase;">Group 05</a></div>
  </div>

</body>

</html>