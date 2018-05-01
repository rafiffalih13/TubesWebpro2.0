<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class c_login extends CI_Controller {

		function __construct(){
			parent::__construct();
			$this->load->helper(array('form', 'url'));
			$this->load->library('form_validation');
		}
?>