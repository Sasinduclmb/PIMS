<!DOCTYPE html>
<html>

<head>
	<title>About Us</title>
	<?php include_once('layouts/header_links.php'); ?>
	<link href="css/sty.css" rel="stylesheet" type="text/css">
</head>

<?php
if (!array_key_exists('email', $_SESSION)) {
	header("location: login.php");
}
?>

<body>
	<div style="overflow:auto">
		<div class="menu">
			<a class="active" href="index.php">Home</a>
		</div>

		<div class="menu">
			<a href="contact.php">Contact Us</a>
		</div>

		<div class="menu">
			<a href="about.php"> About Us </a>
		</div>

		<div class="menu">
			<?php
			if (array_key_exists('email', $_SESSION)) {
				echo '<a href="functions/logout.php">Logout</a>';     //check if he or she login in or not
			} else {
				echo '<a href="login.php">Login</a>';
			}


			?>
		</div>
		<div class="section">
			<div class="container">
				<div class="content-section">
					<div class="title">
						<h1>About Us</h1>
					</div>
					<div class="content">
						<h3>Our Mission</h3>
						<p>PIMS, is a.......</p>
					</div>
					<div class="content">
						<h3>Our Vision</h3>
						<p>PIMS, is a.......</p>
					</div>
					<div class="content">
						<h3>Our History</h3>
						<p>PIMS, is a.......</p>
						<div class="button">
							<a href="#">Read More</a>
						</div>
					</div>
					<div class="social">
						<a href="#"><i class="fab fa-facebook-f"></i></a>
						<a href="#"><i class="fab fa-twitter"></i></a>
						<a href="#"><i class="fab fa-instagram"></i></a>
					</div>
				</div>
				<div class="img image-section">
					<img src="img/pharmacy.jpg">
				</div>
			</div>
		</div>
	</div>

	<div class="footer">
		<div style="background-color:#000; text-align:center;padding:10px;color:#fff">© copyright - ALL RIGHTS RESERVED 2022.PIMS version 1.1 developed by <a href="#" style="color: #fff; text-decoration:none; text-transform:uppercase;">Group 05</a></div>
	</div>
</body>

</html>