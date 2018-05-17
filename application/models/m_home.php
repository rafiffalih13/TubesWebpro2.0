<?php
        defined('BASEPATH') or exit('No direct script access allowed');

        class m_home extends CI_Model {

                // function __construct() {
                //         parent::__construct();
                // }
                public function get_data_barang() {
               		// return $this->db->get('barang')->result();


                    // $this->db->select('*');
					// $this->db->from('barang');
					// $this->db->join('akun_penjual', 'barang.username = akun_penjual.username');
					// return $this->db->get()->result();
                    //            	$this->db->select('barang.id_barang, barang.username, barang.nama_barang, barang.images, barang.harga, barang.kategori, akun_penjual.nama_toko');
					// $this->db->from('barang');
					// $this->db->join('akun_penjual', 'barang.username = akun_penjual.username');
					// $query = $this->db->get();

                    $query = $this->db->query("SELECT barang.id_barang, barang.username, barang.nama_barang, barang.images, barang.harga, barang.kategori, akun_penjual.nama_toko FROM barang JOIN akun_penjual ON barang.username = akun_penjual.username ORDER BY barang.id_barang DESC;");
					return $query->result();
                }

                public function search($barang){
                    $query = $this->db->query("SELECT barang.id_barang, barang.username, barang.nama_barang, barang.images, barang.harga, barang.kategori, akun_penjual.nama_toko FROM barang JOIN akun_penjual ON barang.username = akun_penjual.username WHERE barang.nama_barang LIKE '%$barang%';");
                    return $query->result();
                }

                public function get_by_kategori($kategori){
                    $query = $this->db->query("SELECT barang.id_barang, barang.username, barang.nama_barang, barang.images, barang.harga, barang.kategori, akun_penjual.nama_toko FROM barang JOIN akun_penjual ON barang.username = akun_penjual.username WHERE barang.kategori='$kategori';");
                    return $query->result();
                }

        }
?>