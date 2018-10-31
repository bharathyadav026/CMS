<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php include('templates/header.php');?>
	<div class="container">
		<div class="jumbotron">
			<?php  if($error = $this->session->flashdata('message')):?>
			<div class="alert alert-dismissble alert-success">
			<?php echo $error;?>
			</div>
		<?php endif;?>
			<h2 style="text-align:center;">WELCOME!</h2>
				
				<div class="my-4">
					
					 
					
					   <?php if(!$chckadmin ==0):?>
					
                     	
                     	<?php else:?>
                     		<a href="<?php echo base_url()?>Welcome/admin_register"><input type=button  class="btn btn-primary" value="Admin Register!" ></a>
                     	
                     <?php endif;?>
                      	
                     		<a href="<?php echo base_url()?>Welcome/login"><input type=button  class="btn btn-primary" value="Admin Login!" ></a>
                     		
                     	
                     



					</div>

				</div>
			
			
     </div>

<?php include('templates/footer.php');?>