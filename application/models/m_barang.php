<?php
  class m_barang extends CI_Model{

    public function search($id) {
      $query = $this->db->query("SELECT * FROM barang right JOIN akun_penjual ON barang.id_barang = $id;");
      return $query->row();
    }

    public function input($data,$table){
      $this->db->insert($table,$data);
    }
  }
?>
