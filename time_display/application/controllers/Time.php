<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Time extends CI_Controller {

	protected $view_data = array();

	public function index(){
		$this->view_data['date'] = date('M d, Y');
		$this->view_data['time'] = date('h:i A');
		$this->load->view('index', $this->view_data);

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */