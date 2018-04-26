<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class c_daftar extends CI_Controller {
		
		function __construct(){
			parent::__construct();
			$this->load->helper('url');
		}

		public function index(){
			$this->load->view("v_daftar");
		}

	}
?>