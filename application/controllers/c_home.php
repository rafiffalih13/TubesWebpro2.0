<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class c_home extends CI_Controller {
		
		function __construct(){
			parent::__construct();
			$this->load->model('m_home');
		}

		public function index(){
			$data = array(
				'title' => 'HOME',
				'barang' => $this->m_home->get_data_barang()
			);
			$this->load->view('v_home',$data);
		}

		public function view_login(){
			$this->load->view();
		}

		public function view_daftar(){
			redirect('c_daftar/index');
		}

	}
?>