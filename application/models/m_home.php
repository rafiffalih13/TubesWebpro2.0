<?php
        defined('BASEPATH') or exit('No direct script access allowed');

        class m_home extends CI_Model {

                // function __construct() {
                //         parent::__construct();
                // }
                public function get_data_barang() {
               		// return $this->db->get('barang')->result();

                	$this->db->select('barang.id_barang, barang.username, barang.nama_barang, barang.images, barang.harga, barang.kategori, akun_penjual.nama_toko');
					$this->db->from('barang');
					$this->db->join('akun_penjual', 'barang.username = akun_penjual.username');
					$query = $this->db->get();
					return $query->result();
                }

        }
?>