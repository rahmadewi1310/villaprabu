<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('M_admin');
	}

	function index(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		if (empty($username) && empty($password)) {
			$this->load->view('admin/login');
		}else{
			$admin = $this->M_admin->validasi($username, md5($password))->row();
			if ($admin != null) {
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
		}
	}
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('admin/login'),'refresh');
	}
}