<?php
	class M_akun_penjual extends CI_Model{

 	public function tampil_data(){
 		return $this->db->get('akun_penjual');
 	}

 	public function simpan_data($data, $table){
 		$this->db->insert($table,$data);
 	}

 	public function cekuser($user){
 		$this->db->select('username');
 		$this->db->where('username', $user);
 		$query = $this->db->get('akun_penjual');
 		return $query->result();
 	}
 }
?>
