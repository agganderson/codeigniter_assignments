<?php 
	class User extends CI_Model{

  public function get_user_by_id($id){
    // echo 'in the model getting user';
    $query = "SELECT id, first_name FROM users WHERE id = ?";
    return $this->db->query($query, array($id))->row_array();
  }

  public function register($post){
    // this loads the built in CI form validation
    $this->load->library('form_validation');
    //change error delimiters
    $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
    $this->form_validation->set_rules('first_name', 'First Name', 'trim|required|min_length[2]');
    $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
    $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
    $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
    $this->form_validation->set_rules('confirm_password', 'Password Confirmation', 'trim|required|matches[password]');
    if($this->form_validation->run()){
      $query = 'INSERT INTO users (first_name, last_name, email, password, created_at, updated_at) VALUES (?,?,?,?, NOW(), NOW())';
      $values = array($post['first_name'], $post['last_name'], $post['email'], md5($post['password']));
      // if query runs correctly
      if($this->db->query($query, $values)){
        $id = $this->db->insert_id();
        $success = array('valid', $id);
        return $success;
      } 
      else {
        return false;
      }
    } 
    else {
      return array(validation_errors());
    }
  }

  public function login($post){
    $check_user = "SELECT * FROM users WHERE users.email = ?";
    $user = $this->db->query($check_user, array($post['email']))->row_array();
    if($user){
      if(md5($post['password']) == $user['password']){
        return $user;
      }
      else {
        return false;
      }
    } else{
      return false;
    }
  }


  function destroy($email){
    $query = "DELETE FROM userdash.users WHERE email=?";
    $value = array($email);
    return $this->db->query($query,$value);
  }



 function update($data){
   $query = "UPDATE users SET first_name = ?, last_name = ?, email = ?, user_level = ?  WHERE id = ?";
   $values = array($data['first_name'],$data['last_name'],$data['email'],$data['user_level'],$data['id']);
   return $this->db->query($query, $values);
 }


 function get_all_users(){
    return $this->db->query("SELECT * FROM users")->result_array();
     }

}
	class User extends CI_Model{

		public function __construct(){
			parent::__construct();
		}

		public function user_register($user_input){
			$query = "INSERT INTO users (first_name, last_name, email, password, created_at) VALUES (?, ?, ?, ?, NOW())";
			$values = array($user_input['first_name'], $user_input['last_name'], $user_input['email'], $user_input['password']);
			$this->db->query($query, $values);
			return $this->db->query($query, $values);
		}

		public function user_login($user_info){
			$query = "SELECT * FROM users WHERE email = ? AND password = ?";
			$values = array($user_info['email'], $user_info['password']);
			return $this->db->query($query, $values)->row_array();
		}
	}
 ?>