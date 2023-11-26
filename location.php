<!DOCTYPE html>
<html>

<head>
  <title>Medicine Stock Management - PIMS</title>
  <?php include_once('layouts/header_links.php'); ?>
  <link href="css/location.css" type="text/css" rel="stylesheet">
</head>

<?php
if (!array_key_exists('email', $_SESSION)) {
  header("location: login.php");
}
?>

<body style="font-family:Times New Roman;color:#aaaaaa;">

  <div style="overflow:auto">
    <h1 class="title"> Welcome To Medicine Stock Management </h1>
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
      <h1>Medicine Stock Management</h1>
      <div style="margin: 415px 0px 0px 0px;">
        <a href="meds.php" class="btn btn-light fw-bold shadow-none">
          <h5>Details of medicine</h5>
        </a>
      </div>
    </div>

    <div class="main">
      <ul>

        <div class="top"><a href="add_medicine.php" target="_blank">Add New Medicine </a></div>
        <div class="top"><a href="delete_medicine.php" target="_blank">Delete Medicine</a></div>

        <div class="top"><a href="store_information.php" target="_blank">Stock Information</a></div>
        <div class="top"><a href="search_medicine.php" target="_blank">Alert Medicine Data</a></div>
      </ul>

    </div>
  </div>
  <div class="footer">
    <div style="background-color:#000; text-align:center;padding:10px;color:#fff">© copyright - ALL RIGHTS RESERVED 2022.PIMS version 1.1 developed by <a href="#" style="color: #fff; text-decoration:none; text-transform:uppercase;">Group 05</a></div>
  </div>

</body>

</html>