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

		public function edit_barang($id){
			$data = array(
				'nama_barang' => $this->input->get('nama'),
				'kategori' => $this->input->get('kategori'),
				'deskripsi' => $this->input->get('deskripsi'),
				'harga' => $this->input->get('harga')
			);
			$this->m_homePenjual->edit_barang($id, $data);
			$username = $this->session->userdata('username');
			redirect('c_homePenjual/index/'.$username);
		}

		public function delete_barang($id){
			$this->m_homePenjual->delete_barang($id);
			$username = $this->session->userdata('username');
			redirect('c_homePenjual/index/'.$username);
		}
	}
?>