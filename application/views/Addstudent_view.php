
<?php include('templates/header.php');?>
	<div class="container-fluid">
	
	
	<?php echo form_open('Dashboard/createStudent',['class'=>'form-horizontal'])?>
	<fieldset>
		<hr>
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
				<div class="col-md-6">
                   <div class="form-group">
                      
                        <div class="col-md-6">
                           <?php echo form_input(['name'=>'studentname','class'=>'form-control','placeholder'=>'Enter studentname','value' => set_value('studentname')]);?>
                         </div>
                    </div>
               	</div>
               	
               	<div class="col-md-6">
               	<?php echo form_error('studentname','<div class="text-danger">','</div>');?>
               	</div>
             </div>
             
                <div class="row">
				<div class="col-md-6">
                   <div class="form-group">
                       <select class="col-md-6" name="college_id">
                       <option value="">select College</option>
                       <?php if(count($colleges)):?>
                       <?php foreach($colleges as $college):?>
                       <option value=<?php echo $college->college_id?>> <?php echo $college->college?> </option>
                       <?php endforeach;?>
                       <?php endif;?>
                       
                       
                       </select>
                    </div>
               	</div>
               	
               	<div class="col-md-6">
               	               	<?php echo form_error('college_id','<div class="text-danger">','</div>');?>
               	
               	</div>
             </div>
             
             <div class="row">
				<div class="col-md-6">
                   <div class="form-group">
                      
                        <div class="col-md-6">
                           <?php echo form_input(['name'=>'email','class'=>'form-control','placeholder'=>'Enter email','value' => set_value('email')]);?>
                         </div>
                    </div>
               	</div>
               	
               	<div class="col-md-6">
               	    <?php echo form_error('email','<div class="text-danger">','</div>');?>
               	
               	</div>
             </div>
             
             <div class="row">
				<div class="col-md-6">
                   <div class="form-group">
                       <select class="col-sm-4" name="gender">
                       <option value="">select gender</option>
                       <option value="male">male</option>
                       <option value="female">female</option>
                      
                       </select>
                    </div>
               	</div>
               	
               	<div class="col-md-6">
               	               	<?php echo form_error('gender','<div class="text-danger">','</div>');?>
               	
               	</div>
             </div>
              
             <div class="row">
				<div class="col-md-6">
                   <div class="form-group">
                      
                        <div class="col-md-6">
                           <?php echo form_input(['name'=>'course','class'=>'form-control','placeholder'=>'Enter Coursename','value' => set_value('course')]);?>
                         </div>
                    </div>
               	</div>
               	
               	<div class="col-md-6">
               	    <?php echo form_error('course','<div class="text-danger">','</div>');?>
               	
               	</div>
             
             
             
             
            
             
            
             	   <div class="col-lg-10 col-lg-offset-2">
              <button type="submit" class="btn btn-primary">submit</button>
              <a href="<?php echo base_url()?>dashboard/dash"><input type=button  class="btn btn-default" value="cancel"></a>
              
              </div>
             </div>
             
            	
</fieldset>
<?php echo form_close();?>
</div>

<?php include('templates/footer.php');?>