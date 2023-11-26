<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include_once('config.php');

//login
if (array_key_exists("site_login", $_POST)) {
    $email = $_POST['uname'];
    $password = $_POST['pword'];
    $hash = md5($password);

    $sql = "SELECT * FROM users WHERE email='$email'";

    $result = $__conn->query($sql);

    if ($result->num_rows == 0) {
        echo "<script>alert('Unregisterd Email Address')</script>";
    } else {
        $sql = "SELECT * FROM users WHERE email='$email' AND password='$hash'";
        $result = $__conn->query($sql);
        if ($result->num_rows == 0) {
            echo "<script>alert('Invalid Password!')</script>";
        } else {
            $row = $result->fetch_assoc();
            $_SESSION['email'] = $row['email'];
            header("location: ../index.php");
        }
    }
}


//delete user
if (array_key_exists("del_usr", $_POST)) {
    $nic = $_POST["nic"];
    $sql = "SELECT * FROM users WHERE nic='$nic'";

    $result = $__conn->query($sql);
    if ($result->num_rows == 0) {
        echo '<script>alert("Entered NIC Does not Exist")</script>';
    } else {
        $query = "DELETE FROM users WHERE nic = $nic ";
        if (($__conn->query($query) === TRUE)) {
            echo '<script>alert("User Remove Successfully")</script>';
        } else {
            echo $query;
            echo $__conn->error;
        }
    }
}





//delete med

if (array_key_exists("del", $_POST)) {
    $med_id = $_POST["med_id"];                                     //check entered medid
    $sql = "SELECT * FROM location WHERE med_id='$med_id'";
    $result = $__conn->query($sql);
    if ($result->num_rows == 0) {
        echo '<script>alert("Entered Med_ID Does not Exist")</script>';
    } else {                                                                 //alert if it not
        $query = "DELETE FROM location WHERE med_id = $med_id ";
        if (($__conn->query($query) === TRUE)) {
            echo '<script>alert("Medicine Deletion Successfully")</script>';
        } else {
            echo $query;
            echo $__conn->error;
        }
    }
}

//add_supplier
if (array_key_exists("add_supplier", $_POST)) {

    $company_name = $_POST["company_name"];
    $owner_name = $_POST["owner_name"];
    $company_r_no = $_POST["company_r_no"];
    $address = $_POST["address"];
    $name = $_POST["med_name"];
    $contact = $_POST["contact"];
    $j_date = $_POST["j_date"];


    if (empty($company_name) || empty($owner_name) || empty($company_r_no) || empty($address) || empty($name) || empty($contact) || empty($j_date)) {
        return;
    }
    $sql = "INSERT INTO supllier  VALUES ('$company_name','$company_r_no','$owner_name','$address','$name','$contact','$j_date')";

    if (($__conn->query($sql) === TRUE)) {
        echo '<script>alert("Supplier added Successfully")</script>';
    } else {
        echo $sql;
        echo $__conn->error;
    }
}

if (array_key_exists("del_sup", $_POST)) {
    $company_r_no = $_POST["company_r_no"];
    $sql = "SELECT * FROM supllier WHERE company_r_no='$company_r_no'";

    $result = $__conn->query($sql);
    if ($result->num_rows == 0) {
        echo '<script>alert("Entered Med_ID Does not Exist")</script>';
    } else {
        $query = "DELETE FROM supllier WHERE company_r_no = $company_r_no ";
        if (($__conn->query($query) === TRUE)) {
            echo '<script>alert("Supplier Deletion Successfully")</script>';
        } else {
            echo $query;
            echo $__conn->error;
        }
    }
}


if (array_key_exists("email_send", $_POST)) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $to = "sasindu2019@gmail.com";
    $subject = "New email from $name";
    $headers = "From: $email";
    mail($to, $subject, $message, $headers);
}

//add user
// if(array_key_exists("Register_user",$_POST)){ 

//     $full_name = $_POST["full_name"];
//     $dob = $_POST["dob"];
//     $nic = $_POST["nic"];
//     $email= $_POST["email"];
//     $address = $_POST["address"];             
//     $pos = $_POST["pos"];
//     $telno = $_POST["telno"];


//     $stmt = $conn->prepare($select);
//     $stmt->bind_param("s", $nic);
//     $stmt->execute();
//     $stmt->bind_result($nic);
//     $stmt->store_result();
//     $rnum = $stmt->num_rows;

//     if (empty($full_name) || empty($dob) || empty($nic) || empty($email) || empty($address) || empty($pos) || empty($telno)) {
//         return;
//     }
//     $sql= "INSERT INTO users VALUES ($full_name,$dob,$nic,$email,$address,$pos,$telno)";


