<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class masterdata extends CI_Controller{

	function __construct(){
		parent::__construct();
		if($this->session->userdata('username') == '' && $this->session->userdata('email') == ''){
			redirect('admin/login');
		}

		$this->load->model('M_admin');
		$this->load->model('M_crud');
	}

	function admin($id = null){
		// $this->load->model('admin');
		if ($id != null) {
			
		}else{
			$data = $this->admin->find_all();
		}
	}

	function admin_post(){

	}

	function kamar(){
		$data = array('room' => $this->M_crud->select('tb_room')->result());
		$this->load->view('Admin/kamar',$data);
	}

}