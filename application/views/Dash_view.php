<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php include('templates/header.php');?>
	<div class="container">
	<br>
		<h3 class="dashboard">Admin Dashboard</h3>
	  	<?php $username = $this->session->userdata('username');?>            
	 	 <h2>Hello &nbsp<?php echo $username;?>..!</h2>
	 	 <hr>
			<div class="row">
	             <div class ="col-md-6">
	                <a href="<?php echo base_url()?>dashboard/addcollege"><input type=button  class="btn btn-primary" value="Add College"></a>
	        	    <a href="<?php echo base_url()?>dashboard/addCoadmin"><input type=button  class="btn btn-primary" value="Add Co-Admin"></a>
	                <a href="<?php echo base_url()?>dashboard/addstudent"><input type=button  class="btn btn-primary" value="Add Student"></a>
	       	      </div>
	      </div>
	      <br>
	         
	         <div class="row">
	            <div class ="col-lg-12">
	               <table class="table table-hover">
	                  <thead>
	                  <tr>
	                                      <td scope ="col">id</td>
	                  	                  <td scope ="col">College Name</td>
	                                      <td scope ="col">Username</td>
	                                      <td scope ="col">Email</td>
	                                      <td scope ="col">role</td>
	                  	                  <td scope ="col">gender</td>
	                  	                  <td scope ="col">branch</td>
	                  	                  <td scope ="col">action</td>
	             </tr>
	                   </thead>
	                   		<tbody>
	                   		<?php if(count($users)):?>
	                   		<?php foreach( $users as $user):?>
	                   			<tr class="table-active">
	                   	                   <td><?php echo $user->college_id;?></td>
	                   	                   <td><?php echo $user->college;?></td>
	                   	                   <td><?php echo $user->username;?></td>
	                   	                   <td> <?php echo $user->email;?></td>
	                   	                   <td> <?php echo $user->rolename;?></td>
	                   	                   <td> <?php echo $user->gender;?></td>
	                   	                   <td> <?php echo $user->branch;?></td>
	                   	                   <td><a href="<?php echo base_url()?>dashboard/studentdash/<?php echo $user->college_id ?>"><input type=button  class="btn btn-primary btn-block" value="view students" ></a>
	                   	                   </td>
	                   	                   
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
