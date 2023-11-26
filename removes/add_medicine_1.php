<!DOCTYPE html>
<html>

<head>
    <title>Location Management - PIMS (Add New Med Types)</title>
    <?php include_once('layouts/header_links.php'); ?>
    <link href="css/form_styling.css" rel="stylesheet">
</head>

<body>
    <h1> Location Management - Add New Medicine  </h1>
    <br>

    <div id="container">
        <form action="./functions/add_product.php" method="post" autocomplete="off" id="addform">
            <label for="medID">Med ID</label>
            <input type="text" id="medID" name="med_id" placeholder="Enter New Medicine ID" required>

            <label for="Med_Name">Med Name</label>
            <input type="text" id="medname" name="med_name" placeholder="Enter Medicine Name" required>

            <label for="Med_Type">Med Type</label>
            <input type="text" id="medtype" name="med_type" placeholder="Enter Med Type" required>

            <label for="st_cond">Storage Condition</label>
            <input type="number" id="st_cond" name="store_con" placeholder="Enter Storage Condition in Celsius" required>

            <!-- <label for="st_amount">Stock Amount </label>
            <input type="number" id="st_amount" name="amount" placeholder="Enter Stock Amount" required> -->

            <label for="manudate">Manufacture Date </label>
            <input type="date" id="manudate" name="m_date" required>

            <label for="expdate">Expiry Date </label>
            <input type="date" id="expdate" name="x_date" required>

            <label for="fname">Med Supplier </label>
            <input type="text" id="fname" name="f_name" placeholder="Enter Supplier's Name" required>

            <label for="telno">Contact No </label>
            <input type="tel" id="telno" name="tel_no" placeholder="xxx-xxx-xxxx" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>

            <label for="st_loc">Storage Location</label>
            <input type="text" id="st_loc" name="st_loc" placeholder="Enter Storage Location">

            <input type="submit" value="Add" name="add_medicine">
            <input type="reset" value="Clear">
        </form>
    </div>

    <a style="display:inline-block;padding: 10px 20px; text-align:center;text-decoration: none;" href="location.php" class="previous">Previous</a>

    <div class="footer">
        <div style="background-color:#000; text-align:center;padding:10px;color:#fff">© copyright - ALL RIGHTS RESERVED 2022.PIMS version 1.1 developed by <a href="#" style="color: #fff; text-decoration:none; text-transform:uppercase;">Group 05</a></div>
    </div>
</body>

</html>
