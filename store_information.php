<!DOCTYPE html>
<html>

<head>
  <title>Med Stock Management</title>
  <?php include_once('layouts/header_links.php'); ?>
  <style type="text/css">
    * {
      margin: 0;
      padding: 0;
    }

    body {
      background-image: url(./img/store.jpg);
      background-position: center;
      background-size: cover;
      font-family: sans-serif;
      margin-top: 40px;
    }

    #table1 {
      border-collapse: collapse;
      width: 50%;
      color: black;
      font-family: monospace;
      font-size: 15px;
      text-align: center;
      position: absolute;
      top: 60%;
      border: 2px solid black;
      background-color: white;

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
      height: 700px;
      border-radius: 0px 0px 15px 15px;
    }

    .name {
      margin-left: 35px;
      margin-top: 30px;
      width: 125px;
      color: white;
      font-size: 18px;
      font-weight: 700;
    }

    form {
      padding: 10px;
    }

    #name {
      width: 100%;
      height: 100px;
    }

    #medname {
      position: relative;
      left: 230px;
      top: -47px;
      line-height: 40px;
      width: 280px;
      border-radius: 6px;
      padding: 0 22px;
      font-size: 16px;
      color: #555;

    }

    button,
    input[type=submit] {
      background-color: #3baf9f;
      display: block;
      margin: 20px 235px 0px 235px;
      text-align: center;
      border-radius: 12px;
      border: 2px solid #366473;
      padding: 14px 110px;
      outline: none;
      color: white;
      cursor: pointer;
      transition: 0.25px;
    }

    button:hover,
    input[type=submit]:hover {
      background-color: #5390f5;
    }

    .previous {
      background-color: #0FF063;
      color: black;
      border-radius: 12px;
      border: 2px solid #366473;
      padding: 30px 40px;
      margin: 20px 0px 0px 20px;
      position: absolute;
      bottom: 90px;
    }

    .footer {
      height: 70px;
      background-color: #49E980;
      text-align: center;
      margin: 20px 0px 0px 20px;
      border-radius: 12px;
      border: 2px solid #366473;
      padding: 14px 40px;
      outline: none;
      position: absolute;
      bottom: 2px;
    }
  </style>
</head>

<body>
  <div class="regform">
    <h1>Stock Information</h1>
  </div>

  <div class="main">
    <form action="store_information.php" method="POST" autocomplete="off">
      <div id="name">
        <h2 class="name"> Medicine ID </h2>
        <input id="medname" type="text" name="medid"><br>
        <input type="submit" value="Show" name="search_med">
        <button onclick="myFun()"> Hide </button>
        <table id="table1">
          <tr>
            <th>Med ID </th>
            <th>Store Condition (°C)</th>
            <th>Stock Location</th>
            <th>Supplier Company</th>
            <th>Med Name </th>
          </tr>
          <?php
          $connection = mysqli_connect("localhost", "root", "");
          $db = mysqli_select_db($connection, 'pims');


          if (isset($_POST["search_med"])) {
            $medid = $_POST["medid"];
            $sql = "SELECT * FROM location WHERE med_id = '$medid'";

            $result = $__conn->query($sql);

            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["med_id"] . "</td><td>" . $row["store_con"] . "</td><td>" . $row["st_loc"] . "</td><td>" . $row["f_name"] . "</td><td>"  . $row["med_name"]  . "</td></tr>";
              }
              echo "</table>";
            } else {
              echo '<script>alert("No result!")</script>';
            }
          }

          ?>
        </table>
        <p id="demo"></p>

        <script>
          function myFun() {
            document.getElementById("table").deleteRow(0);
          }
        </script>


        <a style="display: inline-block;padding: 8px 16px;text-align:center;" href="location.php" class="previous"> Previous</a>

        <div class="footer">
          © copyright - ALL RIGHTS RESERVED 2022.PIMS version 1.1 developed by <a href="#" style="color:#0F762F; font-weight:bold;">Group No: 05</a>
        </div>

    </form>
  </div>
</body>

</html>