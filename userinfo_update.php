<?php 
session_start();
if(!isset($_SESSION['loggedin'])){
	header('location:reg.php');
} 

$activeuserid = $_SESSION['user_id'];

    if(!$_SESSION['loggedin']){
        header("location:reg.php");
    }

$nam = $_POST['nam'];
$unam = $_POST['unam'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$paddress = $_POST['postaladdress'];
$pcode = $_POST['postalcode'];


include_once 'db_connection.php';
$sql = "UPDATE `user` SET `name`='$nam',`u_name`='$unam',`email`='$email',`dob`='$dob',`postal_address`='$paddress',`postal_code`='$pcode' WHERE id='$activeuserid'";
$conn->query($sql);
header('location:userinfo.php?msg=Updated Successfully');exit;


?>
