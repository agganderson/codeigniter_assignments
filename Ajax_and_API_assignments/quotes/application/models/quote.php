<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
class quote extends CI_Model{
		
	public function all(){
		return $this->db->query("SELECT * FROM quotes")->result_array();
	}
}

 ?>