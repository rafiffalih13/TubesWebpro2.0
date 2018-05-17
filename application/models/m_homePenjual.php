<?php
        defined('BASEPATH') or exit('No direct script access allowed');

        class m_homePenjual extends CI_Model {

                public function get_data_barang($user) {
                    $query = $this->db->query("SELECT id_barang, nama_barang, images, harga, kategori, deskripsi FROM barang WHERE username='$user';");
					return $query->result();
                }

                public function edit_barang($id, $data){
                    $this->db->where('id_barang', $id);
                    $this->db->update('barang', $data);
                }

                public function delete_barang($id){
                    $this->db->where('id_barang', $id);
                    $this->db->delete('barang');
                }
        }
?>