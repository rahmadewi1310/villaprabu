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

	// admin
	function admin(){
		$data = array('admin' => $this->M_crud->select('tb_admin')->result());
		$this->load->view('Admin/admin',$data);
	}
	function insertadmin(){
		$input = $this->input;
		if ($input->post("password1") != $input->post("password2")) {
			$this->session->set_flashdata('passwordsama', 'Password Harus Sama!');
			redirect(base_url('admin/masterdata/admin/'),'refresh');
		}
		$data = array(	'nama'	=> $input->post('nama'),
					'username' 	=> $input->post('username'),
						'email' => $input->post('email'),
					'password' 	=> $input->post('password1'));
		$this->M_crud->insert("tb_admin", $data);
		redirect(base_url('admin/masterdata/admin'),'refresh');
	}

	// kamar

	function kamar(){
		$data = array('room' => $this->M_crud->select('tb_room')->result());
		$this->load->view('Admin/kamar',$data);
	}
	function insertkamar(){
		$input = $this->input;
		$data = array(	'no_kamar'	=> $input->post('no_kamar'),
						'harga' 	=> $input->post('harga'),
						'desc' 		=> $input->post('desc'));
		$this->M_crud->insert("tb_room", $data);
		redirect(base_url('admin/masterdata/kamar'),'refresh');
	}
	function deletekamar($id){
		$where = array('id' => $id, );
		$this->M_crud->delete("tb_room", $where);
		redirect(base_url('admin/masterdata/kamar'),'refresh');
	}
	function editkamar($id){
		$where = array('id' => $id, );
		$data = array('room' =>$this->M_crud->selectwhere("tb_room", $where)->row(),
						'id' =>$id );
		$this->load->view('admin/editkamar', $data);
	}
	function updatekamar($id){
		$where = array('id' => $id, );
		$input = $this->input;
		$data = array(	'no_kamar'	=> $input->post('no_kamar'),
						'harga' 	=> $input->post('harga'),
						'desc' 		=> $input->post('desc'));
		$this->M_crud->update("tb_room", $data, $where);
		redirect(base_url('admin/masterdata/kamar'),'refresh');
	}

}