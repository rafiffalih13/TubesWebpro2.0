<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_inputBarang extends CI_Controller {

  function __construct(){
    parent::__construct();
    $this->load->model('m_inputBarang');
    $this->load->helper(array('form', 'url'));
    $this->load->library('session');
  }

  public function index(){
    $this->load->view("v_inputBarang");
  }

  public function do_upload(){
          $config = [
            'upload_path' => './assets/images/',
            'allowed_types' => 'gif|jpg|png',
            'max_size' => 1000
          ];

          $this->load->library('upload', $config);

          if ( ! $this->upload->do_upload())
          {
                  $error = array('error' => $this->upload->display_errors());

                  $this->load->view('v_inputBarang', $error);
          }
          else
          {
                  $file = $this->upload->data();
                  $id = $this->m_inputBarang->selectID('barang');
                  $id = $id->id_barang;
                  $nama_barang = $this->input->post('namaBarang');
                  $harga = $this->input->post('harga');
                  $deskripsi = $this->input->post('dess');
                  $id = $id + 1;
                  $images = $file['file_name'];
                  $data = array(
                    'id_barang' => $id,
                    'nama_barang' => $nama_barang,
                    'images' => $images,
                    'harga' => $harga,
                    'deskripsi' => $deskripsi
                    );
                  $this->m_inputBarang->input_data($data,'barang');
                  $this->load->view('v_inputBarangSuccess');
          }
  }
}
 ?>
