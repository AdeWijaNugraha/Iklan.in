<?php 

class modelAdmin extends CI_Model{
	public function gets(){
		$query = $this->db->get('admin');
		return $query->result();
	}
	
	public function get($id_admin){
		$this->db->where('id_admin', $id_admin);
		$query = $this->db->get('admin');
		$result = $query->result();
		return (count($result) > 0) ? $result[0] : false ;
	}

	public function registrasi($data, $table){
		$this->db->insert($table,$data);
	}

	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}
}