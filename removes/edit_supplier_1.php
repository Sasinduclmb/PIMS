<!DOCTYPE html>
<html>

<head>
	<title>Supplier Management - PIMS</title>
	<?php include_once('layouts/header_links.php'); ?>
	<link href="css/editsup.css" rel="stylesheet">
</head>

<body>
	<h2> Suppliers Management - Edit Suppliers </h2>
	<br>
	<div>
		<div id="container">
			<form action="edit_supplier.php" method="post">
				<label for="NIC">Company Registration Number</label>
				<input type="text" id="company_r_no" name="company_r_no" placeholder="Enter Company Registration Number ">
				<label for="Attributes">Choose Field:</label>
				<select id="Attributes" name="field">
					<option value="company_name" id="op1">Company_name</option>
					<option value="Company_Owner_Name" id="op2">Company Owner Name</option>
					<option value="Address" id="op4">Address</Address></option>
					<option value="Med_Type" id="op5">Med Type</option>
					<option value="Contact_no" id="op6">Contact no</Address></option>
					<option value="Joined_Date" id="op7">Joined_Date</option>
				</select>
				<label for="New">New Data </label>
				<input type="text" id="New" name="New" placeholder="Enter new data ......">
				<br>
				<button type="submit"  name="update_data" onclick="myFunction()">Update</button>

				<p id="demo"></p>

				<script>
					//function myFunction() {
						//let text = "Are you sure to edit??";
						//if (confirm(text) == true) {
						//	text = "successfully edited!!";
						//} else {
							//text = "not edited!!";
						//}
						//document.getElementById("demo").innerHTML = text;
					//}
				</script>

			</form>
		</div>
		<a style="display: inline-block;padding: 8px 16px;text-align:center;" href="supplier_menu.php" class="previous"> Previous </a>
	</div>
	<div class="footer">
		<div style="background-color:#000; text-align:center;padding:10px;color:#fff">© copyright - ALL RIGHTS RESERVED 2022.PIMS version 1.1 developed by <a href="#" style="color: #fff; text-decoration:none; text-transform:uppercase;">Group 05</a></div>
	</div>

</body>

</html>











<?php 
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, 'pims');

if(isset($_POST["update_data"])){
$company_r_no =$_POST["company_r_no"];
$field =$_POST["field"];
$New =$_POST["New"];

$sql ="SELECT * FROM supllier WHERE company_r_no ='$company_r_no'";
$result = $__conn->query($sql);
   
    if ($result->num_rows == 0) {
    echo "<script>alert('Entered Company Registration Number Does not Exist!')</script>";

	}
	
	else {                                                                    //check which field user need to update and do updateed it
	switch ($field){
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