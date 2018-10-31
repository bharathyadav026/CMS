<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php include 'templates/header.php';?>


<div class="container"><br>
	
	<?php echo form_open('Dashboard/Createcollege',['class'=>'form-horizontal']);?>
	
	
		<h2>ADD COLLEGE HERE !</h2><hr>
		<?php  if($error = $this->session->flashdata('message')):?>
		<div class="row">
		<div class ="col-md-8">
			<div class="alert alert-dismissble alert-success">
			<?php echo $error;?>
			</div>
			</div>
			</div>
		<?php endif;?>
		
	 	   <div class="row">
				<div class="col-md-6">
                   <div class="form-group">
                      
                        <div class="col-md-6">
                           <?php echo form_input(['name'=>'college','class'=>'form-control','placeholder'=>'Enter College name','value' => set_value('college')]);?>
                         </div>
                    </div>
               	</div>
               	
               	<div class="col-md-6">
               	<?php echo form_error('college','<div class="text-danger">','</div>');?>
               	</div>
             </div>

					<div class="row">
				<div class="col-md-6">
                   <div class="form-group">
                      
                        <div class="col-md-6">
                           <?php echo form_input(['name'=>'branch','class'=>'form-control','placeholder'=>'Enter Branch Name','value' => set_value('branch')]);?>
                         </div>
                    </div>
               	</div>
               	
               	<div class="col-md-6">
               	<?php echo form_error('branch','<div class="text-danger">','</div>');?>
               	</div>
             </div>
               <div class="col-lg-10 col-lg-offset-2">
              <button type="submit" class="btn btn-primary">Add</button>
              <a href="<?php echo base_url()?>dashboard/dash"><input type=button  class="btn btn-default" value="Back" ></a>
              
              </div>
             
             


<?php echo form_close();?>
</div>




<?php include 'templates/footer.php';?>

































