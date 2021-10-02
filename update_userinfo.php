 <?php include_once 'includes/header.php'?>
<?php include_once 'includes/nav.php'?>
<?php 

 if(!isset($_SESSION['loggedin'])){
	header('location:reg.php');
} 
?>
<?php 

	$activeuserid = $_SESSION['user_id'];

    if(!$_SESSION['loggedin']){
        header("location:reg.php");
    }
?>
<div class="container">
	<div class="registration mx-auto d-block w-100">
		<div class="page-header text-center">
            <h1>Update UserInfo</h1>
            
            
            <?php
			
            if(isset($_GET['msg'])){
                $msg = $_GET['msg'];
                ?>
            
      <p class="alert alert-warning"><i class="fas fa-exclamation-triangle"></i><?php echo $msg; ?></p>
        
      <?php } ?>
                    <?php
                        include_once 'db_connection.php';
                        $sql = "SELECT * FROM user WHERE id='$activeuserid'";
                        $output = $conn->query($sql);
                        foreach($output AS $userinfo){
                                    
                    ?>
		</div>
		
		<form id="member-registration" action="userinfo_update.php" method="post" class="form-validate form-horizontal well" enctype="multipart/form-data">
			<fieldset>
				<legend>User Registration</legend>
				<div class="form-group">
					<label for="exampleInputPassword1">Name *</label>
					<input type="text" class="form-control" value="<?php echo $userinfo['name']?>" name= "nam" id="exampleInputName">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Username *</label>
					<input type="text" class="form-control" value="<?php echo $userinfo['u_name']?>" name= "unam" id="exampleInputUsername">
				</div>
			
				
				<div class="form-group">
					<label for="exampleInputEmail1">Email Address *</label>
					<input type="email" class="form-control" value="<?php echo $userinfo['email']?>" name= "email" id="exampleInputEmail">
                </div>
                <div class="form-group">
					<label for="exampleInputPassword1">Date of Birth</label>
					<input type="date" class="form-control" value="<?php echo $userinfo['dob']?>" name= "dob" id="exampleInputDateofBirth">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Postal Address</label>
					<input type="text" class="form-control" value="<?php echo $userinfo['postal_address']?>" name= "postaladdress" id="exampleInputPostalAddress">
                </div>
                <div class="form-group">
					<label for="exampleInputEmail1">Postal Code</label>
					<input type="text" class="form-control" value="<?php echo $userinfo['postal_code']?>" name= "postalcode" id="exampleInputPostalCode">
				</div>
				<div class="d-flex justify-content-between align-items-center">
					<div class="form-group d-flex justify-content-start">
						<button type="submit" class="btn btn-primary">Update</button>
					</div>
					<div class="form-check form-group d-flex justify-content-end">
						
					</div>
				</div>
            </fieldset>
                <?php } ?>
		</form>
	</div>
</div>
<?php include_once 'includes/footer.php'?>