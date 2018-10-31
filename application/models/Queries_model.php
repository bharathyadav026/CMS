
<?php 
class Queries_model extends CI_Model{
        
                     public function getroles()
                     {
                         $roles = $this->db->get('tbl_role');
                         if($roles->num_rows() > 0)
                           {
                          return $roles->result();
                           }
        
                   }
                      public function registeradmin($data)
                      {
                         return $this->db->insert('tbl_users',$data);
                     }
                  
                     public function checkadmin_register()
                     {
                        $chckadmin = $this->db->where(['role_id' => '1'])
                               ->get('tbl_users');
                         if($chckadmin->num_rows() > 0)
                         {
                             return $chckadmin->num_rows();
                         }
                         
                     }
    
                     public function admin_exit($email,$password){
                         
                         $chckadmin = $this->db->where(['email' => $email,'password' => $password])
                                                 ->get('tbl_users');
                         echo $this->db->last_query();
                         return $chckadmin->row();
                         
                     }
                     
                     public function addcollege($data){
                         return $this->db->insert('tbl_college',$data);
                         
                     }
                     
                     
                     public function getcolleges()
                     {
                         $colleges = $this->db->get('tbl_college');
                         if($colleges->num_rows() > 0)
                         {
                             return $colleges->result();
                         }
                     
                     }
                     public function register_coadmin($data)
                     {
                         return $this->db->insert('tbl_users',$data);
                     }

                     public function viewcolleges(){
                         $this->db->select("*");
                         $this->db->from('tbl_college');
                         $this->db->join('tbl_users','tbl_users.college_id = tbl_college.college_id');
                         $this->db->join('tbl_role','tbl_role.role_id =tbl_users.role_id');
                         $user = $this->db->get();
                         return $user->result();
                     }
                     public function register_student($data)
                     {
                         return $this->db->insert('tbl_students',$data);
                     }
                     
                     public function viewstudent($college_id){  
                         $this->db->select('*');
                         $this->db->from('tbl_students');
                         $this->db->join('tbl_college', 'tbl_college.college_id = tbl_students.college_id');
                        $this->db->where('tbl_students.college_id' , $college_id);
                         $students =$this->db->get();
                         
                         
                         return $students->result();
                     }
                  /*   public function editstudent($id){
                         $this->db->select(['tbl_students.studentname','tbl_students.student_id','tbl_students.email','tbl_students.course',
                             'tbl_students.gender','tbl_college.college,tbl_students.gender']);
                         $this->db->from('tbl_students');
                         $this->db->join('tbl_college', 'tbl_college.college_id = tbl_students.college_id');
                         $this->db->where('student_id' , $id);
                         
                         $student =$this->db->get();
                         
                         
                         
                         
                         return $student->row();
                         
                     }*/
                     
                     
                     public function editstudent($id){
                         $this->db->select("*");
                         $this->db->from('tbl_students s');
                         $this->db->join('tbl_college c', 'c.college_id = s.college_id');
                         $this->db->where('s.student_id' , $id);
                         
                         $student =$this->db->get();
                         
                         return $student->row();
                         
                     }
                     
                     
                     
                     
                     public function update_student($data,$id)
                     {
                         $result=$this->db->where('student_id',$id)
                         ->update('tbl_students',$data);
                         echo $this->db->last_query();
                         return $result;
                     }
                     public function delterecord($id) {
                         return $this->db->delete('tbl_students',['student_id'=>$id]);
                         
                     }
}
?>