<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller{
	
	function __construct(){
		parent::__construct();
	}

	function index(){
		if ($this->input->post('username') != '' && $this->input->post('password') != '') {
			$this->load->model('admin');
			$input = $this->input->post();
			echo json_encode($this->admin->validasi($input['username'], $input['password']));
		}else
			$this->load->view('admin/login');
	}

	public static function cek_login(){
		
	}
}