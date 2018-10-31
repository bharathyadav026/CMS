<?php
?>
<html>
    <head>
    	<title>login form</title>
    	<link rel="shortcut icon" href="<?php echo base_url();?>login.jpg"/>
    	<link rel="stylesheet" href="<?php echo base_url();?>/assests/css/style1.css"/>
    	<link rel="stylesheet" href="<?php echo base_url();?>/assests/css/style.css"/>
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    	
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    	
	</head>
<body >
	 
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<div class = "navbar-header col-lg-10">
  				<a class="navbar-brand" href="#">COLLEGE MANAGEMENT SYSTEM</a>
  			</div> 
  		
  		
  		<div class = "col-lg-2">
  		   <div class="dropdown show">
  				<a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   					 Settings
  				</a>

  							<ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
  							<?php $user_id =$this->session->userdata('user_id');?>
  							<?php if($user_id == '1'):?>
   								<li>	 <a class="dropdown-item" href="<?php echo base_url()?>dashboard/dash">Dashboard</a></li>
   								<li>	 <a class="dropdown-item" href="<?php echo base_url()?>dashboard/coadmins">View co-admins</a></li>
   								<li>	 <a class="dropdown-item" href="<?php echo base_url()?>Welcome/logout">Logout</a></li>
   							<?php else:?>	
   				<li>	 <a class="dropdown-item" href="<?php echo base_url()?>Welcome/logout">Logout</a></li>
   				<?php endif;?>
   								
  							</ul>
             </div>
  		</div>
  			  
 </nav>
			
			