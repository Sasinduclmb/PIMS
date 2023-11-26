<!DOCTYPE html>
<html>

<head>
	<title>Contact Us</title>
	<?php include_once('layouts/header_links.php'); ?>
	<link href="css/contact.css" rel="stylesheet" type="text/css">

</head>

<body>
	<div style="overflow:auto">
		<div class="menu">
			<a class="active" href="index.php">Home</a>
		</div>

		<div class="menu">
			<a href="contact.php">Contact Us</a>
		</div>

		<div class="menu">
			<a href="about.php"> About </a>
		</div>

		<div class="menu">
			<?php
			if (array_key_exists('email', $_SESSION)) {
				echo '<a href="functions/logout.php">Logout</a>';
			} else {
				echo '<a href="login.php">Login</a>';
			}


			?>

		</div>
		<div class="title">
			<h1>Contact Us</h1>
			<p>Please feel free to contact us if you have any issue. We love to help you.</p>
			<br />
			<h3>Email</h3>
			<p>xxxxxx123@gmail.com</p>
			<br />
			<h3>Hotline</h3>
			<p>xxx-xxxx-xxx</p>
			<br />
		</div>
		<div class="container">
			<div class="contact-box">
				<div class="left"></div>
				<div class="right">
					<form action="./functions/functions.php" method="POST">
						<h2>Get Experts' Advice</h2>
						<input type="text" class="field" placeholder="Name" name="name">
						<input type="text" class="field" placeholder="Email" name="email">
						<input type="text" class="field" placeholder="Phone" >
						<textarea placeholder="Type Your Message" class="field" name="message"></textarea>
						<input type="submit" value="Send" name="email_send">
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class ="footer">
<div style="background-color:#000; text-align:center;padding:10px;color:#fff">© copyright - ALL RIGHTS RESERVED 2022.PIMS version 1.1 developed by <a href ="#" style="color: #fff; text-decoration:none; text-transform:uppercase;">Group 05</a></div>
</div>
</body>

</html>