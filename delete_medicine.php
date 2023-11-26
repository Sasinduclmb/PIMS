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
      background-image: url(./img/delmed.jpg);
      background-position: center;
      background-size: cover;
      font-family: sans-serif;
      margin-top: 40px;
    }

    .regform {
      width: 800px;
      height: 50px;
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

    .name1 {
      margin-left: 25px;
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

    #med_Id {
      position: relative;
      left: 235px;
      top: -37px;
      line-height: 40px;
      width: 280px;
      border-radius: 6px;
      padding: 0 22px;
      font-size: 16px;
      color: #555;
    }

    button {
      background-color: #3baf9f;
      display: block;
      margin: 20px 235px 320px;
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

    .previous {
      background-color: #0FF063;
      color: black;
      border-radius: 12px;
      border: 2px solid #366473;
      padding: 30px 110px;
      margin: 1px 20px;
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
    <h1>Delete Medicine</h1>
  </div>

  <div class="main">
    <form action="./functions/functions.php" method="POST" autocomplete="off">
      <div id="name">
        <h2 class="name1"> Medicine ID </h2>
        <input id="med_Id" type="text" name="med_id"><br>

        <button type="submit" onclick="myFunction()" name="del"> Delete </button>

        <p id="demo"></p>

        <script>
          function myFunction() {
            let text = "Are you sure to delete?";
            if (confirm(text) == true) {} else {}
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