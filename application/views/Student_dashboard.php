<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php include('templates/header.php');?>
	<div class="container">
	<br>
		<h3 class="dashboard">Student Dashboard</h3>
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
	                                      
	                  	                  <td scope ="col">Student Name</td>
	                                      <td scope ="col">College</td>
	                                      <td scope ="col">Email</td>
	                  	                  <td scope ="col"> Gender</td>
	                  	                  <td scope ="col">Course</td>
	                  	                  <td scope ="col">Edit</td>
	                  	                  <td scope ="col">Delete</td>
	                  	                  
	             </tr>
	                   </thead>
	                   		<tbody>
	                   		<?php if(count($students)):?>
	                   		<?php foreach ($students as $student):?>
	                   		<tr class="table-active">
	                   			                                      
	                  	                  <td scope ="col"><?php echo $student->studentname;?></td>
	                                      <td scope ="col"><?php echo $student->college;?></td>
	                                      <td scope ="col"><?php echo $student->email;?></td>
	                                      <td scope ="col"><?php echo $student->gender;?></td>
	                                      <td scope ="col"><?php echo $student->course;?></td>
	                   	                  <td><a href="<?php echo base_url()?>dashboard/editstudent/<?php echo $student->student_id ?>"><input type=button  class="btn btn-success" value="Edit" ></a>
	                   	                  <td><a href="<?php echo base_url()?>dashboard/delete/<?php echo $student->student_id ?>"><input type=button  class="btn btn-danger" value="Delete" ></a>
	                  	                  
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
