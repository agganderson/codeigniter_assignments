<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    // $this->output->enable_profiler();
    $this->load->model('User');
  }

  public function index()
  {
    $this->load->view('index');
  }


  public function register(){
    $is_valid = $this->User->register($this->input->post());
    if($is_valid[0] == 'valid'){
      //redirect to reviews index
      $user = $this->User->get_user_by_id($is_valid[1]);
      // var_dump($user);
      $this->session->set_userdata('id', $user['id']);
      $this->session->set_userdata('name', $user['first_name']);
      redirect('users/profile');
    } else {
      // set session error messages
      $this->session->set_flashdata('reg_errors', $is_valid);
      // redirect to index
      redirect('/');
      // show session error messages
    }
  }


  public function login(){
    $is_logged = $this->User->login($this->input->post());
    if($is_logged){
      $this->session->set_userdata('id', $is_logged['id']);
      $this->session->set_userdata('name', $is_logged['first_name']);
      redirect('users/profile');
    } else {
      $this->session->set_flashdata('log_errors', "<p class='errors'>Invalid login credentials</p>");
      redirect('/');
    }
  }



  public function profile()
  {
    $data = array('first_name'=>'Justin',
                  'last_name'=> 'Yu');
    $this->load->view('profile', $data);
  }

  public function log_out() {
    $this->session->set_userdata('id', null);
    $this->session->set_userdata('name', null);
    redirect('/');
  }


}

//end of main controller
