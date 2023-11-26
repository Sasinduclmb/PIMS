<!DOCTYPE html>
<html>

<head>
	<title>Supplier Management - PIMS</title>
	<?php include_once('layouts/header_links.php'); ?>
	<style>
		body {
			background-image: url("./img/pexels-karolina-grabowska-4046997.jpg");
			background-size: cover;
			background-repeat: no-repeat;

		}

		h1 {
			color: black;
			font-weight: 700;
			text-align: center;
			font-family: sans-serif;

		}

		div {
			border-radius: 5px;
			background-color: #f2f2f2;
			padding: 20px;

		}

		input[type=text],
		select {
			width: 30%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #0FDCF0;
			border-radius: 4px;
			box-sizing: border-box;
			font-size: 20px;
		}

		label {
			font-weight: bold;
			font-size: 20px;

		}

		button:hover {
			background-color: #AC8986;
		}

		button {
			width: 25%;
			background-color: #E48F4E;
			color: white;
			padding: 14px 20px;
			margin: 30px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			font-size: 25px;
		}

		.alert {
			padding: 20px;
			background-color: #f44336;
			color: white;
		}

		.previous,
		.next {
			background-color: #BA8D45;
			color: white;
			text-decoration: none;
			padding: 100px;
			margin: 30px;
			margin-top: 70px;
		}

		.footer {
			padding: 80px;
			background-color: #000;
			text-align: center;
			padding: 10px;
			color: #fff;
			margin-bottom: 0.1px;
		}

		#container {
			height: 500px;
		}
	</style>

</head>

<body>
	<h1> Suppliers Management - Edit Suppliers </h1>
	<br>


	<form action="edit_supplier.php" method="post" autocomplete="off">
		<label for="NIC">Registration Number &nbsp;</label>
		</br>
		<input type="text" id="company_r_no" name="company_r_no">
		</br>
		<label for="Attributes">Choose Field:&nbsp;&nbsp;&nbsp;&nbsp;</label>
		</br>

		<select id="Attributes" name="field">
			<option value="company_name" id="op1">Company Name</option>
			<option value="Company_Owner_Name" id="op2">Company Owner Name</option>
			<option value="Address" id="op4">Address</Address>
			</option>
			<option value="Med_Type" id="op5">Med Type</option>
			<option value="Contact_no" id="op6">Contact no</Address>
			</option>
			<option value="Joined_Date" id="op7">Joined Date</option>
		</select>
		</br>
		<label for="New">New Data </label>
		</br>
		<input type="text" id="New" name="New">
		<br>
		<button type="submit" name="update_data" onclick="myFunction()">Update</button>

		<p id="demo"></p>

		<script>
			function myFunction() {
				let text = "Are you sure to edit?";
				if (confirm(text) == true) {

				} else {

				}

			}
		</script>

	</form>

	<a style="display: inline-block;padding: 8px 16px;text-align:center;" href="supplier_menu.php" class="previous"> Previous </a>


	<div class="footer">© copyright - ALL RIGHTS RESERVED 2022.PIMS version 1.1 developed by <a href="#" style="color: #fff; text-decoration:none; text-transform:uppercase;">Group 05</a></div>


</body>

</html>
<?php
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, 'pims');

if (isset($_POST["update_data"])) {
	$company_r_no = $_POST["company_r_no"];
	$field = $_POST["field"];
	$New = $_POST["New"];

	$sql = "SELECT * FROM supllier WHERE company_r_no ='$company_r_no'";
	$result = $__conn->query($sql);

	if ($result->num_rows == 0) {
		echo "<script>alert('Entered Company Registration Number Does not Exist!')</script>";
	} else {                                                                    //check which field user need to update and do updated it
		switch ($field) {
			case "company_name":
				$query = "UPDATE supllier SET company_name = '$New' WHERE company_r_no ='$company_r_no' ";
				$query_run = mysqli_query($connection, $query);

				if ($query_run) {
					echo '<script>alert("Your changes have been successfully saved!")</script>';
				} else {

					echo '<script>("Update Failed")</script>';
				}
				break;

			case "Company_Owner_Name":
				$query = "UPDATE supllier SET owner_name = '$New' WHERE company_r_no ='$company_r_no' ";
				$query_run = mysqli_query($connection, $query);

				if ($query_run) {
					echo '<script>alert("Your changes have been successfully saved!")</script>';
				} else {

					echo '<script>("Update Failed")</script>';
				}
				break;

			case "Address":
				$query = "UPDATE supllier SET address = '$New' WHERE company_r_no ='$company_r_no' ";
				$query_run = mysqli_query($connection, $query);

				if ($query_run) {
					echo '<script>alert("Your changes have been successfully saved!")</script>';
				} else {

					echo '<script>("Update Failed")</script>';
				}
				break;

			case "Med_Type":
				$query = "UPDATE supllier SET type = '$New' WHERE company_r_no ='$company_r_no' ";
				$query_run = mysqli_query($connection, $query);

				if ($query_run) {
					echo '<script>alert("Your changes have been successfully saved!")</script>';
				} else {

					echo '<script>("Update Failed")</script>';
				}
				break;

			case "Contact_no":
				$query = "UPDATE supllier SET contact = '$New' WHERE company_r_no ='$company_r_no' ";
				$query_run = mysqli_query($connection, $query);

				if ($query_run) {
					echo '<script>alert("Your changes have been successfully saved!")</script>';
				} else {

					echo '<script>("Update Failed")</script>';
				}
				break;

			case "Joined_Date":
				$query = "UPDATE supllier SET j_date = '$New' WHERE company_r_no ='$company_r_no' ";
				$query_run = mysqli_query($connection, $query);

				if ($query_run) {
					echo '<script>alert("Your changes have been successfully saved!")</script>';
				} else {

					echo '<script>("Update Failed")</script>';
				}
				break;

			default:
				break;
		}
	}
}
?>