<?php
        defined('BASEPATH') or exit('No direct script access allowed');

        class m_home extends CI_Model {

                // function __construct() {
                //         parent::__construct();
                // }
                public function get_data_barang() {
               		// return $this->db->get('barang')->result();

<<<<<<< HEAD
               		$this->db->select('*');
					$this->db->from('barang');
					$this->db->join('akun_penjual', 'barang.username = akun_penjual.username');
					return $this->db->get()->result();
=======
     //            	$this->db->select('barang.id_barang, barang.username, barang.nama_barang, barang.images, barang.harga, barang.kategori, akun_penjual.nama_toko');
					// $this->db->from('barang');
					// $this->db->join('akun_penjual', 'barang.username = akun_penjual.username');
					// $query = $this->db->get();

                    $query = $this->db->query("SELECT barang.id_barang, barang.username, barang.nama_barang, barang.images, barang.harga, barang.kategori, akun_penjual.nama_toko FROM barang JOIN akun_penjual ON barang.username = akun_penjual.username;");
					return $query->result();
>>>>>>> 8a58b0c4e8649f8e97436d6d4ed9fa9c55bdd0bb
                }

        }
?>