<?php
include_once('config.php');

//save outgoing medicine
if (array_key_exists("add_medicine", $_POST)) {

    $med_name=$_POST["med_name"];
    $med_type = $_POST["med_type"];
    $store_con = $_POST["store_con"];              
    $m_date = $_POST["m_date"];
    $x_date = $_POST["x_date"];
    $f_name = $_POST["f_name"];              
    $tel_no = $_POST["tel_no"];
    $st_loc = $_POST["st_loc"];

    $sql= "INSERT into location(med_name,med_type,store_con,m_date,x_date,f_name,tel_no,st_loc)  VALUES ('$med_name','$med_type','$store_con','$m_date','$x_date','$f_name','$tel_no','$st_loc')";

    if (empty( $med_name)|| empty($med_type ) || empty( $store_con)  || empty( $m_date) || empty($x_date) || empty($f_name) || empty( $tel_no) || empty($st_loc)) {
        return;
    }

    if (mysqli_query($__conn,$sql) === TRUE) {
        echo "Successfully";
    } else {
        echo "Failed";
    }
}
?>