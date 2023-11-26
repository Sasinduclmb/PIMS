<!DOCTYPE html>
<html>

<head>
  <title>Supply Management</title>
  <?php include_once('layouts/header_links.php'); ?>
  <style type="text/css">
    * {
      margin: 0;
      padding: 0;
    }

    body {
      background-image: url("./img/supply.jpg");
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

    .firstlabel {
      position: relative;
      color: #e5e5e5;
      text-transform: capitalize;
      font-size: 14px;
      left: 203px;
      top: -45px;
    }

    .lastlabel {
      position: relative;
      color: #e5e5e5;
      text-transform: capitalize;
      font-size: 14px;
      left: 175px;
      top: -45px;
    }

    #firstname,
    #comRegNum,
    #companyName {
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

    #address {
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

    #MedName,
    #tel_no {
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



    #date {
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
    <h1>Add New Suppliers</h1>
  </div>
  <div class="main">
    <form action="./functions/functions.php" method="POST" autocomplete="off">

      <h2 class="name"> Company Name </h2>
      <input id="companyName" type="text" name="company_name"><br>

      <h2 class="name">Supplier's Name </h2>
      <input id="firstname" type="text" name="owner_name"><br>

      <h2 class="name"> Registration Number </h2>
      <input id="comRegNum" type="text" name="company_r_no"><br>

      <h2 class="name"> Address </h2>
      <input id="address" type="text" name="address"><br>

      <h2 class="name"> Med Name </h2>
      <input id="MedName" type="text" name="med_name"><br>

      <h2 class="name"> Phone </h2>
      <input id="tel_no" type="text" name="contact"><br>

      <h2 class="name"> Joined Date </h2>
      <input id="date" type="date" name="j_date"><br>

      <button type="submit" name="add_supplier"> Submit </button>
      <button type="reset"> clear </button>

      <a style="display: inline-block;padding: 8px 16px;text-align:center;" href="supplier_menu.php" class="previous"> Previous</a>

      <div class="footer">
        © copyright - ALL RIGHTS RESERVED 2022.PIMS version 1.1 developed by <a href="#" style="color:#0F762F; font-weight:bold;">Group No: 05</a></div>
    </form>
  </div>
</body>

</html>