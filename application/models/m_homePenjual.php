<?php
        defined('BASEPATH') or exit('No direct script access allowed');

        class m_homePenjual extends CI_Model {

                public function get_data_barang($user) {
                    $query = $this->db->query("SELECT id_barang, nama_barang, images, harga, kategori, deskripsi FROM barang WHERE username='$user';");
					return $query->result();
                }

        }
?>