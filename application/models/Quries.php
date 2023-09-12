<?php 
class Quries extends CI_Model{
    public function getrole(){
       $role =  $this->db->get('roles');
       return $role->result_array();
    }
    public function getcourse(){
       $course = $this->db->get('courses');
       return $course->result_array();
    }
    public function insertUserData($data){
         return $this->db->insert('users', $data);
    }
    public function checkUserExist($email, $password){
       $check =  $this->db->WHERE(['email'=>$email ,'password'=>$password])->get('users');
       return $check->row_array();
    }   
   public function enrollcourse($data){
     return $this->db->insert('enroll', $data);
   }
   public function addcourses($data){
      return $this->db->insert('courses', $data);
   }
   public function getSingleCourse(){
      $query = $this->db->get('courses');
      return $query->result();        
   }
   public function enrollstudent($id){
      $this->db->select(['u.user_id','c.course_id']);
      $this->db->from('courses as c');
      $this->db->join('users as u', 'c.user_id = u.user_id');
      $this->db->where(['u.user_id'=>$id]);
      $teacher =  $this->db->get('courses');
      return $teacher->row_array();
    }
   public function getCourseData(){
      $this->db->select(['c.course_id', 'c.coursename', 'c.price', 'c.user_id', 'u.username']);
      $this->db->from('courses as c');
      $this->db->join('users as u', 'c.user_id = u.user_id');
      $teacher = $this->db->get();
      return $teacher->result_array();
  }
public function getTeacherCourse($Id) {
   $this->db->select('c.course_id, c.coursename, COUNT(e.student_id) AS student_count');
   $this->db->from('enroll as e');
   $this->db->join('courses as c', 'e.course_id = c.course_id');
   $this->db->where('c.user_id', $Id);
   $this->db->group_by('c.course_id, c.coursename');   
   $result = $this->db->get();
   return $result->result_array();
}
public function getstudentname($course_id){
   $this->db->select('u.username');
   $this->db->from('users as u');
   $this->db->join('enroll as e', 'e.student_id = u.user_id');
   $this->db->where('course_id', $course_id);
   $result =  $this->db->get();
   return $result->result_array();
}
public function gettudentcourse($id){
   $this->db->select('c.coursename');
   $this->db->from('courses as c');
   $this->db->join('enroll as e','e.course_id = c.course_id');
   $this->db->where('e.student_id',$id);
   $result = $this->db->get();
   return $result->result_array();
}


}

?>

