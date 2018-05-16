<?php
class m_keranjang extends CI_Model{

  public function get_data_barang() {
    $query = $this->db->get('barang');
    return $query->result();
  }

  function jum_harga(){

  $this->db->select('SUM(harga) as total');
  $this->db->from('barang');
  return $this->db->get()->row()->total;

  }

  public function delete_data($id){
      $table = 'barang';
      $this->db->where('id_barang', $id);
      $delete = $this->db->delete($table);

      if ($delete){
          return TRUE;
      }else{
          return FALSE;
      }

  }
}
