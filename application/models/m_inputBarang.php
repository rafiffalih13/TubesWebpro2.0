<?php
class m_inputBarang extends CI_Model{
	public function input_data($data,$table){
    $this->db->insert($table,$data);
	}

  public function selectID($table)
  {
    return $this->db->select('id_barang')->from($table)->limit(1)->order_by('id_barang','DESC')->get()->row();
  }

}
