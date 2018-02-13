<?php 

class modelPesan extends CI_Model{
	public function kirimPesan($data, $table){
		$this->db->insert($table,$data);
	}
	public function tampilPesan($id_member){
		$query = $this->db->query("select * from pesan INNER join member on pesan.id_pengirim= member.id_member WHERE pesan.id_penerima = $id_member ORDER by pesan.tanggal desc");
		return $query->result();
	}

	public function belumBaca($id_member){
		$result = $this->db->query("select * from pesan where status_pesan = 'unread' and id_penerima = $id_member");
		return (count($result) > 0) ? $result : false ;
	}
	public function bacaPesan($id_member){
		$result = $this->db->query("update pesan set status_pesan = 'read' where id_penerima = $id_member");
		return (count($result) > 0) ? $result : false ;
	}
}