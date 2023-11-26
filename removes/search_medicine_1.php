<!DOCTYPE html>
<html>

<head>
	<title>Location Management - PIMS (Alert Pharmaceutical Data)</title>
	<?php include_once('layouts/header_links.php'); ?>
	<link href="css/form_styling.css" rel="stylesheet">
</head>

<body>
	<h1> Location Management - Data Alerts </h1>
	<br>

	<div id="container1">
		<form action="search_medicine.php" method="POST">
			<label for="medID">Medicine ID</label>
			<input type="text" id="medID" name="medID" placeholder="Enter Med ID you want to get alert">
			<br>
			<input type="submit" value="Submit" onclick="myFunction()">

			<p id="demo"></p>

			<script>
				function myFunction() {
					let text = "There are ...... in stock";
					if (confirm(text) == true) {
						text = "Stocks are about to over!!";
					} else {
						text = "Display Stock Amount";
					}
					document.getElementById("demo").innerHTML = text;
				}
			</script>
		</form>
	</div>

	<a style="display: inline-block;padding: 10px 20px; text-align:center;text-decoration:none;" href="location.php" class="previous">Previous</a>
	<div class="footer">
		<div style="background-color:#000; text-align:center;padding:10px;color:#fff">© copyright - ALL RIGHTS RESERVED 2022.PIMS version 1.1 developed by <a href="#" style="color: #fff; text-decoration:none; text-transform:uppercase;">Group 05</a></div>
	</div>

</body>

</html>