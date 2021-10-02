<?php
    $host="localhost";
    $user="root";
    $pass="";
    $database="airpollution";

    $con = new mysqli($host,$user,$pass);

    $sql = "CREATE DATABASE $database";
    $con->query($sql);

    $conn = mysqli_connect($host,$user,$pass,$database);

    $sql = "CREATE TABLE `user` (
        `id` int(30) NOT NULL,
        `name` varchar(50) NOT NULL,
        `u_name` varchar(50) NOT NULL,
        `password` varchar(60) NOT NULL,
        `email` varchar(50) NOT NULL,
        `dob` date NOT NULL,
        `postal_address` varchar(70) NOT NULL,
        `postal_code` varchar(10) NOT NULL
      )";

if($conn->query($sql)){
	echo 'Table User created successfully<br>';
}
   

    $sql = "CREATE TABLE `contact` (
        `id` int(10) NOT NULL,
        `name` varchar(50) NOT NULL,
        `email` varchar(50) NOT NULL,
        `question` varchar(90) NOT NULL
      )";

if($conn->query($sql)){
	echo 'Table Contact created successfully<br>';
}
    

    
?> 