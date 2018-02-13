<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan extends CI_Controller {

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

	public function buatPesan(){
		$id_penerima = $this->input->post('id_member');
		$username = $this->input->post('username');
		$pesan = $this->input->post('pesan');

		$data = array(
			'id_pengirim' 	=> $this->session->userdata('id_member'),
			'id_penerima' 	=> $id_penerima,
			'pesan' 		=> $pesan,
			);

		$this->modelPesan->kirimPesan($data,'pesan');
		redirect(base_url("index.php/user/profilOrang/$username"));
	}
	public function tampilPesan(){
		$id_member = $this->session->userdata('id_member');
		$dataPesan = $this->modelPesan->tampilPesan($id_member);
		$this->modelPesan->bacaPesan($id_member);
		// var_dump($dataPesan);

		$param = array(
			'title' 	=> "Tampil Pesan",
			'data' 		=> $dataPesan,
			'nama' 		=> $this->session->userdata('nama'),
			'status' 	=> $this->session->userdata('status'),
			'id_member' => $this->session->userdata('id_member'),
			'notifKomentar' => $this->modelKomentar->belumBaca($this->session->userdata('id_member'))->num_rows(),
			'notifPesan' => $this->modelPesan->belumBaca($this->session->userdata('id_member'))->num_rows(),
		);

		$this->load->view('header', $param);
		$this->load->view('lihatPesan',$param);
		$this->load->view('footer', $param);
	}
	public function tampilBalasPesan($username){
		$data_user= $this->modelUser->getDataUser($username);
		$param = array(
			'title' 	=> "Balas Pesan",
			'data' 		=> $data_user,
			'nama' 		=> $this->session->userdata('nama'),
			'status' 	=> $this->session->userdata('status'),
			'notifKomentar' => $this->modelKomentar->belumBaca($this->session->userdata('id_member'))->num_rows(),
			'notifPesan' => $this->modelPesan->belumBaca($this->session->userdata('id_member'))->num_rows(),
		);

		$this->load->view('header', $param);
		$this->load->view('balasPesan', $param);
		$this->load->view('footer', $param);
	}
	public function balasPesan(){
		$id_penerima = $this->input->post('id_member');
		$username = $this->input->post('username');
		$pesan = $this->input->post('pesan');

		$data = array(
			'id_pengirim' 	=> $this->session->userdata('id_member'),
			'id_penerima' 	=> $id_penerima,
			'pesan' 		=> $pesan,
			);

		$this->modelPesan->kirimPesan($data,'pesan');
		redirect(base_url("index.php/pesan/tampilPesan"));
	}
}
