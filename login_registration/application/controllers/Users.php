<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {
	
	protected $view_data = array();
	protected $user_session = NULL;
	
	function __construct(){
		parent::__construct();
		$this->view_data['user_session'] = $this->user_session = $this->session->userdata("user_session");
	}
	
	public function index(){
		$this->load->view("/users/index");
	}
	
	public function process_login(){		
		$this->load->library("form_validation");
		$this->form_validation->set_rules("email", "Email", "trim|valid_email|required");
		$this->form_validation->set_rules("password", "Password", "trim|min_length[8]|required|md5");
		
		if($this->form_validation->run() === FALSE){
			$this->session->set_flashdata("login_errors", validation_errors());
			redirect('/');
		}
		else{
			$this->load->model("User");							   
			$get_user = $this->User->get_user($this->input->post());

			if ($get_user){
				$this->session->set_userdata("user_session", $get_user);
				redirect("Users/welcome");
			}
			else{
				$this->session->set_flashdata("login_errors", "Invalid email and/or password");
				redirect('/');
			}
		}
	}
	
	public function process_registration(){
		$this->load->library("form_validation");
		$this->form_validation->set_rules("first_name", "First Name", "trim|required");
		$this->form_validation->set_rules("last_name", "Last Name", "trim|required");
		$this->form_validation->set_rules("email", "Email", "trim|valid_email|required");
		$this->form_validation->set_rules("password", "Password", "trim|min_length[8]|required|matches[confirm_password]|md5");
		$this->form_validation->set_rules("confirm_password", "Confirm Password", "trim|required|md5");

		if($this->form_validation->run() === FALSE){
			$this->session->set_flashdata("registration_errors", validation_errors());
			redirect('/');
		}
		else{
			$this->load->model("User");
			$user_input = $this->input->post();			
			$insert_user = $this->User->insert_user($user_input);
			
			if($insert_user){				
				$this->session->set_userdata("user_session", $user_input);
				redirect("Users/welcome");
			}
			else{
				$this->session->set_flashdata("registration_errors", "Sorry but your info were not registered please try again.");
				redirect('/');
			}
		}
	}
	
	public function welcome(){
		$this->load->view("/users/welcome", $this->view_data);
	}
	
	public function logout(){
		// $user_session_data = $this->session->all_userdata();
		
		// foreach($user_session_data as $key){
		// 	$this->session->unset_userdata($key);
		// }
		
		$this->session->sess_destroy();
		redirect('/');
	}
	
}
?>