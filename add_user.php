<html>

<head>
  <title>Create Account</title>
  <?php include_once('layouts/header_links.php'); ?>
  <style type="text/css">
    * {
      margin: 0;
      padding: 0;
    }

    body {
      background-image: url(./img/add.jpg);
      background-position: center;
      background-size: cover;
      font-family: sans-serif;
      margin-top: 40px;
    }

    .regform {
      width: 800px;
      background-color: rgb(0, 0, 0, 0.6);
      margin: auto;
      color: #ffffff;
      padding: 10px 0px 10px 0 px;
      text-align: center;
      border-radius: 15px 15px 0px 0px;
    }

    .main {
      background-color: rgb(0, 0, 0, 0.5);
      width: 800px;
      margin: auto;
    }

    form {
      padding: 10px;
    }

    #name {
      width: 100%;
      height: 100px;
    }

    .name {
      margin-left: 25px;
      margin-top: 30px;
      width: 125px;
      color: white;
      font-size: 18px;
      font-weight: 700;
    }



    #full_name,
    #nic,
    #email,
    #password,
    #address,
    #pos,
    #telno,
    #vcode {
      position: relative;
      left: 200px;
      top: -37px;
      line-height: 40px;
      width: 480px;
      border-radius: 6px;
      padding: 0 22px;
      font-size: 16px;
      color: #555;
    }


    #dob {
      position: relative;
      left: 200px;
      top: -37px;
      line-height: 40px;
      width: 480px;
      border-radius: 6px;
      padding: 0 22px;
      font-size: 16px;
      color: #555;
    }


    #tel_no {
      position: relative;
      color: #e5e5e5;
      text-transform: capitalize;
      font-size: 16px;
      left: 40px;
      top: -2px;
    }

    button,
    .previous {
      background-color: #3baf9f;
      display: block;
      margin: 20px 0px 0px 20px;
      text-align: center;
      border-radius: 12px;
      border: 2px solid #366473;
      padding: 14px 110px;
      outline: none;
      color: white;
      cursor: pointer;
      transition: 0.25px;

    }

    button:hover {
      background-color: #5390f5;
    }

    clear {
      background-color: #3baf9f;
      display: block;
      margin: 20px 0px 0px 20px;
      text-align: center;
      border-radius: 12px;
      border: 2px solid #366473;
      padding: 14px 110px;
      outline: none;
      color: white;
      cursor: pointer;
      transition: 0.25px;
    }

    #v {
      width: 250px;
      border: 2px solid black;
      border-radius: 15px;
      background-color: #0FF063;
      position: absolute;
      left: 680px;
      top: 1050px;
    }

    .previous {
      background-color: #0FF063;
      color: black;
    }

    .footer {
      height: 70px;
      background-color: #49E980;
      text-align: center;
      margin: 20px 20px 20px 20px;
      border-radius: 12px;
      border: 2px solid #366473;
      padding: 14px 110px;
      outline: none;
    }
  </style>
</head>

<body>

  <div class="regform">
    <h1>Add New Users</h1>
  </div>
  <?php

  $sql = "SELECT * FROM `position`";
  $all_positions = mysqli_query($__conn, $sql);
  ?>

  <div class="main">
    <form action="./functions/reg_user.php" method="POST" autocomplete="off">

      <h2 class="name"> Full Name </h2>
      <input id="full_name" type="text" name="full_name"><br>

      <h2 class="name"> Date of Birth </h2>
      <input id="dob" type="date" name="dob"><br>

      <h2 class="name"> NIC </h2>
      <input id="nic" type="text" name="nic"><br>

      <h2 class="name"> Username (email) </h2>
      <input id="email" type="text" name="email"><br>

      <h2 class="name"> Password </h2>
      <input id="password" type="password" name="password"><br>

      <h2 class="name"> Address </h2>
      <input id="address" type="text" name="address"><br>

      <h2 class="name">Position</h2>

      <select id="pos" name="pos">
        <?php
        while ($position = mysqli_fetch_array(
          $all_positions,
          MYSQLI_ASSOC
        )) :;
        ?>
          <option value="<?php echo $position["id"];
                          // The value we usually set is the primary key
                          ?>">
            <?php echo $position["position"];
            // To show the category name to the user
            ?>
          </option>
        <?php
        endwhile;
        // While loop must be terminated
        ?>
      </select>

      <h2 class="name"> Contact No </h2>
      <input id="telno" type="text" name="telno" required>

      <button type="submit" name="Register_user"> Register </button>
      <button type="reset"> Clear </button>

      <a style="display: inline-block;padding: 8px 16px;text-align:center;" href="user_interface.php" class="previous"> Previous</a>

      <div class="footer">
        © copyright - ALL RIGHTS RESERVED 2022.PIMS version 1.1 developed by <a href="#" style="color:#0F762F; font-weight:bold;">Group No: 05</a>
      </div>

    </form>
  </div>
</body>

</html>