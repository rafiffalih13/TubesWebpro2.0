<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class c_daftarsel extends CI_Controller {

		function __construct(){
			parent::__construct();
			 $this->load->model('m_akun_penjual');
			$this->load->helper(array('form', 'url'));
			$this->load->library('form_validation');
			$this->load->library('session');
		}

		public function index(){
			$this->load->view("v_daftarsel");
		}

		function simpan(){
			$username = $this->input->post('username');
			$pass = $this->input->post('pass');
			$nama_penjual = $this->input->post('nama_penjual');
			$nama_toko = $this->input->post('nama_toko');
			$email = $this->input->post('email');
			$no_hp = $this->input->post('no_hp');
			$cek = $this->m_akun_penjual->cekuser($username);

			if ($cek != $username) {
				$data = array(
					'username' => $username,
					'password' => $pass,
					'nama_penjual' => $nama_penjual,
					'nama_toko' => $nama_toko,
					'email' => $email,
					'no_hp' => $no_hp
				);
				$this->m_akun_penjual->simpan_data($data,'akun_penjual');
				$this->load->view("v_daftarsucsess");
			}else{
				echo "gagal";
			}
		}

	}
?>
