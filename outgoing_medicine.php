<!DOCTYPE html>
<html>

<head>
	<title>Supply Management - PIMS (Outgoing Med Stocks) </title>
	<?php include_once('layouts/header_links.php'); ?>
	<link href="css/editord.css" rel="stylesheet">
</head>

<body>
<?php


$sql = "SELECT `med_id`,`med_name` FROM `location`";
$all_med = mysqli_query($__conn, $sql);

?>
	<h2> Suppliers Management - Outgoing Med Stocks </h2>
	<br>
	<div>
		<form action="functions/outgoing.php" method="POST">
			<label for="MedId">MedId</label>
			<select name="medId">
                <?php
                while ($med = mysqli_fetch_array(
                    $all_med,
                    MYSQLI_ASSOC
                )) :;
                ?>
                    <option value="<?php echo $med["med_id"];
                                    // The value we usually set is the primary key
                                    ?>">
                        <?php echo $med["med_name"];
                        // To show the category name to the user
                        ?>
                    </option>
                <?php
                endwhile;
                // While loop must be terminated
                ?>
            </select>
			<label for="Med Name">Med Name</label>
			<input type="text" id="Med Name" name="Med Name" placeholder="Enter Med Name">
			<label for="Quantity">Quantity</label></tr>
			<input type="text" id="Quantity" name="Quantity" placeholder="Quantity">
			<label for="Outed Date">Outed Date </label>
			<input type="date" id="Outed Date" name="Outed Date">
			<input type="submit" value="Submit" name="outgoing_medicine">
			<input type="reset" value="Reset" class="reset">

		</form>
	</div>
	<a style="display: inline-block;padding: 8px 16px;text-align:center;" href="more_about_orders.php" class="previous"> Previous</a>
	<div class="footer">
		<div style="background-color:#000; text-align:center;padding:10px;color:#fff">© copyright - ALL RIGHTS RESERVED 2022.PIMS version 1.1 developed by <a href="#" style="color: #fff; text-decoration:none; text-transform:uppercase;">Group 05</a></div>
	</div>

</body>

</html>