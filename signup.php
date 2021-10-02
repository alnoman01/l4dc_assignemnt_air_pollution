<?php 

$name = $_POST['name'];
$u_name = $_POST['uname'];
$password = $_POST['pass'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$p_address = $_POST['postal_address'];
$p_code = $_POST['postal_code'];
$hpass=md5($password);

if($name == ''){
    header('location:reg.php?msg=Please type Your Name');exit;
}

if($u_name == ''){
        header('location:reg.php?msg=Please type Your User Name');exit;
    }

if($password == ''){
        header('location:reg.php?msg=Please Enter Password');exit;
    }
    
if($email == ''){
        
        header('location:reg.php?msg=Please type Email');exit;
    }
if($dob == ''){
        header('location:reg.php?msg=Please Enter Your Date Of Birth');exit;
        
    } 
if($p_address == ''){
        header('location:reg.php?msg=Please type Postal Address');exit;
        
    } 
if($p_code == ''){
        header('location:reg.php?msg=Please type Postal Code');exit;
        
    } 


include_once 'db_connection.php';


$sql = "INSERT INTO user(name,u_name,password,email,dob,postal_address,postal_code) 
VALUES ('$name','$u_name','$hpass','$email','$dob','$p_address','$p_code')";

$conn->query($sql);

header('location:login.php?msg=You Registered Successfully');exit;




?>