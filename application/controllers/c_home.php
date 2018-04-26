<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class c_home extends CI_Controller {
		
		function __construct(){
			parent::__construct();
			$this->load->view('v_home');
		}

		public function index(){
			
		}

	}
?>