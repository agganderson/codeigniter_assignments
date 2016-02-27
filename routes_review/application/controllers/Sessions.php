<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Sessions extends CI_Controller{

		public function new_session(){
			echo "New session method";
		}

		public function destroy_session(){
			echo "Destroy session method";
		}
	}
 ?>