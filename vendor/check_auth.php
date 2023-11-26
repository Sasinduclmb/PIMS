<?php


// $auth = new Leaf\Auth;

// example
$mysqli = new mysqli("localhost", "root", "", "pims");

if ($auth->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
} else {
    echo "connect to MySQL: ";
}
