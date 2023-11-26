<!DOCTYPE html>
<html>

<head>
    <title>Create Account - PIMS</title>
    <?php include_once('layouts/header_links.php'); ?>
    <link href="css/form_styling.css" rel="stylesheet">
</head>

<body>
    <h1> User Interface Management - Add New Users </h1>
    <br>
    <?php

    $sql = "SELECT * FROM `position`";
    $all_positions = mysqli_query($__conn, $sql);



    ?>
    <div id="container">
        <form action="./functions/reg_user.php" method="post">
            <label for="fname">Full Name</label>
            <input type="text" id="fname" name="full_name" placeholder="Enter Full Name">

            <label for="dob">Date of Birth</label>
            <input type="date" id="dob" name="dob">

            <label for="nic">NIC</label>
            <input type="text" id="nic" name="nic" placeholder="Enter NIC">

            <label for="email">E-mail(User Name)</label>
            <input type="text" id="email" name="email" placeholder="Enter E-mail Address">


            <label for="pass">Password</label>
            <input type="password" id="password" name="password" placeholder="Account password">

            <label for="address">Address</label>
            <input type="text" id="address" name="address" placeholder="Enter Address">

            <label for="pos">Position</label>

            <select name="pos">
                <?php
                while ($position = mysqli_fetch_array(
                    $all_positions,
                    MYSQLI_ASSOC
                )) :;
                ?>
                    <option value="<?php echo $position["id"];
                                    // The value we usually set is the primary key
                                    ?>">
                        <?php echo $position["position"];
                        // To show the category name to the user
                        ?>
                    </option>
                <?php
                endwhile;
                // While loop must be terminated
                ?>
            </select>
            <label for="telno">Contact No</label>
            <input type="tel" id="telno" name="telno" placeholder="xxx-xxx-xxxx" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>

            <input type="submit" value="Register" name="Register_user">
            <input type="reset" value="Clear">
        </form>
    </div>

    <div class="footer">
        <div style="background-color:#000; text-align:center;padding:10px;color:#fff">© copyright - ALL RIGHTS RESERVED 2022.PIMS version 1.1 developed by <a href="#" style="color: #fff; text-decoration:none; text-transform:uppercase;">Group 05</a></div>
    </div>
</body>

</html>