<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Belajar extends CI_Controller {
		
		function __construct(){
			parent::__construct();
			$this->load->view('v_home');
		}

		public function index(){
			$this->load->view('v_home');
		}

	}
?>