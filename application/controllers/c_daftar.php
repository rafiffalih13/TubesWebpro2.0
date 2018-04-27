<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class c_daftar extends CI_Controller {

		function __construct(){
			parent::__construct();
			 $this->load->model('m_akun_pembeli');
			$this->load->helper(array('form', 'url'));
			$this->load->library('form_validation');
		}

		public function index(){
			$this->load->view("v_daftar");
		}

		function simpan(){
			$username = $this->input->post('username');
			$pass = $this->input->post('pass');
			$nama = $this->input->post('nama');
			$email = $this->input->post('email');
			$no_hp = $this->input->post('no_hp');
			$alamat = $this->input->post('alamat');
			$cek = $this->m_akun_pembeli->cekuser($username);
			$cek = $cek->username;

			if ($cek != $username) {
				$data = array(
					'username' => $username,
					'password' => $pass,
					'nama' => $nama,
					'email' => $email,
					'no_hp' => $no_hp,
					'alamat' => $alamat
				);
				$this->m_akun_pembeli->simpan_data($data,'akun_pembeli');
				$this->load->view("v_daftarsucsess");
			}else{
				echo "gagal";
			}
		}

	}
?>
