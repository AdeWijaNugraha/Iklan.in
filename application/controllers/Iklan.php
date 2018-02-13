<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Iklan extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('modelIklan');
		$this->load->model('modelUser');
		$this->load->model('modelKomentar');
		$this->load->model('modelPesan');
		$this->load->model('modelPesanan');
		$this->load->model('modelUser');
		$this->load->library('session');
		$this->load->helper(array('form', 'url'));
	}

	public function deskripsiIklan($id_iklan){
		$data_iklan = $this->modelIklan->get($id_iklan);
		$data_user = $this->modelUser->get($data_iklan->id_member);
		$data_komentar = $this->modelKomentar->gets($id_iklan);

		$param = array(
			'title' 	=> "Deskripsi Iklan",
			'data' 		=> $data_iklan,
			'data_user' => $data_user,
			'nama' 		=> $this->session->userdata('nama'),
			'status' 	=> $this->session->userdata('status'),
			'id_member' => $this->session->userdata('id_member'),
			'data_komentar' => $data_komentar,
			'notifKomentar' => 0,
			'notifPesan' => 0,
		);

		$this->load->view('header', $param);
		$this->load->view('deskripsiIklan',$param);
		$this->load->view('footer', $param);
	}

	public function iklanSaya(){
		$id_member = $this->session->userdata('id_member');
		$iklan_verified = $this->modelIklan->iklanVerified($id_member);
		$iklan_delay = $this->modelIklan->iklanDelay($id_member);

		$param = array(
			'title' 		=> "Daftar Iklan Saya",
			'iklan_verified'=> $iklan_verified,
			'iklan_delay'	=> $iklan_delay,
			'nama'			=> $this->session->userdata('nama'),
			'status' 		=> $this->session->userdata('status'),
			'notifKomentar' => $this->modelKomentar->belumBaca($this->session->userdata('id_member'))->num_rows(),
			'notifPesan' => $this->modelPesan->belumBaca($this->session->userdata('id_member'))->num_rows(),
		);

		$this->load->view('header', $param);
		$this->load->view('daftarIklan',$param);
		$this->load->view('footer', $param);
	}

	public function iklanOrang($username){
		$data = $this->modelIklan->getByUsername($username);

		$param = array(
			'title' 		=> "$username",
			'data'			=> $data,
			'nama'			=> $this->session->userdata('nama'),
			'status' 		=> $this->session->userdata('status'),
			'notifKomentar' => $this->modelKomentar->belumBaca($this->session->userdata('id_member'))->num_rows(),
			'notifPesan' => $this->modelPesan->belumBaca($this->session->userdata('id_member'))->num_rows(),
		);

		$this->load->view('header', $param);
		$this->load->view('daftarIklanOrang',$param);
		$this->load->view('footer', $param);
	}

	
	public function buatIklan(){
		$config['upload_path']		= './uploads/';
		$config['file_name']		= 'foto';
		$config['allowed_types']	= 'jpeg|gif|jpg|png';
 
		$this->load->library('upload', $config);

		$file_name = "";

		$this->upload->initialize($config);

		if ( $this->upload->do_upload('gambarIklan')){
			$data = $this->upload->data();
			$file_name = $data['file_name'];
		}else{
			var_dump($this->upload->display_errors());
		}

		$id = $this->input->post('id');
		$judul = $this->input->post('judul');
		$harga = $this->input->post('harga');
		$kategori = strtolower($this->input->post('kategori'));
		$deskripsi = $this->input->post('deskripsi');
		$jumlah = $this->input->post('jumlah');

		$data = array(
			'id_iklan' 			=> null,
			'id_member' 		=> $id,
			'judul_iklan' 		=> $judul,
			'foto_iklan' 		=> $file_name,
			'harga_iklan' 		=> $harga,
			'kategori_iklan'	=> $kategori,
			'deskripsi_iklan'	=> $deskripsi,
			'jumlah'			=> $jumlah,
			'status_iklan' 		=> 'delay',
			);

		$this->modelIklan->buatIklan($data,'iklan');

		redirect(base_url('index.php/user/profil'));
	}

	
	public function tampilEditIklan($id_iklan){
		$data_iklan = $this->modelIklan->get($id_iklan);
		$param = array(
			'title' 	=> "Edit Iklan",
			'data' 		=> $data_iklan,
			'nama' 		=> $this->session->userdata('nama'),
			'status' 	=> $this->session->userdata('status'),
			'notifKomentar' => $this->modelKomentar->belumBaca($this->session->userdata('id_member'))->num_rows(),
			'notifPesan' => $this->modelPesan->belumBaca($this->session->userdata('id_member'))->num_rows(),
		);

		$this->load->view('header', $param);
		$this->load->view('editIklan', $param);
		$this->load->view('footer', $param);
	}

	public function editIklan(){
		$config['upload_path'] = './uploads/';
		$config['file_name']   = 'foto';
		$config['allowed_types']  = 'jpeg|gif|jpg|png';
 
		$this->load->library('upload', $config);

		$file_name = "";

		$this->upload->initialize($config);

		if ( $this->upload->do_upload('gambarIklan')){
			$data = $this->upload->data();
			$file_name = $data['file_name'];
		}else{
			var_dump($this->upload->display_errors());
		}

		$id_iklan = $this->input->post('id_iklan');
		$judul_iklan = $this->input->post('judul_iklan');
		$harga_iklan = $this->input->post('harga_iklan');
		$kategori_iklan = $this->input->post('kategori_iklan');
		$deskripsi_iklan = $this->input->post('deskripsi_iklan');
		$jumlah = $this->input->post('jumlah');

		$this->modelIklan->updateIklan($id_iklan, $judul_iklan, $file_name, $harga_iklan, $kategori_iklan, $deskripsi_iklan, $jumlah);

		redirect(base_url('index.php/iklan/iklanSaya'));

		//foto kalo update harus pilih foto lagi,,,
	}

	public function terbaru(){
		$param = array(
			'title' 	=> "Terbaru",
			'data' 		=> $this->modelIklan->newer(),
			'nama'		=> $this->session->userdata('nama'),
			'status' 	=> $this->session->userdata('status'),
			'notifKomentar' => $this->modelKomentar->belumBaca($this->session->userdata('id_member'))->num_rows(),
			'notifPesan' => $this->modelPesan->belumBaca($this->session->userdata('id_member'))->num_rows(),
		);

		$this->load->view('header', $param);
		$this->load->view('terbaru', $param);
		$this->load->view('footer', $param);
	}

	public function kategori($kategori){
		$judul = ucwords($kategori);
		$param = array(
			'title' 	=> $judul,
			'kategori'	=> $kategori,
			'data' 		=> $this->modelIklan->findByCategory($kategori),
			'nama' 		=> $this->session->userdata('nama'),
			'status' 	=> $this->session->userdata('status'),
			'notifKomentar' => $this->modelKomentar->belumBaca($this->session->userdata('id_member'))->num_rows(),
			'notifPesan' => $this->modelPesan->belumBaca($this->session->userdata('id_member'))->num_rows(),
		);
		$this->load->view('header', $param);
		$this->load->view('category', $param);
		$this->load->view('footer', $param);
	}

	public function cari(){
		$nama = $this->input->get('cari');
		$data = $this->modelIklan->findByNama($nama)->result();
		$cek = $this->modelIklan->findByNama($nama)->num_rows();
		if($cek > 0){
			$param = array(
				'title' 	=> "Pencarian",
				'data' 		=> $data,
				'nama' 		=> $this->session->userdata('nama'),
				'status' 	=> $this->session->userdata('status'),
				'notifKomentar' => 0,
				'notifPesan' => 0,
			);
			$this->load->view('header', $param);
			$this->load->view('pencarian', $param);
			$this->load->view('footer', $param);
		}else{
			$param = array(
				'title' 	=> "Pencarian",
				'pesan'     => "Maaf Pencarian tidak ditemukan ",
				'nama' 		=> $this->session->userdata('nama'),
				'status' 	=> $this->session->userdata('status'), 
				'notifKomentar' => 0,
				'notifPesan' => 0,
			);
			$this->load->view('header', $param);
			$this->load->view('zonk', $param);
			$this->load->view('footer', $param);
			
		}
	}

	public function hapusIklan($id_iklan){
		$this->modelIklan->hapusIklan($id_iklan);
		redirect(base_url('index.php/iklan/iklanSaya'));
	}

	public function hapusDeskripsi($id_iklan){
		$this->modelIklan->hapusDeskripsi($id_iklan);
		redirect(base_url("index.php/iklan/deskripsiIklan/$id_iklan"));
	}

	public function hapusGambar($id_iklan){
		$this->modelIklan->hapusGambar($id_iklan);
		redirect(base_url("index.php/iklan/deskripsiIklan//$id_iklan"));
	}

}
