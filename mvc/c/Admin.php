<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('modelAdmin');
		$this->load->library('session');
	}

	public function masuk(){

		$data = array(
			'title' => "loginAdmin"
		);

		$this->load->view('headerAdmin', $data);
		$this->load->view('loginAdmin', $data);
		
	}
	public function RegAdmin(){
		$data = array(
			'title' => "RegAdmin"
		);

		$this->load->view('headerAdmin', $data);
		$this->load->view('RegAdmin', $data);
		
	}

		public function register(){
			$nama = $this->input->post('namaAdm');
			$username = $this->input->post('usernameAdm');
			$pass = $this->input->post('password');
			$mdPass = md5($pass);

			

			$data = array(
				'nama_admin' => $nama,
				'username_admin' => $username,
				'password' => $mdPass,
				);

			$this->modelAdmin->registrasi($data,'admin');

			$title = "loginAdmin";
			
			$this->load->view('headerAdmin', $title);
			$this->load->view('loginAdmin', $title);
			//$this->load->view('category', $data);
		}

		public function login(){
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$where = array(
				'username_admin' => $username,
				'password' => md5($password)
				);
			
			$cek = $this->modelAdmin->cek_login("admin",$where)->num_rows();
			
			if($cek > 0){
				$data_session = array(
					'username' => $username,
					'password' => $password
					);
	 
				$this->session->set_userdata($data_session);

				redirect(base_url('index.php/Dashboard/lihatMember'));


				//header("location: localhost/application/controllers/Kategori.php");
			}else{
				echo $username." Username dan password salah ! ".$password;
				
			}
		}

		public function logout(){
			$this->session->sess_destroy();
			redirect(base_url('index.php/Admin/masuk'));
		}
	
}
