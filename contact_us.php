<?php include_once 'includes/header.php'?>
<?php include_once 'includes/nav.php'?>

<div class="container">
	<div class="registration mx-auto d-block w-100">
		<div class="page-header text-center">
            <h1>Contact Us Form</h1>
            <?php
			
            if(isset($_GET['msg'])){
                $msg = $_GET['msg'];
                ?>
            
      <p class="alert alert-warning"><i class="fas fa-exclamation-triangle"></i><?php echo $msg; ?></p>
        
      <?php } ?>
		</div>
		
		<form id="member-registration" action="submit_cform.php" method="post" class="form-validate form-horizontal well" enctype="multipart/form-data">
			<fieldset>
				<legend></legend>
				<div class="form-group">
					<label for="exampleInputName">Name *</label>
					<input type="text" class="form-control" name = "name" id="exampleInputName">
				</div>
				
				<div class="form-group">
					<label for="exampleInputEmail1">Email Address *</label>
					<input type="email" class="form-control" name = "email" id="exampleInputEmail">
        </div>
               
				<div class="form-group">
					<label for="exampleInputQuestion">Question</label>
					<textarea  type="text" class="form-control" rows="3" name = "question" id="exampleInputPostalAddress"></textarea>
        </div>
				<div class="d-flex justify-content-between align-items-center">
					<div class="form-group d-flex justify-content-start">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
					
				</div>
			</fieldset>
		</form>
  </div>

  <div class="dropdown-divider"></div>

  <div class="heading"><h1>FAQ</h1></div>

  <div class="dropdown-divider"></div>
  
  <div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0"> 
        <button class="btn btn-link " data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        <i class="fas fa-plus mr-1"></i> What is air pollution?
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
        Air pollution is the presence of substances in the atmosphere that are harmful to the health of humans and other living beings, or cause damage to the climate or to materials.
      </div>
    </div>
  </div>
  <br>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0" >
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        <i class="fas fa-plus mr-1"></i>What are the main causes of air pollution?
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
        The burning of fossil fuels, Emissions from factories and industries, Agriculture and allied activities, Household air pollution, Mining operations etc. are the main causes of air pollution.
      </div>
    </div>
  </div>
  <br>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        <i class="fas fa-plus mr-1"></i>What are different types of air pollutants?
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
        There are different types of air pollutants, such as gases (such as ammonia, carbon monoxide, sulfur dioxide, nitrous oxides, methane and chlorofluorocarbons), particulates (both organic and inorganic), and biological molecules.
      </div>
    </div>
  </div>
  
  <br>

  <div class="card">
    <div class="card-header" id="headingFour">
      <h5 class="mb-0">
        <button class="btn btn-link " data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
        <i class="fas fa-plus mr-1"></i>What are the effects of air pollution on human life?
        </button>
      </h5>
    </div>

    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
      <div class="card-body">
      Air pollution is considered as the major environmental risk factor in the incidence and progression of some diseases such as asthma, lung cancer, ventricular hypertrophy, 
      Alzheimer's and Parkinson's diseases, psychological complications, autism, retinopathy, fetal growth, and low birth weight.
      </div>
    </div>
  </div>
  <br>
  <div class="card">
    <div class="card-header" id="headingFive">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
        <i class="fas fa-plus mr-1"></i>What are the effects of air pollution on the environment?
        </button>
      </h5>
    </div>
    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
      <div class="card-body">
      Air pollution can have serious costs, penalties and consequences for the health of human beings and also ruthlessly distresses the natural bio-network and ecosystems. 
      The main consequences of air pollution are global warming, acid rain, smog, ozone depletion etc.
      </div>
    </div>
  </div>
  <br>

 
   
</div>
</div>
   
</div>
<?php include_once 'includes/footer.php'?>