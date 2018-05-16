<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class c_homePenjual extends CI_Controller {
		
		function __construct(){
			parent::__construct();
			$this->load->model('m_homePenjual');
			$this->load->helper('form');
			$this->load->library('session');
		}

		public function index($username){
			$data = array(
				'title' => 'HOME',
				'username' => $username,
				'barang' => $this->m_homePenjual->get_data_barang($username)
			);
			$this->load->view('v_homePenjual',$data);
		}

	}
?>