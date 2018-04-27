<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class inputBarang_c extends CI_Controller {

  function __construct(){
    parent::__construct();
    $this->load->helper(array('form', 'url'));
  }

  public function index(){
    $this->load->view("inputBarang");
  }

  public function do_upload()
  {
          $config['upload_path']          = './images/';
          $config['allowed_types']        = 'jpg';
          $config['max_size']             = 500;

          $this->load->library('upload', $config);

          if ( ! $this->upload->do_upload('userfile'))
          {
                  $error = array('error' => $this->upload->display_errors());

                  $this->load->view('inputBarang', $error);
          }
          else
          {
                  $error = array('error' => 'Upload berhasil!');

                  $this->load->view('inputBarang', $error);
          }
  }

}
 ?>
