<?php
$__servername="localhost";
$__username="root";
$__password="";
$__dbname="pims";

// try {
//     $__conn = new mysqli($__servername, $__username, $__password, $__dbname);
//   }
//   catch (mysqli_sql_exception $__e) {
//       $_redtitle = 'Database Not Connected'; 
//       $_redmsg = 'This happend sometime when server is down or database is not operational.'; 
//       header("location:./redirect.php?title=$_redtitle&msg=$_redmsg");
//       return;
//   }

// create connection
$__conn = mysqli_connect($__servername, $__username, $__password, $__dbname);

//check connection
if (!$__conn) {
    die("connection failed: " . mysqli_connect_error());
}