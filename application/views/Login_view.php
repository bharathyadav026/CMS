<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php include('templates/header.php');?>

<div class="login-box">
	
	<?php echo form_open('Welcome/adminSignin',['class'=>'form-horizontal']);?>
	
	
		<h2 class="head">Login!</h2>
		<?php  if($error = $this->session->flashdata('message')):?>
		
			<div class="alert alert-dismissble alert-danger">
			<?php echo $error;?>
			</div>
			
		<?php endif;?>
		
	 	   
                      
                       
                           <?php echo form_input(['name'=>'email','class'=>'form-control','placeholder'=>'Enter email','value' => set_value('email')]);?>
                           <?php echo form_error('email','<div class="text-danger">','</div>');?><br>
                           
                      
                 

				
                      
                       
                           <?php echo form_password(['name'=>'password','class'=>'form-control','placeholder'=>'Enter password','value' => set_value('password')]);?>
                        	<?php echo form_error('password','<div class="text-danger">','</div>');?><br>
                        
                        
                 
               
               <a href="<?php echo base_url()?>welcome/index"><input type=button  class="btn btn-default" value="Back" ></a>
              <input type="submit" class="btn btn-primary" value="submit">
              
             
             


<?php echo form_close();?>
</div>
<?php include('templates/footer.php');?>