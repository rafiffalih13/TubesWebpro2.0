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
    $data = array(
      'title' => 'keranjang',
      'barang' => $this->m_keranjang->get_data_barang(),
      'jum' => $this->m_keranjang->jum_harga(),
      'kuantitas' => '1',
      'ongkir' => '10000'
    );
    $this->load->view("v_keranjang",$data);
  }

  public function hapus(){
      $id = $this->input->post('id_barang');
      $hapus = $this->m_keranjang->delete_data($id);
      if($hapus){
          redirect('home/index');
      }else{
          echo "<script>alert('Gagal Hapus Data');</script>";

      }
  }
}
 ?>
