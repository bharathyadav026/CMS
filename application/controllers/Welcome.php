<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		
		$this->load->model('Queries_model');
		$chckadmin = $this->Queries_model->checkadmin_register();
		$this->load->view('Main_view',['chckadmin' => $chckadmin]);
		
	}
	
	public function admin_register()
	{
	   
	    $this->load->model('Queries_model');
	    $roles = $this->Queries_model->getroles();
	    $this->load->view('Register_view',['roles' => $roles]);	    
	}
	public function adminSignup()
	{
	    $this->form_validation->set_rules('username','Username','required');
	    $this->form_validation->set_rules('email','Email','required');
	    $this->form_validation->set_rules('gender','Gender','required');
	    $this->form_validation->set_rules('role_id','Role','required');
	    $this->form_validation->set_rules('password','Password','required');
	    $this->form_validation->set_rules('cpassword','Cpassword','required');
	    $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

        if( $this->form_validation->run() )
        {

            $data = $this->input->post();
           
            $this->load->model('Queries_model');
             
            if($this->Queries_model->registerAdmin($data))
            {
                $this->session->set_flashdata('message','admin registered successfully');
               return redirect ("welcome/index");
                
            } 
            else
            {
                $this->session->set_flashdata('message','admin not registered successfully');
                return redirect ("welcome/admin_register");
            }
            
              }
            else{
         $this->admin_register();
                }
	}
	public function login(){
	    if($this->session->userdata("user_id"))
	        return redirect ("dashboard/dash");
	        
	    $this->load->view('Login_view');
	}
	
	public function adminSignin(){
	    $this->form_validation->set_rules('email','Email','required');
	    $this->form_validation->set_rules('password','Password','required');
	    $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
	    
	    if( $this->form_validation->run() )
	    {
	      $email =$this->input->post('email');
	      $password = $this->input->post('password');
	      
          $this->load->model('Queries_model');
          $userexits = $this->Queries_model->admin_exit($email,$password);
          if($userexits){
                        if($userexits->user_id == '1'){
                   
                       $sessiondata =[
                           'user_id' => $userexits->user_id,
                           'username' =>$userexits->username,
                           'email' => $userexits->email,
                           'role_id' =>$userexits->role_id,
                    ];
                            
                            
                      
              $this->session->set_userdata($sessiondata);
              return redirect("Dashboard/dash");
                        }
          else if($userexits->user_id > 1) {
              $sessiondata =[
                  'user_id' => $userexits->user_id,
                  'username' =>$userexits->username,
                  'email' => $userexits->email,
                  'college_id' => $userexits->college_id,
                  
                  'role_id' =>$userexits->role_id,
              ];
              
              
              
              $this->session->set_userdata($sessiondata);
              return redirect("users/dashboard");
              
              
              
          }
          }
                     else {
                         $this->session->set_flashdata('message','email or password  incorrect');
                         return redirect("welcome/login");
                         
                     }
	    }
	    else{
	        $this->login();
	    }
	    
	    
	}
	
	public function logout()
	{
	    $this->session->unset_userdata("user_id");
	    return redirect ("welcome/login");
	    
	}
	
	
	
}
