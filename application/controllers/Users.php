<?php
class Users extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('quries');
        $this->load->library('form_validation');
    }
    public function students()
    {
        if ($this->session->userdata('role_id') > '1') {
            $query = $this->db->get_where('enroll', array('student_id' => $this->session->userdata('id')));
            $count = $query->num_rows();            
            $data = [
                'id' => $this->session->userdata('id'),
                'username' => $this->session->userdata('username'),
                'gender' => $this->session->userdata('gender'),
                'role_id' => $this->session->userdata('role_id'),
                'courses' => $count,
            ];
            $this->load->view('student', ['student' => $data]);
        } else {
            redirect('welcome/userlogin');
        }
    }
    public function teachers()
    {
        if ($this->session->userdata('role_id') == '1') {
            $query = $this->db->get_where('courses', array('user_id' => $this->session->userdata('id')));
            $count = $query->num_rows();
            $data = [
                'id' => $this->session->userdata('id'),
                'username' => $this->session->userdata('username'),
                'email' => $this->session->userdata('email'),
                'gender' => $this->session->userdata('gender'),
                'courses' => $count
            ];
            $this->load->view('teacher', ['teacher' => $data]);
        } else {
            return redirect('welcome/userlogin');
        }
    }
    public function addcourse()
    {
        if ($this->session->userdata('role_id') == '1') {
            $this->load->view('addcourse');
        } else {
            redirect('welcome/userlogin');
        }
    }
    public function enrollTeacherCourse()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('coursename', 'Course Name', 'trim|required');
        $this->form_validation->set_rules('price', 'price', 'trim|required');
        $query = $this->db->get_where('courses', array('user_id' => $this->session->userdata('id')));
        $count = $query->num_rows();
        if ($this->form_validation->run()) {
            $data['coursename'] = $this->input->post('coursename');
            $data['price'] = $this->input->post('price');
            $data['user_id'] = $this->session->userdata('id');
            $this->quries->addcourses($data);
        } else {
            echo validation_errors();
        }
        redirect('users/teachers');
    }
    public function studentcourse()
    {
        if ($this->session->userdata('role_id') > '1') {
            $data['name'] = $this->quries->getSingleCourse();
            $this->load->view('studentCourse', $data);
        } else {
           return redirect('welcome/login');
        }
    }
    public function enrollStudentCourse()
    {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('course_id', 'Course Name', 'trim|required');
    if ($this->form_validation->run()) {        
        if ($_POST) {
            $student_id = $this->session->userdata('id');
            $course_id = $this->input->post('course_id');
            $c_id = $course_id; // Replace with the actual course ID you want to retrieve
            $query =$this->db->get_where('courses', array('course_id' => $c_id))->row_array();            
            $t_id =$query['user_id'];
            // Query the database to get the teacher_id for the selected course
            $query = $this->db->get_where('courses', array('course_id' => $course_id));
            $course = $query->row();            
            if ($course) {
                $data['student_id'] = $student_id;
                $data['course_id'] = $course_id;
                $data['teacher_id'] = $t_id;
                $this->quries->enrollcourse($data);
            } else {
                echo "Course not found.";
            }return redirect('users/students');
        }  
    } else {
        // Form validation failed
        echo validation_errors();
    }
}
    public function coursesDetail(){
        if($this->session->userdata('role_id') > '1'){
            $user['name'] =  $this->quries->getcourseData();
            $this->load->view('coursesdetail', $user);
        }else{
            redirect('welcome/login');
        }
       
    }
    public function viewteachercourse($id){
        if($this->session->userdata('role_id') == '1'){
            $user['names'] =  $this->quries->getTeacherCourse($id);
            // var_dump($user);
            // die();
            $this->load->view('teachercourse', $user);        
        }
    }
    public function viewstudents($course_id){
        if($this->session->userdata('role_id') == '1'){
            $data['names'] =  $this->quries->getstudentname($course_id);                
            $this->load->view('viewstudents', $data);
        }
       
    }
    public function viewstudentcourse($id){
    if($this->session->userdata('role_id') > '1'){
        $data['names']= $this->quries->gettudentcourse($id);
        $this->load->view('viewStudentCourse', $data);
    }else{
        return redirect('welcome/login');
    }
       
    }
    public function logout()
    {
        $this->session->sess_destroy();
        return redirect('welcome');
    }
}
?>