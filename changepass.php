<?php 

session_start();

$cPass     	= $_POST['cPass'];
$newPass  	= $_POST['newPass'];
$uid      = $_SESSION['user_id'];
$hpass=md5($cPass);
$hnpass=md5($newPass);

if($cPass == ''){
			$_SESSION['msg']= 'Insert your current password.<br>';
			header('location:changepass_form.php');
			exit;
		}
if($newPass == ''){
			$_SESSION['msg']= 'Insert your new password.<br>';
			header('location:changepass_form.php');
			exit;
		}
include_once 'db_connection.php';


$sql = "SELECT * FROM user WHERE password ='$hpass' AND id='$uid'";
$output= $conn->query($sql);

if($output-> num_rows > 0){
	$sql = "UPDATE `user` SET `password`='$hnpass' WHERE id=$uid";
	$conn->query($sql);
	header("location:userinfo.php?msg=Your Password Updated Successfully!");exit;
}else{
	header("location:changepass_form.php?msg=Your Password is Wrong!");exit;
}
header("location:userinfo.php");



?>