<?php
	class M_login extends CI_Model{

        public function login($username, $password) {

            $condition = "username =" . "'" . $username . "' AND " . "password =" . "'" . $password . "'";
            $this->db->select('*');
            $this->db->from('akun_pembeli');
            $this->db->where($condition);
            $this->db->limit(1);
            $query = $this->db->get();
            
            if ($query->num_rows() == 1) {
                return true;
            } else {
                return false;
            }
        }

        public function get_user_id_from_username($username) {
		
            $this->db->select('username');
            $this->db->from('akun_pembeli');
            $this->db->where('username', $username);
            return $this->db->get()->row('id');
            
        }

        public function get_user($user_id) {
            
            $this->db->select('*');
            $this->db->from('akun_pembeli');
            $this->db->where('username', $user_id);
            return $this->db->get()->row('username');
            
        }


        public function loginP($username, $password) {

            $condition = "username =" . "'" . $username . "' AND " . "password =" . "'" . $password . "'";
            $this->db->select('*');
            $this->db->from('akun_penjual');
            $this->db->where($condition);
            $this->db->limit(1);
            $query = $this->db->get();
            
            if ($query->num_rows() == 1) {
                return true;
            } else {
                return false;
            }
        }

        public function get_user_id_from_usernameP($username) {
		
            $this->db->select('username');
            $this->db->from('akun_penjual');
            $this->db->where('username', $username);
            return $this->db->get()->row('id');
            
        }

        public function get_userP($user_id) {
            
            $this->db->select('*');
            $this->db->from('akun_penjual');
            $this->db->where('username', $user_id);
            return $this->db->get()->row('username');
            
        }
 }
?>
