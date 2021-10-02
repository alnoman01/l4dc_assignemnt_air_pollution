<?php include_once 'includes/header.php'?>
<?php include_once 'includes/nav.php'?>

<?php 
 if(!isset($_SESSION['loggedin'])){
	header('location:reg.php');
} 
?>
<?php 



    if(!$_SESSION['loggedin']){
        header("location:reg.php");
    }
?>


<div class="row">
    
    <div class="col-sm-2">

    </div>
        <div class="col-sm-8">
                <div class="card text-center">
                    <div class="card-header">
                    <?php
                        include_once 'db_connection.php';
                        $activeuserid = $_SESSION['user_id'];
                        
                        $sql = "SELECT * FROM user WHERE id='$activeuserid'";
                       
                        $output = $conn->query($sql);
                        foreach($output AS $userinfo){
                                    
                    ?>
                        <h5 class="card-title">User Info</h5>
                        <?php
			
						if(isset($_GET['msg'])){
							$msg = $_GET['msg'];
							?>
						
				<p class="alert alert-warning"><i class="fas fa-exclamation-triangle"></i><?php echo $msg; ?></p>
					
				<?php } ?>
                      
                    </div>
                  
                    <div class="card-body">
                        <p class="card-text">Name: <?php echo $userinfo['name'] ?> </p>
                        <p class="card-text">User Name: <?php echo $userinfo['u_name'] ?></p>
                        <p class="card-text">Email: <?php echo $userinfo['email'] ?></p>
                        <p class="card-text">Date of Birth: <?php echo $userinfo['dob'] ?> </p>
                        <p class="card-text">Postal Address: <?php echo $userinfo['postal_address'] ?></p>
                        <p class="card-text">Postal Code: <?php echo $userinfo['postal_code'] ?> </p>
                        <a href="update_userinfo.php" class="btn btn-primary">Update User Info</a>
                        <a href="changepass_form.php" class="btn btn-primary">Change Password</a>
                    </div>
                        <?php } ?>
                </div>
        </div>
    <div class="col-sm-2">

    </div>

</div>
<?php include_once 'includes/footer.php'?>