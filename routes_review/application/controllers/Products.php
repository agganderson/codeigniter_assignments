<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

	public function index()
	{
		echo "<a href='/p/1'>show</a>";
	}

	public function show($id){
		echo $id;
	}

	public function edit($id){
		echo $id;
	}
}

?>
