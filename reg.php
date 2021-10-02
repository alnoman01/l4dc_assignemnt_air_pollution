<?php include_once 'includes/header.php'?>
<?php include_once 'includes/nav.php'?>
<div class="container">
	<div class="registration mx-auto d-block w-100">
		<div class="page-header text-center">
            <h1>Sign up</h1>
            <?php
			
            if(isset($_GET['msg'])){
                $msg = $_GET['msg'];
                ?>
            
      <p class="alert alert-warning"><i class="fas fa-exclamation-triangle"></i><?php echo $msg; ?></p>
        
      <?php } ?>
		</div>
		
		<form id="member-registration" action="signup.php" method="post" class="form-validate form-horizontal well" enctype="multipart/form-data">
			<fieldset>
				<legend>User Registration</legend>
				<div class="form-group">
					<label for="exampleInputPassword1">Name *</label>
					<input type="text" class="form-control" name = "name" id="exampleInputName">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Username *</label>
					<input type="text" class="form-control" name = "uname" id="exampleInputUsername">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Password *</label>
					<input type="password" class="form-control" name = "pass" id="exampleInputPassword">
				</div>
				
				<div class="form-group">
					<label for="exampleInputEmail1">Email Address *</label>
					<input type="email" class="form-control" name = "email" id="exampleInputEmail">
                </div>
                <div class="form-group">
					<label for="exampleInputPassword1">Date of Birth</label>
					<input type="date" class="form-control" name = "dob" id="exampleInputDateofBirth">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Postal Address</label>
					<input type="text" class="form-control" name = "postal_address" id="exampleInputPostalAddress">
                </div>
                <div class="form-group">
					<label for="exampleInputEmail1">Postal Code</label>
					<input type="text" class="form-control" name = "postal_code" id="exampleInputPostalCode">
				</div>
				<div class="d-flex justify-content-between align-items-center">
					<div class="form-group d-flex justify-content-start">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
					<div class="form-check form-group d-flex justify-content-end">
						<a href="login.php?msg=Registration Successful!">Sign in instead</a>
					</div>
				</div>
			</fieldset>
		</form>
	</div>
</div>
<?php include_once 'includes/footer.php'?>
 
