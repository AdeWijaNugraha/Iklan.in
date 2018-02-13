<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komentar extends CI_Controller {

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

	public function tampilEditKomentar($id_iklan,$id_komentar){
		$data_komentar = $this->modelKomentar->get($id_komentar);
		$param = array(
			'id_iklan'	=> $id_iklan,
			'title' 	=> "Edit Komentar",
			'data' 		=> $data_komentar,
			'nama' 		=> $this->session->userdata('nama'),
			'status' 	=> $this->session->userdata('status'),
			'notifKomentar' => $this->modelKomentar->belumBaca($this->session->userdata('id_member'))->num_rows(),
			'notifPesan' => $this->modelPesan->belumBaca($this->session->userdata('id_member'))->num_rows(),
		);

		$this->load->view('header', $param);
		$this->load->view('editKomentar', $param);
		$this->load->view('footer', $param);
	}

	public function buatKomentar(){
		$id_member = $this->input->post('id_member');
		$id_iklan = $this->input->post('id_iklan');
		$komentar = $this->input->post('komentar');

		$data = array(
			'id_komentar' 	=> null,
			'id_member' 	=> $id_member,
			'id_iklan' 		=> $id_iklan,
			'komentar' 		=> $komentar,
			);

		$this->modelKomentar->buatKomentar($data,'komentar');

		redirect(base_url("index.php/iklan/deskripsiIklan/$id_iklan"));
	}

	public function editKomentar(){
		$id_iklan = $this->input->post('id_iklan');
		$id_komentar = $this->input->post('id_komentar');
		$komentar = $this->input->post('komentar');

		$this->modelKomentar->editKomentar($komentar, $id_komentar);

		redirect(base_url("index.php/iklan/deskripsiIklan/$id_iklan"));
	}

	public function hapusKomentar($id_iklan, $id_komentar){
		$this->modelKomentar->hapuskomentar($id_komentar);
		redirect(base_url("index.php/iklan/deskripsiIklan/$id_iklan"));
	}

	public function tampilKomentar(){
		$id_member = $this->session->userdata('id_member');
		$dataKomentar = $this->modelKomentar->tampilKomentar($id_member);
		$this->modelKomentar->bacaPesan($id_member);

		$param = array(
			'title' 	=> "Tampil Komentar",
			'data' 		=> $dataKomentar,
			'nama' 		=> $this->session->userdata('nama'),
			'status' 	=> $this->session->userdata('status'),
			'id_member' => $this->session->userdata('id_member'),
			'notifKomentar' => $this->modelKomentar->belumBaca($this->session->userdata('id_member'))->num_rows(),
			'notifPesan' => $this->modelPesan->belumBaca($this->session->userdata('id_member'))->num_rows(),
		);

		$this->load->view('header', $param);
		$this->load->view('lihatKomentar',$param);
		$this->load->view('footer', $param);
	}
}
