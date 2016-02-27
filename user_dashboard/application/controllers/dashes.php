<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class dashes extends CI_Controller {

	public function index()
	{
		$this->load->view('/dashboard/home');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */