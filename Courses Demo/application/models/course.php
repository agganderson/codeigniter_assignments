<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Course extends CI_Model
{
  public function index(){
    // var_dump('in model'); die();
    $query = "SELECT * FROM Courses";
    return $this->db->query($query)->result_array();
  }
  
  public function create($post){
    $query = "INSERT INTO Courses(name, description, cat, uat) VALUES(?,?,NOW(),NOW())";
    $values = array($post['name'], $post['description']);
    return $this->db->query($query,$values);
  }

  public function show($course_id){
    $query = "SELECT * FROM Courses WHERE id=?";
    $value = array($course_id);
    return $this->db->query($query, $value)->row_array();
  }

  public function delete($course_id){
    $query = "DELETE FROM Courses WHERE id=?";
    $value = array($course_id);
    return $this->db->query($query, $value);
  }


}

?>
