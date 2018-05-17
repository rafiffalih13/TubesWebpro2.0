<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class c_keranjang extends CI_Controller {

    function __construct(){
      parent::__construct();
      $this->load->model('m_barang');
      $this->load->helper(array('form', 'url'));
      $this->load->library('session');
    }

    public function index($id = null){
      $barang = $this->m_barang->search($id);
      $this->load->view('v_barang',$barang);
    }

    
  }
?>
