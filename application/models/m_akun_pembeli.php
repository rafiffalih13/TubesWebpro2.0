<?php 
	class M_akun_pembeli extends CI_Model{
 	
 	function tampil_data(){
 		return $this->db->get('akun_pembeli');
 	}

 	function simpan_data($data, $table){
 		$this->db->insert($table,$data);
 	}

 	function cekuser($user){
 		$this->db->select('username');
 		$this->db->where('username', $user);
 		$query = $this->db->get('akun_pembeli');
 		return $query->row();
 	}
 }
?>