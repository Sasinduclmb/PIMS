<!DOCTYPE html>
<html>

<head>
	<title>Supplier Management - PIMS</title>
	<?php include_once('layouts/header_links.php'); ?>
	<link href="css/formstyling.css" rel="stylesheet">
</head>

<body>
	<h1> Suppliers Management - Delete Suppliers </h1>
	<br>

	<div id="container1">
		<form action="delete_supplier.php" method="post">
			<label for="rnum">Company Registration Number</label>
			<input type="text" id="crn" name="company_r_no" placeholder="Enter Company Registration Number">
			<br>
			<button name="del_sup" onclick="myFunction()">Delete</button>

			<p id="demo"></p>

			<script>
				//function myFunction() {
					//let text = "Are you sure to delete??";
					//if (confirm(text) == true) {
					//	text = "successfully deleted!!";
					//} else {
					//	text = "not deleted!!";
					//}
					//document.getElementById("demo").innerHTML = text;
				//}
			</script>
	</div>
	<a style="display: inline-block;padding: 8px 16px;text-align:center;text-decoration:none;" href="supplier_menu.php" class="previous"> Previous</a>
	</form>

	<div class="footer">
		<div style="background-color:#000; text-align:center;padding:10px;color:#fff">© copyright - ALL RIGHTS RESERVED 2022.PIMS version 1.1 developed by <a href="#" style="color: #fff; text-decoration:none; text-transform:uppercase;">Group 05</a></div>
	</div>


	





	<?php
	$connection = mysqli_connect("localhost", "root", "");
	$db = mysqli_select_db($connection, 'pims');

	if (isset($_POST["del_sup"])) {
		$company_r_no = $_POST["company_r_no"];
		$sql = "SELECT * FROM supllier WHERE company_r_no='$company_r_no'";

		$result = $__conn->query($sql);
		if ($result->num_rows == 0) {
			echo '<script>alert("Entered Med_ID Does not Exist!")</script>';
		} else {
			$query = "DELETE FROM supllier WHERE company_r_no = $company_r_no ";
			$query_run = mysqli_query($connection, $query);
		}
		if ($query_run) {
			echo '<script>alert("Supplier Deletion Successfully!")</script>';
		} else {

			echo '<script>("Supplier Deletion Failed!")</script>';
		}
	}

	?>

</body>

</html>