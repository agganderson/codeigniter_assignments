<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Surveys extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}

	public function process_form(){
		if($this->input->post()){
			$counter = $this->session->userdata('counter');
			$this->session->set_userdata('counter', $counter + 1);
			$this->session->set_userdata('survey_data', $this->input->post());
			redirect('/surveys/result');
		}
		else{
		redirect('/surveys');
		}
	}

	public function result(){
		$this->load->view('result');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */