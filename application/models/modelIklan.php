<?php 

class modelIklan extends CI_Model{
	public function gets(){
		$query = $this->db->get('iklan');
		return $query->result();
	}
	
	public function get($id_iklan){
		$query = $this->db->query("select * from iklan where id_iklan = '$id_iklan'");
		$result = $query->result();
		return (count($result) > 0) ? $result[0] : false ;
	}

	public function getByUsername($username){
		$query = $this->db->query("select * from iklan inner join member on iklan.id_member = member.id_member where member.username = '$username'");
		return $query->result();
	}

	public function iklanVerified($id_member){
		$query = $this->db->query("select * from iklan where id_member = '$id_member' and status_iklan = 'verifikasi'");
		return $query->result();
	}

	public function iklanDelay($id_member){
		$query = $this->db->query("select * from iklan where id_member = '$id_member' and status_iklan = 'delay'");
		return $query->result();
	}

	public function newer(){
		$query = $this->db->query("select * from iklan where status_iklan = 'verifikasi' order by id_iklan desc limit 10");
		return $query->result();
	}

	public function findByCategory($kategori){
		$query = $this->db->query("select * from iklan where kategori_iklan = '$kategori' and status_iklan = 'verifikasi'");
		return $query->result();
	}

	public function findByCategoryNumb($kategori){
		$query = $this->db->query("select * from iklan where kategori_iklan = '$kategori' and status_iklan = 'verifikasi'");
		return $query->num_rows();
	}

	public function findByNama($nama){
		return $this->db->query("select * from iklan where judul_iklan like '%$nama%' and status_iklan = 'verifikasi'");
	}

	public function hapusIklan($id_iklan){
		$this->db->query("delete from iklan where id_iklan = $id_iklan");
	}

	public function hapusDeskripsi($id_iklan){
		$this->db->query("update iklan set deskripsi_iklan = null where id_iklan = $id_iklan");
	}

	public function hapusGambar($id_iklan){
		$this->db->query("update iklan set foto_iklan = null where id_iklan = $id_iklan");
	}

	public function buatIklan($data, $table){
		$this->db->insert($table,$data);
	}

	public function updateIklan($id_iklan, $judul_iklan, $foto, $harga_iklan, $kategori_iklan, $deskripsi_iklan, $jumlah){
		$this->db->query("update iklan set judul_iklan = '$judul_iklan', foto_iklan = '$foto', harga_iklan = $harga_iklan, kategori_iklan = '$kategori_iklan', deskripsi_iklan = '$deskripsi_iklan', jumlah = $jumlah  where id_iklan = $id_iklan");
	}

	public function updateJumlah($jumlahBaru, $id_iklan){
		$this->db->query("update iklan set jumlah = $jumlahBaru where id_iklan = $id_iklan");
	}

	public function hargaTerendah($kategori){
		$query = $this->db->query("select * from iklan where kategori_iklan = '$kategori' and status_iklan = 'verifikasi' order by harga_iklan asc");
		$result = $query->result();
		return $result[0];
	}

}