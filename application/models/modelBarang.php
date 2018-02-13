<?php 

class modelBarang extends CI_Model{
	public function gets(){
		$query = $this->db->get('iklan');
		return $query->result();
	}
	
	public function count_verifikasi(){
		$query = $this->db->query('SELECT status_iklan, count(*) as c_verifikasi FROM iklan group by status_iklan');
		return $query->result();
	}


	public function get($id_iklan){
		$this->db->where('id_iklan', $id_iklan);
		$query = $this->db->get('iklan');
		$result = $query->result();
		return (count($result) > 0) ? $result[0] : false ;
	}
	public function iklan(){
		//$query = $this->db->query('select top 10 from iklan order by id_iklan desc');
		$query = $this->db->get('iklan');
		return $query->result();
	}
	public function delete($id){
 		return $this->db->query("DELETE FROM iklan WHERE id_iklan=$id"); 

 	}
 	// public function update($table,$data,$id){
		// return $this->db->query("UPDATE $table SET status_iklan = $data WHERE iklan.id_iklan = $id");
 		
 	// }
 	public function update($table,$data,$id){
 		echo $table; 
 		echo $data;
 		echo $id;
		$this->db->set('status_iklan',$data);
		$this->db->where('id_iklan',$id); 
 		$this->db->update($table); 
 		
 	}
 	public function ascending()
 	{
 		$query = $this->db->query("select * from iklan order by judul_iklan asc");
 		return $query->result();
 	}
}