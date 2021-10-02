<?php include_once 'includes/header.php'?>
<?php include_once 'includes/nav.php'?>

<div class = "container reg_form">
	<div class = "row reg_form_row">
		<div class = "col-md-6 col-sm-6 col-lg-6 photo_section">
		<img src="img/login.jpg" alt="Log In ">
		</div>
			<div class = "col-md-6 col-sm-6 col-lg-6 reg_section">
			<?php if(!isset($_COOKIE['loginCounter'])){?>
				<form id="member-login" action="signin.php" method="post" class="form-validate form-horizontal well" enctype="multipart/form-data">
					<h1> Log <u>In</u> Form </h1>
					<?php
			
						if(isset($_GET['msg'])){
							$msg = $_GET['msg'];
							?>
						
				<p class="alert alert-warning"><i class="fas fa-exclamation-triangle"></i><?php echo $msg; ?></p>
					
				<?php } ?>
				
				<div class="form-group">
					<label for="exampleInputEmail1">Email address/User Name</label>
					<input type="text" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email/User Name">
					
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" class="form-control" id="exampleInputPassword1" name="pass" placeholder="Password">
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
				</form>
				<?php }else{ 
						echo 'Please try again after 10 minutes';
							} ?>
							
			</div>
		
	</div>
</div>


	

	<?php include_once 'includes/footer.php'?>
	
