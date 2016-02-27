<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Courses extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Course');//if you put this in the construct it'll run this load model code auto for each function

	}

	public function index()
	{
		$courses = $this->Course->get_all_courses();
		$this->load->view('courses/index', array('courses' => $courses));
	}

	public function create(){
		$this->Course->create_course($this->input->post());
		redirect('/');

	}

	public function destroy($id){
		$course = $this->Course->get_course($id);
		$this->load->view('courses/destroy', array('id' => $id, 'name' => $course['name'], 'description' => $course['description']));
	}

	public function delete($id){
		$this->Course->delete_course($id);
		redirect('/');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
?>