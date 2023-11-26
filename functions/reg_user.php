<?php
include_once('config.php');


if (array_key_exists("Register_user", $_POST)) {

    $full_name = $_POST["full_name"];
    $dob = $_POST["dob"];
    $nic = $_POST["nic"];
    $email = $_POST["email"];
    $password = md5($_POST["password"]);
    $address = $_POST["address"];
    $pos = $_POST["pos"];
    $telno = $_POST["telno"];


    if (empty($full_name) || empty($dob) || empty($nic) || empty($email) || empty($address) || empty($pos) || empty($telno) || empty($password)) {
        return;
    }
    $sql = "insert into users (full_name,dob,nic,email,address,pos,telno,password) values ('$full_name','$dob','$nic','$email','$address','$pos','$telno','$password')";
    if (mysqli_query($__conn, $sql)) {
        echo "Account Created Successfully";
    } else {
        echo "Failed to create account";
    }
}
