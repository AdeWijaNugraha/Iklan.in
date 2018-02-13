<?php 

class modelKomentar extends CI_Model{

	public function get($id_komentar){
		$query = $this->db->query("select komentar.id_komentar, member.id_member, member.nama, komentar.komentar, komentar.waktu, member.foto FROM komentar INNER JOIN member ON komentar.id_member=member.id_member where komentar.id_komentar = $id_komentar ");
		$result = $query->result();
		return (count($result) > 0) ? $result[0] : false ;
	}

	public function gets($id_iklan){
		$query = $this->db->query("select komentar.id_komentar, member.id_member, member.nama, komentar.komentar, komentar.waktu, member.foto FROM komentar INNER JOIN member ON komentar.id_member=member.id_member where komentar.id_iklan = $id_iklan ORDER by komentar.waktu asc ");
		return $query->result();
	}
	public function buatKomentar($data, $table){
		$this->db->insert($table,$data);
	}
	public function hapusKomentar($id_komentar){
		$this->db->query("delete from komentar where id_komentar = $id_komentar");
	}
	public function editKomentar($komentar, $id_komentar){
		$this->db->query("update komentar set komentar = '$komentar' where id_komentar = $id_komentar");
	}

	public function belumBaca($id_member){
		return $this->db->query("select * from komentar inner join iklan on komentar.id_iklan = iklan.id_iklan where komentar.status_komentar = 'unread' and iklan.id_member = $id_member");
	}
	public function bacaPesan($id_member){
		$result = $this->db->query("update komentar INNER join iklan on komentar.id_iklan = iklan.id_iklan set status_komentar = 'read' where iklan.id_member = $id_member ");
	}
	public function tampilKomentar($id_member){
		$result = $this->db->query("select * from komentar INNER join iklan on komentar.id_iklan = iklan.id_iklan where iklan.id_member = $id_member ORDER by komentar.waktu desc");
		$result = $result->result();
		return (count($result) > 0) ? $result : false ;
	}
}