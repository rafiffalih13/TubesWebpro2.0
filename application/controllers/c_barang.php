<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class c_barang extends CI_Controller {

    function __construct(){
      parent::__construct();
      $this->load->model('m_barang');
      $this->load->helper(array('form', 'url'));
      $this->load->library('session');
    }

    public function index($id = '1'){
      $username = 'lala';
      $this->session->set_userdata('username', $username);
      $data = array (
        'title' => 'Detail Barang',
        'barang' => $this->m_barang->search($id),
        'username' => $this->session->userdata('username')
      );
      $this->load->view('v_barang',$data);
    }

    public function add(){
      $username = $this->input->post('username');
      $id_barang = $this->input->post('id_barang');
      $nama_barang = $this->input->post('nama_barang');
      $images = $this->input->post('images');
      $harga = $this->input->post('harga');
      $kategori = $this->input->post('kategori');
      $data = array(
        'username' => $username,
        'id_barang' => $id_barang,
        'nama_barang' => $nama_barang,
        'images' => $images,
        'harga' => $harga,
        'kategori' => $kategori
      );
      $this->m_barang->input($data,'keranjang');
      redirect('c_keranjang/index');
    }

  }
?>
