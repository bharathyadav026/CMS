<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php 
class Dashboard extends CI_Controller{
    
    public function _construct(){
        parent::_construct();
        if(!$this->session->userdata("user_id"))
        {
            return redirect ("welcome/login");
        }
    }
    
      Public function dash(){
        if(!$this->session->userdata("user_id"))
        {
            return redirect("welcome/login");
        }
        $this->load->model('Queries_model');
        $users = $this->Queries_model->viewcolleges();
            $this->load->view('Dash_view',['users' => $users]);
    }
    public function Addcollege(){
        
      $this->load->view('Addcollege_view');
    }
    
    public function Createcollege(){
        $this->form_validation->set_rules('college','College','required');
        $this->form_validation->set_rules('branch','Branch','required');
        $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
         
        if($this->form_validation->run())
        {
            $data = $this->input->post();
                $this->load->model('Queries_model');
                    if($this->Queries_model->addcollege($data))
                    {
                          $this->session->set_flashdata('message','College successfully Added');
                            return redirect('dashboard/Addcollege');     
            }else
            {
                $this->session->set_flashdata('message','College not successfully Added');
                return redirect('dashboard/Addcollege'); 
                
            }
                
            
        }else 
        {
            $this->addcollege();
        }
        
    }
    
    public function addCoadmin(){
        
        $this->load->model('Queries_model');
        $roles = $this->Queries_model->getroles();
        $colleges = $this->Queries_model->getcolleges();
        $this->load->view('Addcoadmin',['roles' => $roles,'colleges' => $colleges]);	    
    }
    
    public function createCoadmin(){
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('college_id','College_id','required');
         $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('gender','Gender','required');
        $this->form_validation->set_rules('role_id','Role','required');
        $this->form_validation->set_rules('password','Password','required');
        $this->form_validation->set_rules('cpassword','Cpassword','required');
        $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
        
        if($this->form_validation->run())
        {
            $data = $this->input->post();
            
            $this->load->model('Queries_model');
                 if($this->Queries_model->register_coadmin($data))
                    {
                       $this->session->set_flashdata('message','CO-admin registered successfully');
                       return redirect ("dashboard/Addcoadmin");
                     }
                 else
                 {
                     $this->session->set_flashdata('message','CO-admin registered successfully');
                     return redirect ("dashboard/Addcoadmin");
                 }
        }
        else
        {
            $this->session->set_flashdata('message','Admin can register only once');
            
            $this->addCoadmin();
        }
        
    }
    
    
    
    
    
    public function addstudent(){
        
        
        $this->load->model('Queries_model');
        $colleges = $this->Queries_model->getcolleges();
        $this->load->view('Addstudent_view',['colleges' => $colleges]);
    }
    
    public function createstudent(){
        $this->form_validation->set_rules('studentname','Studentname','required');
        $this->form_validation->set_rules('college_id','College_id','required');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('gender','Gender','required');
        $this->form_validation->set_rules('course','Course','required');
        $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
         if($this->form_validation->run())
        {
            $data = $this->input->post();
            
            $this->load->model('Queries_model');
            if($this->Queries_model->register_student($data))
            {
                $this->session->set_flashdata('message','student registered successfully');
                return redirect ("dashboard/Addstudent");
            }
            else
            {
                $this->session->set_flashdata('message','student not registered successfully');
                return redirect ("dashboard/Addstudent");
            }
        }else {
            $this->Addstudent();
        }
        
        
    }
    public function studentdash($college_id)
    {
        
        $this->load->model('Queries_model');
       $students = $this->Queries_model->viewstudent($college_id); 
       $this->load->view('Student_dashboard',['students' => $students]);
       
        
    }
    public function editstudent($id){
        $this->load->model('Queries_model');
        $studentdata = $this->Queries_model->editstudent($id);
        
        $colleges = $this->Queries_model->getcolleges();
       
      
        $this->load->view('Editstudent_view',['colleges' => $colleges,'studentdata' => $studentdata]);
       
        
        
    }

    public function updatestudent($id){
        $this->form_validation->set_rules('studentname','Studentname','required');
        $this->form_validation->set_rules('college_id','college_id','required');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('gender','Gender','required');
        $this->form_validation->set_rules('course','Course','required');
        $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
        if($this->form_validation->run())
        {
           
            $data = $this->input->post();
           
            $this->load->model('Queries_model');
            if($this->Queries_model->update_student($data,$id))
            {
                $this->session->set_flashdata('message','students record updated successfully');
                 redirect ("dashboard/studentdash/".$id);
                 die;
            }
            else
            {
                $this->session->set_flashdata('message','students record not updated successfully');
                 redirect ("dashboard/editstudent/".$id);
                 die;
            }
        }else {
            $this->editstudent();
        }
        
        
        
    }
    
    public function delete($id){
        $this->load->model('queries_model');
        if($this->queries_model->delterecord($id))
        {
            $this->session->set_flashdata('response','record delted successfully');
            return redirect('dashboard/dash');
        }
        
        else
        {
            $this->session->set_flashdata('response','record not deleted successfully');
        }
        
        
    }
    public function coadmins(){
        $this->load->model('Queries_model');
        $coadmins = $this->Queries_model->viewcolleges();
        $this->load->view('coadmins',['coadmins' => $coadmins]);
        
    }

















}



















?>