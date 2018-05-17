<?php
class m_keranjang extends CI_Model{

  public function get_data_barang($user) {
    $this->db->select('*');
    $this->db->where('username',$user);
    $query = $this->db->get('keranjang');
    return $query->result();
  }

  function jum_harga(){

  $this->db->select('SUM(harga) as total');
  $this->db->from('barang');
  return $this->db->get()->row()->total;

  }

  public function delete_data($nama_barang){
      $table = 'keranjang';
      $this->db->where('nama_barang', $nama_barang);
      $delete = $this->db->delete($table);
      if ($delete){
          return TRUE;
      }else{
          return FALSE;
      }

  }
}
