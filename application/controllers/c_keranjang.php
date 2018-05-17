<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_keranjang extends CI_Controller {

  function __construct(){
    parent::__construct();
    $this->load->model('m_keranjang');
    $this->load->helper(array('form', 'url'));
    $this->load->library('session');
  }

  public function index(){
    $username = 'lala';
    $this->session->set_userdata('username', $username);
    $data = array(
      'title' => 'keranjang',
      'jum' => $this->m_keranjang->jum_harga(),
      'kuantitas' => '1',
      'ongkir' => '10000',
      'username' => $this->session->userdata('username'),
      'barang' => $this->m_keranjang->get_data_barang($this->session->userdata('username'))
    );
    $this->load->view("v_keranjang",$data);
  }

  public function hapus(){
      $nama_barang = $this->input->post('nama_barang');
      $hapus = $this->m_keranjang->delete_data($nama_barang);
      if($hapus){
          $this->session->set_flashdata('alert', 'sukses_hapus');
          redirect('c_keranjang/index');
      }else{
          echo "<script>alert('Gagal Hapus Data');</script>";

      }
  }

  public function done(){
    $this->load->view('v_done');
  }
}
 ?>
