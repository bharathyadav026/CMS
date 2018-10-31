<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php include('templates/header.php');?>
	<div class="container">
	<br>
		<h3 class="dashboard">Co-Admin Dashboard</h3>
	  	<?php $username = $this->session->userdata('username');?>            
	 	 <h2>Hello &nbsp<?php echo $username;?>..!</h2>
	 	 <hr>
			
	      <br>
	         
	         <div class="row">
	            <div class ="col-lg-12">
	               <table class="table table-hover">
	                  <thead>
	                  <tr>
	                                      <td scope ="col">id</td>
	                  	                  <td scope ="col">studentName</td>
	                                      <td scope ="col">collegename</td>
	                                      <td scope ="col">Email</td>
	                  	                  <td scope ="col">gender</td>
	                  	                  <td scope ="col">branch</td>
	                  	                  <td scope ="col">action</td>
	             </tr>
	                   </thead>
	                   		<tbody>
	                   		<?php if(count($students)):?>
	                   		<?php foreach( $students as $student):?>
	                   			<tr class="table-active">
	                   	                   <td><?php echo $student->student_id;?></td>
	                   	                   <td><?php echo $student->studentname;?></td>
	                   	                   <td><?php echo $student->college;?></td>
	                   	                   <td> <?php echo $student->email;?></td>
	                   	                   <td> <?php echo $student->gender;?></td>
	                   	                   <td> <?php echo $student->branch;?></td>
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
	                  	                  
	                     
