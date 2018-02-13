<?php 

class modelPesanan extends CI_Model{
	public function buatPesanan($data, $table){
		$this->db->insert($table,$data);
	}
	public function lihatPesanan($id_member){
		$query = $this->db->query("select * from pesanan INNER JOIN iklan on pesanan.id_iklan = iklan.id_iklan left outer join member on pesanan.id_member = member.id_member where iklan.id_member = $id_member order by pesanan.tanggal desc");
		return $query->result();
	}
}