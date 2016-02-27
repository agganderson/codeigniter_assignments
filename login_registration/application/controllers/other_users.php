<?php
class Users extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    // $this->output->enable_profiler();
    $this->load->model('User');
	session_start();

  }

  public function index()
  {
    $this->load->view('/users/index');
  }


  public function register(){
    $is_valid = $this->User->register($this->input->post());
    if($is_valid[0] == 'valid'){
      //redirect to reviews index
      $user = $this->User->get_user_by_id($is_valid[1]);
      // var_dump($user);
      $this->session->set_userdata('id', $user['id']);
      $this->session->set_userdata('name', $user['first_name']);
      redirect('users/welcome');
    } 
    else {
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
      redirect('/success');
    } 
    else {
      $this->session->set_flashdata('log_errors', "<p class='errors'>Invalid login credentials</p>");
      redirect('/');
    }
  }


  public function welcome(){
    $data = array('first_name'=> $first_name,
                  'last_name'=> $last_name
                  );
    $this->load->view('/users/welcome', $data);
  }

  public function log_out(){
    $this->session->set_userdata('id', null);
    $this->session->set_userdata('name', null);
    redirect('/');
  }

  public function success(){
  	$this->load->view('/users/welcome');
  }

}
?>
<?php
class Users extends CI_Controller {

	// protected $view_data = array();
	// protected $user_session = NULL;

	public function __construct(){
		parent::__construct();
		$this->load->model('User');
		$this->load->library('form_validation');
		// $this->view_data['user_session'] = $this->user_session = $this->session->userdata("user_session");

	}

	public function index(){
		$this->load->view('users/index');
	}

		public function login_user(){
			//check if the email exists in the db and matches with the email given

		}

	public function add_user(){
		//checking if all fields are empty/valid/matching
		$this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]|md5');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|matches[password]');
		if($this->form_validation->run() == FALSE){
			redirect('/');
		}
		else{
			$user_input = $this->input->post();
			$add_user = $this->User->user_register($user_input);
			$data = array(
						'first_name' => $first_name,
						'last_name' => $last_name,
						'email' => $email
						);
		}
		redirect('Users/welcome', $data);
	}

	public function welcome(){
		$this->load->view('/users/welcome');
	}

	public function logoff(){

	}

}
/* End of file welcome.php */
 Location: ./application/controllers/welcome.php
 ?>