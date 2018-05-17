<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class c_daftar extends CI_Controller {

		function __construct(){
			parent::__construct();
			$this->load->model('m_akun_pembeli');
			$this->load->model('m_akun_penjual');
			$this->load->helper(array('form', 'url'));
			$this->load->library('form_validation');
			$this->load->library('session');
		}

		public function index(){
			$this->load->view("v_pilih");
		}

		public function v_pembeli(){
			$this->load->view("v_daftarpem");
		}

		public function v_penjual(){
			$this->load->view("v_daftarpen");
		}

		function simpanPembeli(){
			$username = $this->input->post('username');
			$pass = $this->input->post('pass');
			$nama = $this->input->post('nama');
			$email = $this->input->post('email');
			$no_hp = $this->input->post('no_hp');
			$alamat = $this->input->post('alamat');
			$cek = $this->m_akun_pembeli->cekuser($username);


			if ($cek == FALSE) {
				$data = array(
					'username' => $username,
					'password' => $pass,
					'nama' => $nama,
					'email' => $email,
					'no_hp' => $no_hp,
					'alamat' => $alamat
				);
				$this->form_validation->set_rules('username', 'Username', 'required');
				$this->form_validation->set_rules('pass', 'Password', 'required');
				$this->form_validation->set_rules('cpass', 'Confirm Password', 'required|matches[pass]');
				$this->form_validation->set_rules('nama', 'Nama', 'required');
				$this->form_validation->set_rules('email', 'Email', 'required');
				$this->form_validation->set_rules('no_hp', 'No Handphone', 'required|numeric',array('numeric' => 'You must fill Phone Number with numeric',));
				$this->form_validation->set_rules('alamat', 'Alamat', 'required');

				if ($this->form_validation->run() == TRUE)
                {
                     $this->m_akun_pembeli->simpan_data($data,'akun_pembeli');
					$this->load->view("v_daftarsucsess");
                }
                else
                {
                    $this->load->view('v_daftarpem');
                }
				
			}else{
				echo "gagal";
			}
		}

		function simpanPenjual(){
			$sel_username = $this->input->post('username');
			$sel_pass = $this->input->post('pass');
			$sel_nama_penjual = $this->input->post('nama_penjual');
			$sel_nama_toko = $this->input->post('nama_toko');
			$sel_email = $this->input->post('email');
			$sel_no_hp = $this->input->post('no_hp');
			$sel_cek = $this->m_akun_penjual->cekuser($sel_username);
			
			if ($sel_cek == FALSE) {
				$data = array(
					'username' => $sel_username,
					'password' => $sel_pass,
					'nama_penjual' => $sel_nama_penjual,
					'nama_toko' => $sel_nama_toko,
					'email' => $sel_email,
					'no_hp' => $sel_no_hp
				);
				$this->form_validation->set_rules('username', 'Username', 'required');
				$this->form_validation->set_rules('pass', 'Password', 'required');
				$this->form_validation->set_rules('cpass', 'Confirm Password', 'required|matches[pass]');
				$this->form_validation->set_rules('nama_penjual', 'Nama Penjual', 'required');
				$this->form_validation->set_rules('nama_toko', 'Nama Toko', 'required');
				$this->form_validation->set_rules('email', 'Email', 'required');
				$this->form_validation->set_rules('no_hp', 'No Handphone', 'required|numeric',array('numeric' => 'You must fill Phone Number with numeric',));

				if ($this->form_validation->run() == TRUE)
                {
					$this->m_akun_penjual->simpan_data($data,'akun_penjual');
					$this->load->view("v_daftarsucsess");
                }
                else
                {
                    $this->load->view('v_daftarpen');
                }
			}else{
				$this->load->view("v_daftarfail");;
			}
		}

		public function view_home(){
			redirect('c_home/index');
		}

		public function view_login(){
			redirect('c_login/index');
		}

	}
?>
