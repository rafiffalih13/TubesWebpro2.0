<?php
        defined('BASEPATH') or exit('No direct script access allowed');

        class m_home extends CI_Model {

                // function __construct() {
                //         parent::__construct();
                // }
                public function get_data_barang() {
               		// return $this->db->get('barang')->result();

               		$this->db->select('*');
					$this->db->from('barang');
					$this->db->join('akun_penjual', 'barang.username = akun_penjual.username');
					return $this->db->get()->result();
                }

        }
?>