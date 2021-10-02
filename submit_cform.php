<?php 

$name = $_POST['name'];
$email = $_POST['email'];
$question = $_POST['question'];


if($name == ''){
    header('location:contact_us.php?msg=Please type Your Name');exit;
}

if($email == ''){
        header('location:contact_us.php?msg=Please type Your Email Address');exit;
    }

if($question == ''){
        header('location:contact_us.php?msg=Please Type Your Question');exit;
    }
    



include_once 'db_connection.php';


$sql = "INSERT INTO contact(name,email,question) 
VALUES ('$name','$email','$question')";

$conn->query($sql);

header('location:contact_us.php?msg=Your Question Submitted Successfully!');exit;




?>