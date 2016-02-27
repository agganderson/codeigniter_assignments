<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class quotes extends CI_Controller {

	public function index_json(){
		$this->load->model('quote');
		$data['quotes'] = $this->quote->all();
		echo json_encode($data);
	}

	public function index(){
		$this->load->view('index');
	}

}

?>