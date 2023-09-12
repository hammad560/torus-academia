<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('quries');
	}
	public function index()
	{
		$this->load->view('home');
	}
	public function login()
	{
		$this->load->view('login');
	}
	public function signup()
	{
		$this->load->view('signup');
	}
	public function createStudent()
	{
		$role['roles'] = $this->quries->getrole();
		return $this->load->view('createStudent', $role);
	}
	public function addStudentTeacher()
	{
		$this->validation();
		if ($this->form_validation->run()) {
			$data['username'] = $this->input->post('username');
			$data['email'] = $this->input->post('email');
			$data['role_id'] = $this->input->post('role_id');
			$data['gender'] = $this->input->post('gender');
			$data['password'] = $this->input->post('password');
			if ($this->quries->insertUserData($data)) {
				$this->session->set_flashdata('message', 'SIGNUP SUCCESSFULLY.!');
				return redirect('welcome/createStudent');
			} else {
				$this->session->set_flashdata('message', 'Fialed to SIGNUP.!');		
				return redirect('welcome/createStudent');
			} 
			
		} else {
			$this->createStudent();
		}
	}
	public function userlogin()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email[users.email]');
		$this->form_validation->set_rules('password', 'password', 'trim|required[users.password]');
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
		if ($this->form_validation->run()) {
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$userexist = $this->quries->checkUserExist($email, $password);
			
			if ($userexist) {
				if ($userexist['role_id'] == '1') {
					$sessiondata = [
						'id' => $userexist['user_id'],
						'username' => $userexist['username'],
						'email' => $userexist['email'],
						'gender' => $userexist['gender'],
						'role_id' => $userexist['role_id']
					];
					$this->session->set_userdata($sessiondata);
					return redirect('users/teachers');
				}
				 elseif ($userexist['role_id'] > '1') {
					$sessiondata = [
						'id' => $userexist['user_id'],
						'username' => $userexist['username'],
						'email' => $userexist['email'],
						'gender' => $userexist['gender'],
						'role_id' => $userexist['role_id']
					];
					$this->session->set_userdata($sessiondata);
					return redirect('users/students');
				}
			} else {
			$this->session->set_flashdata('message', 'Fialed to LOGIN, Check email or password');		
			return redirect('welcome/login');
		}
	}
}
	public function validation()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'User Name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('role_id', 'Role', 'trim|required');
		$this->form_validation->set_rules('gender', 'Name', 'trim|required');
		$this->form_validation->set_rules('password', 'password', 'trim|required');
		$this->form_validation->set_rules('cpassword', 'cConfirm password', 'trim|required|matches[password]');
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
	}
}