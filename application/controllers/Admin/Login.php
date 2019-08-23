<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('M_admin');
	}

	function index(){
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		if (empty($username) && empty($password)) {
			$this->load->view('admin/login');
		}else{
			$cek = $this->M_admin->validasi($username,$password)->num_rows();
			$admin = $this->M_admin->validasi($username,$password)->row();
			if ($cek > 0) {
				$datasession = array(	'status' 	=> 'login',
										'nama'		=> $admin->nama,
										'username'	=> $admin->username,
										'email'		=> $admin->email );
				$this->session->set_userdata( $datasession );
				redirect(base_url('Admin/Dashboard/'),'refresh');
			}else{
				$this->session->set_flashdata('gagal', 'GAGAL!');
				$this->load->view('admin/login');
			}

			// $input = $this->input->post();
			// echo json_encode($this->M_admin->validasi($input['username'], $input['password']));
		}
	}

	public static function cek_login(){
		
	}
}