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

    #btn2 {
      position: absolute;
      top: 35%;
      left: 11%;
    }

    #btn1 {
      position: absolute;
      top: 35%;
      left: 36%
    }

    #d1 {
      position: absolute;
      top: 25%;
      left: 27%;
    }

    body {
      background-image: url(./img/med.jpgS);
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
      height: 625px;
      margin: auto;
      border-radius: 0px 0px 15px 15px;
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



    .date {
      position: relative;
      left: 150px;
      top: -37px;
      line-height: 40px;
      width: 300px;
      border-radius: 6px;
      padding: 0 22px;
      font-size: 16px;
      color: #555;
    }

    input[type=submit] {
      background-color: #3baf9f;
      display: block;
      margin: 20px 0px 0px 220px;
      text-align: center;
      border-radius: 12px;
      border: 2px solid #366473;
      padding: 14px 75px;
      outline: none;
      color: white;
      cursor: pointer;
      transition: 0.25px;

    }

    .previous {
      background-color: #3baf9f;
      display: block;
      margin: 125px 0px 0px 10px;
      text-align: center;
      border-radius: 12px;
      border: 2px solid #366473;
      padding: 14px 110px;
      outline: none;
      color: white;
      cursor: pointer;
      transition: 0.25px;

    }

    input[type=submit]:hover {
      background-color: #5390f5;
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

    .previous {
      background-color: #0FF063;
      color: black;
      position: absolute;
      top: 450px;
      left: 380px;
    }

    .footer {
      height: 75px;
      background-color: #49E980;
      text-align: center;
      margin: 510px 20px 20px 20px;
      border-radius: 12px;
      border: 2px solid #366473;
      padding: 14px 110px;
      outline: none;
    }
  </style>
</head>

<body>
  <div class="regform">
    <h1> Medicine Data Alerts </h1>
  </div>
  <div class="main">
    <form action="search_medicine.php" method="POST" autocomplete="off">
      <table>
        <tr>
          <td>
            <input type="submit" id="btn1" value="Get Remaining Few Medicines" name="few_med"></p>
            <input class="date" id="d1" type="date" name="today_d">
          </td>
          <td>
            <input type="submit" value="Get Expire Soon Medicines" name="expire_med" id="btn2"> <br>
          </td>
      </table>
      <table id="table1">
        <tr>
          <th>Med ID</th>
          <th>Med Name</th>
          <th>Amount</th>
          <th>Expire Date</th>
          <th>Stock Location</th>
        </tr>


        <?php
        if (isset($_POST["few_med"])) {
          $sql = "SELECT * FROM location WHERE amount<=5";   //check less 5 med

          $result = $__conn->query($sql);
          #echo "Remaining Few Medicines";
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              echo "<tr><td>" . $row["med_id"] . "</td><td>" . $row["med_name"] . "</td><td>" . $row["amount"] . "</td><td>" . $row["x_date"] . "</td><td>" . $row["st_loc"] . "</td></tr>";
            }
            echo "</table>";
          } else {
            echo '<script>alert("No result!")</script>';
          }
        }

        ?>




        <?php


        if (isset($_POST["expire_med"])) {
          $today_d = $_POST["today_d"];
          if (!empty($today_d)) {
            $sql = "SELECT * FROM location WHERE x_date < DATE_ADD(' $today_d', INTERVAL 7 DAY) AND x_date > $today_d";   //check expire med

            $result = $__conn->query($sql);
            #echo "Expire Soon Medicines";
            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["med_id"] . "</td><td>" . $row["med_name"] . "</td><td>" .  $row["amount"] . "</td><td>" . $row["x_date"] . "</td><td>" . $row["st_loc"] . "</td></tr>";
              }
              echo "</table>";
            } else {
              echo  $__conn->error;
            }
          }
        }

        ?>




      </table>
      <a style="display: inline-block;padding: 8px 16px;text-align:center;" href="location.php" class="previous"> Previous</a>

      <div class="footer">
        ©️ copyright - ALL RIGHTS RESERVED 2022.PIMS version 1.1 developed by <a href="#" style="color:#0F762F; font-weight:bold;">Group No: 05</a></div>

    </form>
  </div>
</body>

</html>