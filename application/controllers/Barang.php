<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {


	public function __construct()
	{
		parent::__construct();

		$this->load->model('modelBarang');
		$this->load->model('modelUser');
		//$this->load->model('Komentar_Model');
	}

	public function satu($iklan_id)
	{
		$data_iklan = $this->modelBarang->get($iklan_id);
		$data_user = $this->modelUser->get($data_iklan->id_member);
		//$data_komentar = $this->Komentar_Model->gets($iklan_id);

		$param = array(
			'title' 	=> "Deskripsi Iklan",
			'data' 		=> $data_iklan,
			'data_user' => $data_user,
			//'data_komentar' => $data_komentar,
		);

		$this->load->view('headerLogin', $param);
		$this->load->view('deskripsiBarang',$param);
		$this->load->view('footer', $param);
	}
	
	
}
