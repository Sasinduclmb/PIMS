<?php
include_once('config.php');

//save outgoing medicine
if (array_key_exists("outgoing_medicine", $_POST)) {

    $med_id = $_POST["medId"];
    $quantity = $_POST["Quantity"];

    $sql = "INSERT INTO out_med  (`med_id`,`quantity`,`date_time`) VALUES ($med_id,$quantity,now())";
    $upd =  "UPDATE location SET amount = (amount-'$quantity') WHERE med_id ='$med_id'";

    if (mysqli_query($__conn, $sql) === TRUE && mysqli_query($__conn, $upd) === TRUE) {
        echo "Successfully";
    } else {
        echo "Failed";
    }
}
