<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('modelUser');
		$this->load->model('modelBarang');
	}

	public function lihatMember(){
		$data_member = $this->modelUser->gets();

		$data = array(
			'title' => "Lihat Member",
			'dataMember' => $data_member
		);

		$this->load->view('headerAdmin', $data);
		$this->load->view('lihatMember', $data);

	}
	public function lihatIklan(){
		$data_iklan = $this->modelBarang->gets();
		$ambilData = $this->modelBarang->count_verifikasi();

		$barang = array(
			'title' => "Lihat Iklan",
			'dataIklan' => $data_iklan,
			'ambilData' => $ambilData

			
		);
		
		$this->load->view('headerAdmin', $barang);
		$this->load->view('lihatIklan', $barang);

	}

	public function edit($id){
		$dimana = $this->modelUser->getRow($id)[0];
		$data = array(
			'title' =>  'Edit Member'
			);

 		$this->load->view("headerAdmin",$data);
		$this->load->view("editMember",$dimana);
	}

	public function doedit(){
		$username = $_POST['username'];
		$psw = $_POST['psw'];
		$nama = $_POST['nama'];
		$ttl = $_POST['ttl'];
		$foto = $_POST['foto'];
		$noHp = $_POST['noHp'];

		
		$dataMember = array(
			'username' => $username,
			'password' => $psw,
			'nama' => $nama,
			'tanggal_lahir' => $ttl,
			'foto' => $foto,
			'no_hp' => $noHp, 
		);
		$this->modelUser->update('member',$dataMember);

		redirect(base_url('index.php/Dashboard/lihatMember'));

		

	}

	public function delete($id){
 		$this->modelUser->delete($id);

		redirect(base_url('index.php/Dashboard/lihatMember'));


 	}
 	public function deleteBarang($id){
 		$this->modelBarang->delete($id);

		redirect(base_url('index.php/Dashboard/lihatIklan'));


 	}
 	public function insert(){
 		$this->load->view("headerAdmin","");
		$this->load->view("insertMember","");
	}


	public function doinsert(){
		echo "<prev>";
		print_r($_POST);
		echo "</prev>";

		
		$username = $_POST['username'];
		$email = $_POST['email'];
		$psw = $_POST['psw'];
		$nama = $_POST['nama'];
		$ttl = $_POST['ttl'];
		$foto = $_POST['foto'];
		$noHp = $_POST['noHp'];

		
		$data = array(
			'id_member' => $id,
			'username' => $username,
			'email' => $email,
			'password' => md5($psw),
			'nama' => $nama,
			'tanggal_lahir' => $ttl,
			'foto' => $foto,
			'no_hp' => $noHp, 
		);

		$res = $this->modelUser->insert('member',$data);

		redirect (base_url('index.php/Dashboard/lihatMember'));

	}
	public function ubah($id,$status){
		
		if ($status == 0) {
			$status_iklan = 'delay';
		}else{
			$status_iklan = 'verifikasi';
		}
		
 		$this->modelBarang->update('iklan',$status_iklan,$id);
 		
		redirect(base_url('index.php/Dashboard/lihatIklan'));
	}
	public function ascending(){
		$ambilData = $this->modelBarang->count_verifikasi();
		
		$param = array(
			'title' => "Lihat Iklan",
			'data' => $this->modelBarang->ascending(),
			// 'nama' => $this->session->userdata("nama"),
			// 'status' => $this->session->userdata("status"),
			'ambilData' => $ambilData,
			);
		$this->load->view('headerAdmin', $param);
		$this->load->view('urutkan', $param);
	}


}