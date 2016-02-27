<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Courses extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
    $this->load->model('course');
		// $this->output->enable_profiler();
	}

	public function index() {
    // var_dump('in controller'); die();
    $courses = $this->course->index();
    // var_dump($courses); die();
    $this->load->view('index', array('all_courses'=>$courses));
	}

  public function create(){
    // var_dump('in controller', $this->input->post()); die();
    $this->course->create($this->input->post());
    redirect('/');
  }

  public function destroy($course_id){
    // var_dump($course_id); die();
    $course = $this->course->show($course_id);
    $this->load->view('destroy', array('course'=>$course));
  }

  public function delete($course_id){
    // var_dump($course_id); die();
    $this->course->delete($course_id);
    redirect('/');
  }
}

//end of main controller
