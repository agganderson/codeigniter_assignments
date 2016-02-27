<?php

class User extends CI_Model
{
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
    $this->form_validation->set_rules('firstname', 'First Name', 'trim|required|min_length[2]');
    $this->form_validation->set_rules('lastname', 'Last Name', 'trim|required');
    $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
    $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|matches[confirmpassword]');
    $this->form_validation->set_rules('confirmpassword', 'Password Confirmation', 'trim|required');
    if($this->form_validation->run()){
      $query = 'INSERT INTO users (first_name, last_name, email, password, created_at, updated_at) VALUES (?,?,?,?, NOW(), NOW())';
      $values = array($post['firstname'], $post['lastname'], $post['email'], md5($post['password']));
      // if query runs correctly
      if($this->db->query($query, $values)){
        $id = $this->db->insert_id();
        $success = array('valid', $id);
        return $success;
      } else {
        return false;
      }
    } else {
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


 function get_all_users()
     {
         return $this->db->query("SELECT * FROM users")->result_array();

     }




}

?>
