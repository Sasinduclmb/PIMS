<!Doctype html>
<html>

<head>
  <title>User Management - PIMS</title>
  <?php include_once('layouts/header_links.php'); ?>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap');

    body {
      font-family: Arial;
      color: white;
    }

    .split {
      height: 30%;
      width: 30%;
      position: fixed;
      z-index: 1;
      top: 0;
      overflow-x: hidden;
      padding-top: 20px;
    }

    .left {
      top: 250px;
      left: 250px;
      border-radius: 0.5rem;
      background-image: linear-gradient(to left, green, #4c9a2a);
    }

    .right {
      border-radius: 0.5rem;
      top: 250px;
      right: 250px;
      background-image: linear-gradient(to left, #c30010, #ff2c2c);
    }

    .centered {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      text-align: center;
    }

    .centered img {
      width: 70px;
      border-radius: 50%;
    }

    #add {
      text-align: center;
      color: black;
      text-decoration: none;
      font-weight: bold;
      position: absolute;
      top: 110px;
      left: 48px;
      border-radius: 5px;
      border: 1px solid black;
      font-weight: 500;
    }

    #add:hover {
      background-color: #b3cf99;
    }

    h4 {
      font-size: 20px;
      font-family: "poppins", sans-serif;
    }

    h2 {
      font-size: 40px;
      color: black;
      font-weight: 800;
      position: absolute;
      top: 120px;
      left: 570px;
      font-family: "poppins", sans-serif;
    }

    .previous {
      background-color: #0FF063;
      color: black;
      position: absolute;
      top: 650px;
      left: 5px;
    }
  </style>
</head>

<body>
  <h2>User Management </h2>
  <div class="split left">
    <div class="centered">
      <h4>Add New User </h4>
      <img src="./img/undraw_Male_avatar_g98d.png" alt="Avatar woman">
      <button id="add" onclick="window.location.href='add_user.php';">Go</button>
    </div>
  </div>

  <div class="split right">
    <div class="centered">
      <h4>Remove User </h4>
      <img src="./img/undraw_Male_avatar_g98d.png" alt="Avatar man">
      <button id="add" onclick="window.location.href='remove_user.php';">Go</button>
    </div>
  </div>
  <a style="display: inline-block;padding: 8px 16px;text-align:center;" href="index.php" class="previous"> Previous</a>
</body>

</html>