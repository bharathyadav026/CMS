<?php

defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php include('templates/header.php');?>
	<div class="container">
	<br>
		<h3 class="dashboard">Total co-admins</h3>
	  	<?php $username = $this->session->userdata('username');?>            
	 	 <h2>Hello &nbsp<?php echo $username;?>..!</h2>
	 	 <hr>
			<div class="row">
	             <div class ="col-md-6">
	                <a href="<?php echo base_url()?>dashboard/dash"><input type=button  class="btn btn-primary" value="back"></a>
	        	    
	       	      </div>
	      </div>
	      <br>
	      <?php  if($error = $this->session->flashdata('message')):?>
		<div class="row">
		<div class ="col-md-6">
			<div class="alert alert-dismissble alert-danger">
			<?php echo $error;?>
			</div>
			</div>
			</div>
		<?php endif;?>
	         
	         <div class="row">
	            <div class ="col-lg-12">
	               <table class="table table-hover">
	                  <thead>
	                  <tr>
	                                      <td scope ="col">User_id</td>
	                                      
	                  	                  <td scope ="col">UserName</td>
	                                      <td scope ="col">College Name</td>
	                                      <td scope ="col">Email</td>
	                  	                  <td scope ="col"> Gender</td>
	                  	                  
	             </tr>
	                   </thead>
	                   		<tbody>
	                   		<?php if(count($coadmins)):?>
	                   		<?php foreach ($coadmins as $coadmin):?>
	                   		<tr class="table-active">
	                   			                                      
	                  	                  <td scope ="col"><?php echo $coadmin->user_id;?></td>
	                                      <td scope ="col"><?php echo $coadmin->username;?></td>
	                                      <td scope ="col"><?php echo $coadmin->college;?></td>
	                                      
	                                      <td scope ="col"><?php echo $coadmin->email;?></td>
	                                      <td scope ="col"><?php echo $coadmin->gender;?></td>
	                   	                
	                  	                  
	            			 </tr>
	                         <?php endforeach;?>
	                          <?php else:?>
	      	                   <tr> NO RECORD FOUND!</tr>
	      	                   <?php endif;?>
 
	                  </tbody>
	                </table>
			    </div>
			</div>
	
	
	</div>


<?php include('templates/footer.php');?>
