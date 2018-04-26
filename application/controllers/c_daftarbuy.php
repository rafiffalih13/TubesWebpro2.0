<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class c_daftarbuy extends CI_Controller {
		
		function __construct(){
			parent::__construct();
			$this->load->view('v_daftarbuy');
		}

		public function index(){
			
		}

	}
?>