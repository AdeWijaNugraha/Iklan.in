<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct(){
		
		parent::__construct();
		$this->load->model('modelIklan');
		$this->load->model('modelUser');
		$this->load->model('modelKomentar');
		$this->load->model('modelPesan');
		$this->load->model('modelPesanan');
		$this->load->model('modelUser');
		$this->load->library('session');
	}

	public function login(){
		$username = $this->input->post('usrname');
		$password = $this->input->post('psw');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$data = $this->modelUser->cek_login("member",$where)->result();
		$cek = $this->modelUser->cek_login("member",$where)->num_rows();
		if($cek == 1){
			$data_session = array(
				'nama'		=> $username,
				'id_member' => $data[0]->id_member,
				'foto_member' => $data[0]->foto,
				'status' 	=> "login"
			);
			$this->session->set_userdata($data_session);
			redirect(base_url('index.php/iklan/terbaru'));
		}else{
			$param = array(
				'title' => 'Login',
				'pesan'	=> "Username dan Password Salah!",
				'status'=> $this->session->userdata('status'),
				'notifKomentar' => $this->modelKomentar->belumBaca($this->session->userdata('id_member'))->num_rows(),
				'notifPesan' => $this->modelPesan->belumBaca($this->session->userdata('id_member'))->num_rows(),
			);
			
			$this->load->view('header', $param);
			$this->load->view('loginFail', $param);
			$this->load->view('footer');
		}
	}

	public function register(){
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$pass = md5($this->input->post('pass'));

		$data = array(
			'nama'		=> $nama,
			'username'	=> $username,
			'email' 	=> $email,
			'password' 	=> $pass,
		);

		$param = array(
				'title' => 'Home',
				'status'=> $this->session->userdata('status'),
		);

		$this->modelUser->registrasi($data,'member');
		$this->load->view('header', $param);
		$this->load->view('home');
		$this->load->view('footer');
	}

	public function profil(){
		$param = array(
				'title'	=> 'Profil',
				'nama' 	=> $this->session->userdata('nama'),
				'status'=> $this->session->userdata('status'),
				'data' 	=> $this->modelUser->getDataUser($this->session->userdata('nama')),
				'notifKomentar' => $this->modelKomentar->belumBaca($this->session->userdata('id_member'))->num_rows(),
				'notifPesan' => $this->modelPesan->belumBaca($this->session->userdata('id_member'))->num_rows(),
			);

		$this->load->view('header', $param);
		$this->load->view('profilSaya', $param);
		$this->load->view('footer');
	}

	public function profilOrang($username){
		$param = array(
				'title'	=> "$username",
				'nama' 	=> $this->session->userdata('nama'),
				'status'=> $this->session->userdata('status'),
				'data' 	=> $this->modelUser->getDataUser($username),
				'notifKomentar' => $this->modelKomentar->belumBaca($this->session->userdata('id_member'))->num_rows(),
				'notifPesan' => $this->modelPesan->belumBaca($this->session->userdata('id_member'))->num_rows(),
			);

		$this->load->view('header', $param);
		$this->load->view('profilOrang', $param);
		$this->load->view('footer');
	}

	public function editProfil(){
		$nama = $this->input->post('nama');
		$tglLahir = $this->input->post('tglLahir');
		$noHp = $this->input->post('noHp');
		$email = $this->input->post('email');
		$pass = $this->input->post('pass');
		$mdPass = md5($pass);
		
		$username = $this->session->userdata('nama');

		$this->modelUser->update_data($username, $nama, $tglLahir, $noHp, $email, $mdPass);
		redirect(base_url('index.php/user/profil'));

		// kalo edit harus masukkan password lagi,,,
	}

	public function gantiFoto(){
		$id_member = $this->session->userdata('id_member');

		$config['upload_path']		= './fotoProfil/';
		$config['file_name']		= 'foto';
		$config['allowed_types']	= 'jpeg|gif|jpg|png';
 
		$this->load->library('upload', $config);

		$file_name = "";

		$this->upload->initialize($config);
 
		if ( $this->upload->do_upload('fotoProfil')){
			$data = $this->upload->data();
			$file_name = $data['file_name'];
		}else{
			var_dump($this->upload->display_errors());
		}

		$this->modelUser->gantiFoto($id_member,$file_name);

		redirect(base_url('index.php/user/profil'));
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url('index.php'));
	}
}
