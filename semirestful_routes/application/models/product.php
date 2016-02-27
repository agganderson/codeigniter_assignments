<?php

class product extends CI_Model {

	public function add_product($product_data){
		$add_query = "INSERT INTO products (name, description, price, created_at) VALUES (?, ?, ?, NOW())";
		$values = array($product_data['name'], $product_data['description'], $product_data['price']);
		return $this->db->query($add_query, $values);
	}

	public function get_all(){
		$get_query = "SELECT * FROM products";
		return $this->db->query($get_query)->result_array();
	}

	public function show_by_id($id){
		$show_query = "SELECT * FROM products WHERE id = ?";
		$values = array($id);
		return $this->db->query($show_query, $values)->row_array();
	}

	public function update_product($product_data, $id){
		$update_query = "UPDATE products SET name = ?, description = ?, price = ? WHERE id = ?";
		$values = array($product_data['name'], $product_data['description'], $product_data['price'], $id);
		return $this->db->query($update_query, $values);
	}

	public function delete_product($id){
		$delete_query = "DELETE FROM products WHERE id = ?";
		$values = array($id);
		return $this->db->query($delete_query, $values);
	}
}

?>