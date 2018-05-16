<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class c_home extends CI_Controller {
		
		function __construct(){
			parent::__construct();
			$this->load->model('m_home');
			$this->load->helper('form');
			$this->load->library('session');
		}

		public function index(){
			$data = array(
				'title' => 'HOME',
				'barang' => $this->m_home->get_data_barang()
			);
			$this->load->view('v_home',$data);
		}

		public function SearchBarang(){
			$src = $this->input->get('src');
			$data = array(
				'title' => '$src',
				'barang' => $this->m_home->search($src)
			);
			$this->load->view('v_search',$data);	
		}

		public function view_login(){
			redirect('c_login/index');
		}

		public function view_daftar(){
			redirect('c_daftar/index');
		}

		public function logout(){
            $this->session->session_destroy();
            redirect('c_home/index');
        }  

	}
?>