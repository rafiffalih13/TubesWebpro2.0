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
	 	$this->db->from('akun_penjual');
	 	$this->db->where('username', $user);
	 	$this->db->limit(1);
	 	$query = $this->db->get();
	 	if ($query->num_rows() == 1) {
	        return true;
	    } else {
	        return false;
	    }
 	}
 }
?>
