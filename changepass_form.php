<?php include_once 'includes/header.php'?>
<?php include_once 'includes/nav.php'?>
<?php if(!isset($_SESSION['loggedin'])){
	header('location:login.php');
} ?>
<div class="container">
                <div class="signup-content">
                    <div class="update-form">
                        <h3 class="form-title">Change Password</h3>
                        
						<?php
								
								if(isset($_GET['msg'])){
									$msg = $_GET['msg'];
									?>
								
						<p class="alert alert-warning"><i class="fas fa-exclamation-triangle"></i><?php echo $msg; ?></p>
							
						<?php } ?>
                        <form class="register-form" id="register-form" action="changepass.php" method="POST">
							  <div class="form-group">
								<label for="inputAddress2"><b>Current password</b></label>
								<input type="password" name="cPass" class="form-control" id="inputAddress2" >
							  </div>
							  <div class="form-group">
								<label for="inputAddress2"><b>New password</b></label>
								<input type="password" name="newPass" class="form-control" id="inputAddress2">
							  </div>
							  
                            <div class="form-group form-button text-center">
                                <input type="submit" name="updatebtn" id="signup" class="form-submit" value="Change password"/>
                            </div>
                        </form>
					</div>
					
					
                </div>
</div>
<?php include_once 'includes/footer.php'?>