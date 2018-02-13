<?php 

class modelUser extends CI_Model{
	public function gets(){
		$query = $this->db->get('member');
		return $query->result();
	}
	
	public function get($id_member){
		$this->db->where('id_member', $id_member);
		$query = $this->db->get('member');
		$result = $query->result();
		return (count($result) > 0) ? $result[0] : false ;
	}
	public function getRow($usernama){
		
		$query = $this->db->query("SELECT * FROM member WHERE username='$usernama'");
		return $query->result_array();

	}

	public function registrasi($data, $table){
		$this->db->insert($table,$data);
	}

	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}

	public function insert($table,$data){
 		$this->db->insert($table,$data);
 	}

 	public function delete($id){
 		return $this->db->query("DELETE FROM member WHERE id_member=$id"); 

 	}

	public function update($table,$data){
		$this->db->set($data); 
		$this->db->where('username',$data['username']); 
 		$this->db->update($table); 
 		
 	}
}