<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	public function index(){
		$this->load->view('login_page');
	}

	public function login(){
		$this->session->set_userdata('email', $this->input->post('email'));
		$this->session->set_userdata('password', $this->input->post('password'));
		redirect('/user/load_success');
	}

	public function load_success(){

		$data = array(
			'email' => $this->session->userdata('email'),
			'password' => $this->session->userdata('password')
			);

		$this->load->view('success', $data);
	}

	public function show_all(){
		$users = array(
			array('first_name' => 'Blue', 'last_name' => 'Sargent'),
			array('first_name' => 'Richard', 'last_name' => 'Gansey'),
			array('first_name' => 'Melissa', 'last_name' => 'Anderson'),
			array('first_name' => 'Ronan', 'last_name' => 'Lynch'),
			);

		$data = array(
			'all_users' => $users
			);

		$this->load->view('all_users', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */