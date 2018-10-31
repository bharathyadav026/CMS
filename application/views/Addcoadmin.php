
<?php include('templates/header.php');?>
	<div class="container-fluid">
	
	
	<?php echo form_open('Dashboard/createCoadmin',['class'=>'form-horizontal'])?>
	<fieldset>
		<h2>hello Co-Admin!</h2><hr>
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
                           <?php echo form_input(['name'=>'username','class'=>'form-control','placeholder'=>'Enter Username','value' => set_value('username')]);?>
                         </div>
                    </div>
               	</div>
               	
               	<div class="col-md-6">
               	<?php echo form_error('username','<div class="text-danger">','</div>');?>
               	</div>
             </div>
             
                <div class="row">
				<div class="col-md-6">
                   <div class="form-group">
                       <select class="col-md-4" name="college_id">
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
                      <label class="col-sm-2">gender</label>
                       <select class="col-sm-6" name="gender">
                       <option value="">select</option>
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
                      <label class="col-sm-3">Role</label>
                       <select class="col-sm-4" name="role_id">
                       <option value="">select</option>
                       <?php if(count($roles)):?>
                       <?php foreach($roles as $role):?>
                       <option value=<?php echo $role->role_id?>> <?php echo $role->rolename?> </option>
                       <?php endforeach;?>
                       <?php endif;?>
                       
                       
                       </select>
                    </div>
               	</div>
               	
               	<div class="col-md-6">
               	               	<?php echo form_error('role_id','<div class="text-danger">','</div>');?>
               	
               	</div>
             </div>
             
            
             
             <div class="row">
				<div class="col-md-6">
                   <div class="form-group">
                      
                        <div class="col-md-6">
                           <?php echo form_password(['name'=>'password','class'=>'form-control','placeholder'=>'Enter password',]);?>
                         </div>
                    </div>
               	</div>
               	
               	<div class="col-md-6">
               	               	<?php echo form_error('password','<div class="text-danger">','</div>');?>
               	
               	</div>
             </div>
             
             <div class="row">
				<div class="col-md-6">
                   <div class="form-group">
                      
                        <div class="col-md-6">
                           <?php echo form_password(['name'=>'cpassword','class'=>'form-control','placeholder'=>'Enter password'])?>
                         </div>
                    </div>
               	</div>
               	
               	<div class="col-md-6">
               	         <?php echo form_error('cpassword','<div class="text-danger">','</div>');?>
               	
               	</div>
             	   <div class="col-lg-10 col-lg-offset-2">
                            <a href="<?php echo base_url()?>dashboard/dash"><input type=button  class="btn btn-default" value="Back" ></a>
              
              <button type="submit" class="btn btn-primary">submit</button>
              </div>
             </div>
             
            	
</fieldset>
<?php echo form_close();?>
</div>

<?php include('templates/footer.php');?>