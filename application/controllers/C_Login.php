<?php  
/**
*Login controller
*apllication/controllers/C_Login.php
*/

class C_Login extends CI_Controller{
	
	function __construct()	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->database();
		$this->load->model('M_Login');
	}

	public function index(){
		$this->load->view('V_login');
	}

	public function proses(){
		$data =  array(
			'username' => $this->input->post('username'),
			'password' => sha1($this->input->post('password'))
			);
		
		$login = $this->M_Login->proses_login($data);
		if ($login) {
			$this->session->set_flashdata('success','Login Berhasil');
			$this->session->set_userdata('login',$login);
			redirect('C_Login/success');
		} else {
			$this->session->set_flashdata('error','Username atau password anda salah');
			redirect('C_Login/index');
		}
		
	}

	public function success(){
		if ($this->session->userdata('login')==null) {
			$this->session->set_flashdata('error','Anda harus login dulu');
			redirect('C_Login/index');
		} else {
			$this->load->view('V_Admin');
		}		
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('C_Login/index');
	}
}

/*
?>
*/