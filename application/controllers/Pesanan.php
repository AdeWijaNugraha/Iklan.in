<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesanan extends CI_Controller {

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

	public function tambahPesanan(){
		$id_iklan = $this->input->post('id_iklan');
		$harga = $this->input->post('harga');
		$kuantitas = $this->input->post('kuantitas');
		$jumlah = $this->input->post('jumlah');

		if ($this->session->userdata('id_member') != null) {
			$id_member = $this->session->userdata('id_member');
		} else {
			$id_member = 0;
		}

		$total_harga = $harga * $kuantitas;
		$jumlahBaru = $jumlah - $kuantitas;

		$data = array(
			'id_iklan' 		=> $id_iklan,
			'id_member' 	=> $id_member,
			'kuantitas' 	=> $kuantitas,
			'total_harga'	=> $total_harga,
			);

		$this->modelPesanan->buatPesanan($data,'pesanan');
		$this->modelIklan->updateJumlah($jumlahBaru, $id_iklan);
		redirect(base_url("index.php/iklan/deskripsiIklan/$id_iklan"));
	}

	public function lihatPesanan(){
		$id_member = $this->session->userdata('id_member');
		$dataPesanan = $this->modelPesanan->lihatPesanan($id_member);
		$param = array(
			'title' 	=> "Lihat Pesanan",
			'data' 		=> $dataPesanan,
			'nama' 		=> $this->session->userdata('nama'),
			'status' 	=> $this->session->userdata('status'),
			'id_member' => $this->session->userdata('id_member'),
			'notifKomentar' => $this->modelKomentar->belumBaca($this->session->userdata('id_member'))->num_rows(),
			'notifPesan' => $this->modelPesan->belumBaca($this->session->userdata('id_member'))->num_rows(),
		);

		$this->load->view('header', $param);
		$this->load->view('lihatPesanan',$param);
		$this->load->view('footer', $param);
	}
}
