<!DOCTYPE html>
<html>

<head>
    <title>Supplier Management - PIMS</title>
    <?php include_once('layouts/header_links.php'); ?>
    <link href="css/formstyling.css" rel="stylesheet">
</head>

<body>
    <h1> Suppliers Management - Adding New Suppliers </h1>
    <br>

    <div id="container">
        <form action="./functions/functions.php" method="post" autocomplete="off">
            <label for="cname">Company Name</label>
            <input type="text" id="cname" name="company_name" placeholder="Enter New Company Name..">
            <label for="oname">Company Owner Name</label>
            <input type="text" id="oname" name="owner_name" placeholder="Enter Company Owner Name..">
            <label for="rnum">Company Registration Number</label>
            <input type="text" id="crn" name="company_r_no" placeholder="Enter Company Registration Number">
            <label for="address">Address</label>
            <input type="text" id="address" name="address" placeholder="Enter Address">
            <label for="medtype">Med Type</label></tr>
            <input type="text" id="medtype" name="type" placeholder="Enter med type ">
            <label for="tepno">Contact no </label>
            <input type="tel" id="tepno" name="contact" placeholder="xxx-xxx-xxxx" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}">
            <label for="joindate">Joined Date </label>
            <input type="date" id="joindate" name="j_date">

            <input type="submit" value="Submit" name="add_supplier">
            <input type="reset" value="Reset" class="reset">
        </form>
    </div>

    <a style="display: inline-block;padding: 8px 16px;text-align:center;text-decoration:none;" href="supplier_menu.php" class="previous"> Previous</a>
    <div class="footer">
        <div style="background-color:#000; text-align:center;padding:10px;color:#fff">© copyright - ALL RIGHTS RESERVED 2022.PIMS version 1.1 developed by <a href="#" style="color: #fff; text-decoration:none; text-transform:uppercase;">Group 05</a></div>
    </div>
</body>

</html>

