<?php
class users extends CI_Controller{
    
    public function dashboard(){
       $this->load->model('Queries_model');
       $college_id = $this->session->userdata('college_id');
       $students = $this->Queries_model->viewstudent($college_id);
        $this->load->view('users',['students' => $students]);
    }
}