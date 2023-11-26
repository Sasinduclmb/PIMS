<!DOCTYPE html>
<html>

<head>
    <title>Location Management - PIMS (Storage Information)</title>
    <?php include_once('layouts/header_links.php'); ?>
    <link href="css/form_styling.css" type="text/css" rel="stylesheet">
</head>

<body>
    <h1> Location Management - Store Information </h1>
    <br>

    <div id="container1">
        <form action="store_information.php" method="post" onsubmit="return informatio()">
            <label for="medtype">Med Name</label>
            <input type="text" id="medtype" name="medname" placeholder="Enter Med name">
            <input type="submit" value="Search" name="search" onclick="myfunction()"/>
            <script>
                function myfunction() {
                    window.location.href="table_information.php";
                }
                </script>
            <input type="reset" value="Clear">
        </form>
    </div>

    <a style="display: inline-block;padding: 10px 20px; text-align:center;text-decoration:none;" href="location.php" class="previous">Previous</a>

   

    <!--?php  

$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, 'pims');


  if (isset($_POST["search"])){
    $MedName = $_POST["MedName"];

    $sql ="SELECT med_id,store_con,amount,m_date,x_date,st_loc FROM location WHERE med_name='$MedName'";

    $result = $__conn->query($sql);

		if ($result->num_rows == 0) {
			echo '<script>alert("Entered Med_Name Does not Exist!")</script>';
        }
		
        else {
			$query = " SELECT med_id,store_con,amount,m_date,x_date,st_loc FROM location";
			$query_run = mysqli_query($connection, $query);
		}
		if ($query_run) {
			echo '<script>alert("Supplier Deletion Successfully!")</script>';
		} else {

			echo '<script>("Supplier Deletion Failed!")</script>';
		}  
        
        
        }
        
         
  
      

?>-->


<div class ="footer">
        <div style="background-color:#000; text-align:center;padding:10px;color:#fff">© copyright - ALL RIGHTS RESERVED 2022.PIMS version 1.1 developed by <a href="#" style="color: #fff; text-decoration:none; text-transform:uppercase;">Group 05</a></div>
</div>
</body>

</html>