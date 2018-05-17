<?php
  class m_barang extends CI_Model{

    public function search($id) {
      $this->db->select('*');
      $this->db->where('id',$id);
      $query = $this->db->get('barang');
      return $query->result();
    }

    public function simpankeranjang($value='')
    {
      # code...
    }
  }
?>