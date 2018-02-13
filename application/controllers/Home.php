<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		
		parent::__construct();
		$this->load->library('session');
		$this->load->model('modelIklan');
	}

	public function index(){
		$hargaFashion = $this->modelIklan->hargaTerendah('fashion');
		$hargaElektronik = $this->modelIklan->hargaTerendah('elektronik');
		$hargaOtomotif = $this->modelIklan->hargaTerendah('otomotif');
		$hargaMainan = $this->modelIklan->hargaTerendah('mainan');
		$hargaPerabotan = $this->modelIklan->hargaTerendah('perabotan');

		$jumlahFashion = $this->modelIklan->findByCategoryNumb('fashion');
		$jumlahElektronik = $this->modelIklan->findByCategoryNumb('elektronik');
		$jumlahOtomotif = $this->modelIklan->findByCategoryNumb('otomotif');
		$jumlahMainan = $this->modelIklan->findByCategoryNumb('mainan');
		$jumlahPerabotan = $this->modelIklan->findByCategoryNumb('perabotan');

		$data = array(
			'title' => "Home",
			'nama' 	=> $this->session->userdata('nama'),
			'status' => $this->session->userdata('status'),
			'hargaPerabotan' => $hargaPerabotan,
			'hargaElektronik' => $hargaElektronik,
			'hargaMainan' => $hargaMainan,
			'hargaFashion' => $hargaFashion,
			'hargaOtomotif' => $hargaOtomotif,

			'jumlahPerabotan' => $jumlahPerabotan,
			'jumlahElektronik' => $jumlahElektronik,
			'jumlahMainan' => $jumlahMainan,
			'jumlahFashion' => $jumlahFashion,
			'jumlahOtomotif' => $jumlahOtomotif,
			
		);

		$this->load->view('header', $data);
		$this->load->view('home', $data);
		$this->load->view('footer', $data);
	}
}
