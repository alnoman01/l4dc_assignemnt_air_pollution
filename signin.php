<?php
	include_once 'db_connection.php';
	session_start();
	if($_POST){
		$email=$_POST['email'];
		$password=$_POST['pass'];
		$hpass=md5($password);

		if($email == ''){
			header('location:login.php?msg=Your Email/User Name Cannot Be Empty!');exit;
		}
		
		if($password == ''){
				header('location:login.php?msg=Your Password Cannot Be Empty!');exit;
			}

		if(!isset($_SESSION['count'])){
			$_SESSION['count'] = 0;
		}
	

		
	
	$sql = "SELECT * FROM user WHERE email = '$email' AND  password= '$hpass' OR u_name = '$email' AND password= '$hpass'";
	
	
	
	$result = $conn->query($sql);
	
	
		if($result->num_rows > 0){
			
			foreach($result AS $row){
				
				$_SESSION['user_id'] = $row['id'];
			}			
			$_SESSION['loggedin'] = true;
			unset($_SESSION['count']);
				
			header('location:userinfo.php?msg=You have logged in sucessfully!');
		}else{
			$_SESSION['count']++;
			if($_SESSION['count'] >= 3){
				setcookie('loginCounter', true, time() + (60*10));
				$_SESSION['count'] = 0;
			}
			
			header('location:login.php?msg=Your Email/Password is Wrong!');exit;
		}	
	}






?>