//     if (($__conn->query($sql) === TRUE)) {
//         $stmt->close();
//                 $stmt = $conn->prepare($sql);
//                 $stmt->bind_param("sssssss", $full_name,$dob,$nic,$email,$address,$pos,$telno);
//                 $stmt->execute();
//                 echo "Account Created Successfully";
//     } else {
//         echo "Failed to create account";
//     }
// }  





// //add_suplier

// if(array_key_exists("add_supplier",$_POST)){ 

//     $company_name = $_POST["company_name"];
//     $owner_name=$_POST["owner_name"];
//     $company_r_no = $_POST["company_r_no"];
//     $address = $_POST["address"];
//     $type = $_POST["type"];
//     $contact = $_POST["contact"];              
//     $j_date = $_POST["j_date"];



//     $stmt = $conn->prepare($select);
//     $stmt->bind_param("s", $company_r_no);
//     $stmt->execute();
//     $stmt->bind_result($company_r_no);
//     $stmt->store_result();
//     $rnum = $stmt->num_rows;

//     if (empty($company_name) || empty($owner_name)|| empty($company_r_no ) || empty($address) || empty($type) || empty($contact) || empty($j_date)) {
//         return;
//     }
//     $sql= "INSERT Into supllier  VALUES ($company_name,$owner_name,$company_r_no,$address,$type,$contact,$j_date)";

//     if (($__conn->query($sql) === TRUE)) {
//         $stmt->close();
//                 $stmt = $conn->prepare($sql);
//                 $stmt->bind_param("sssssss",$company_name,$owner_name,$company_r_no,$address,$type,$contact,$j_date);
//                 $stmt->execute();
//                 echo "Supplier added Successfully";
//     } else {
//         echo "Supplier added Failed";
//     }
// }  




//add medicine 

/*if(array_key_exists("add_medicine",$_POST)){ 
    
    $med_id = $_POST["med_id"];
    $med_name=$_POST["med_name"];
    $med_type = $_POST["med_type"];
    $store_con = $_POST["store_con"];
    $amount = $_POST["amount"];
    $st_loc = $_POST["st_loc"];              
    $m_date = $_POST["m_date"];
    $x_date = $_POST["x_date"];
    $f_name = $_POST["f_name"];              
    $tel_no = $_POST["tel_no"];

    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $med_id);
    $stmt->execute();
    $stmt->bind_result($med_id);
    $stmt->store_result();
    $rnum = $stmt->num_rows;

    if (empty($med_id) || empty( $med_name)|| empty($med_type ) || empty( $store_con) || empty($amount) || empty($st_loc) || empty( $m_date) || empty($x_date) || empty($f_name) || empty( $tel_no)) {
        return;
    }
    $sql= "INSERT Into location  VALUES ($med_id,$med_name,$med_type,$store_con,$amount,$st_loc,$m_date,$x_date,$f_name,$tel_no)";
   
    if (($__conn->query($sql) === TRUE)) {
        $stmt->close();
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("issiisssss",$med_id,$med_name,$med_type,$store_con,$amount,$st_loc,$m_date,$x_date,$f_name,$tel_no);
                $stmt->execute();
                echo "Medicine Added Successfully";
    } else {
        echo "Medicine Added Failed";
    }
} 



if (array_key_exists("del", $_POST)) {
    $med_id = $_POST["med_id"];                                     //check entered medid
    $sql = "SELECT * FROM location WHERE med_id='$med_id'";
    $result = $__conn->query($sql);
    if ($result->num_rows == 0) {
        echo '<script>alert("Entered Med_ID Does not Exist")</script>';
    } else {                                                                 //alert if it not
        $query = "DELETE FROM location WHERE med_id = $med_id ";
        if (($__conn->query($query) === TRUE)) {
            echo '<script>alert("Medicine Deletion Successfully")</script>';
        } else {
            echo $query;
            echo $__conn->error;
        }
    }
}


//delete supplier

/*
	$connection = mysqli_connect("localhost", "root", "");
	$db = mysqli_select_db($connection, 'pims');

	if (isset($_POST["del_sup"])) {
		$company_r_no = $_POST["company_r_no"];
		$sql = "SELECT * FROM supllier WHERE company_r_no='$company_r_no'";

		$result = $__conn->query($sql);
		if ($result->num_rows == 0) {
			echo '<script>alert("Entered Med_ID Does not Exist")</script>';
		} else {
			$query = "DELETE FROM supllier WHERE company_r_no = $company_r_no ";
			$query_run = mysqli_query($connection, $query);
		}
		if ($query_run) {
			echo '<script>alert("Supplier Deletion Successfully")</script>';
		} else {

			echo '<script>("Supplier Deletion Failed")</script>';
		}
	}

*/
