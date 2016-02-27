<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class products extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('product');
	}

	public function index(){
		//gonna show all the products in the db
		$products = $this->product->get_all();
		$data = array(
					'products' => $products
					);
		$this->load->view('index', $data);
	}

	public function new_product(){
		$this->load->view('new');
	}

	public function show_product($id){
		$product = $this->product->show_by_id($id);
		$data = array(
					'product' => $product
					);
		$this->load->view('show', $data);
	}

	public function edit_product($id){
		$product = $this->product->show_by_id($id);
		$data = array(
					'product' => $product
					);
		$this->load->view('edit', $data);
	}

	public function add(){
		$product_data = $this->input->post();
			//Model then function then what info your passing through
		$this->product->add_product($product_data); 
		redirect('/');
	}

	public function update($id){
		$product_data = $this->input->post();
		$this->product->update_product($product_data, $id);
		redirect('/');
	}

	public function delete($id){
		$this->product->delete_product($id);
		redirect('/');
	}
}


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
?>