<!DOCTYPE html>
<html>

<head>
  <title>Location Management - PIMS (Delete Med Types)</title>
  <?php include_once('layouts/header_links.php'); ?>
  <link href="css/form_styling.css" rel="stylesheet">
</head>

<body>
  <h1> Location Management - Delete Medicine  </h1>
  <br>

  <div id="container1">
    <form action="delete_medicine.php" method="post" autocomplete="off">
      <label for="medID">Medicine ID</label>
      <input type="text" id="medID" name="med_id" placeholder="Enter Med ID you want to delete">
      <br>
      <button onclick="myFunction()" name="del">Delete</button>

      <p id="demo"></p>

      <script>
        //function myFunction() {
					//let text = "Are you sure to delete??";
					//if (confirm(text) == true) {
						//text = "successfully deleted!!";
				//	} else {
						//text = "not deleted!!";
				//	}
					//document.getElementById("demo").innerHTML = text;
       // }
      </script>
  </div>
  </form>
  <a style="display: inline-block;padding: 10px 20px; text-align:center;text-decoration:none;" href="location.php" class="previous">Previous</a>



  <div class="footer">
    <div style="background-color:#000; text-align:center;padding:10px;color:#fff">© copyright - ALL RIGHTS RESERVED 2022.PIMS version 1.1 developed by <a href="#" style="color: #fff; text-decoration:none; text-transform:uppercase;">Group 05</a></div>
  </div>

</body>

</html>












<?php
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, 'pims');

include_once('config.php'); 
if (isset($_POST["del"])) {
  $med_id = $_POST["med_id"];                                     //check entered medid
  $sql = "SELECT * FROM location WHERE med_id='$med_id'";

  $result = $__conn->query($sql);
 
  if ($result->num_rows == 0) {
  echo '<script>alert("Entered Med_ID Does not Exist!")</script>';
  }else{                                                                 //alert if it not
  $query = "DELETE FROM location WHERE med_id = $med_id ";
  $query_run = mysqli_query($connection, $query);
  
  if ($query_run) {
    echo '<script>alert("Medicine Deletion Successfully!")</script>';            //delete med
  } else {
    echo '<script>("Medicine Deletion Failed!")</script>';
  }
  
}
}
?>

