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

		// gambar bukti
        $img = $_FILES['img']['name'];
        $config['upload_path']='./uploads';
        $config['allowed_types']='jpg|png|jpeg';
        $config['file_name'] = $this->input->post('no_kamar');
        $config['overwrite'] = TRUE;
        $config['file_ext_tolower'] = TRUE;
        $config['remove_space'] = TRUE;
        $this->load->library('upload',$config);
        if($this->upload->do_upload('img')){

	        $images = $this->upload->data();
	        $config['img_library'] = 'gd2';
	        $config['source_image'] = './uploads'.$images['file_name'];
	        $config['create_thumb'] = FALSE;
	        $config['maintain_ratio'] = FALSE;
	        $config['quality'] = '100%';
	        $config['width'] = 512;
	        $config['height'] = 512;
	        $config['new_image'] = './img/bukti'.$images['file_name'];
	        $this->load->library('image_lib',$config);
	        $this->image_lib->resize();
	        $this->image_lib->clear();

	        if (!$this->image_lib->resize()) {
	            echo $this->image_lib->display_errors();
	        }
	        $input = $this->input;
			$data = array(	'no_kamar'	=> $input->post('no_kamar'),
							'harga' 	=> $input->post('harga'),
							'desc' 		=> $input->post('desc'),
							'img'		=> $images['file_name'])	;
			$this->M_crud->insert("tb_room", $data);
			redirect(base_url('admin/masterdata/kamar'),'refresh');


        }else{
        	$this->session->flashdata('gagal','GAGAL!');
			redirect(base_url('admin/masterdata/kamar'),'refresh');
        }
        // gambar bukti



		// $input = $this->input;
		// $data = array(	'no_kamar'	=> $input->post('no_kamar'),
		// 				'harga' 	=> $input->post('harga'),
		// 				'desc' 		=> $input->post('desc'));
		// $this->M_crud->insert("tb_room", $data);
		// redirect(base_url('admin/masterdata/kamar'),'refresh');
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
		$img = $_FILES['img']['name'];
        $config['upload_path']='./uploads';
        $config['allowed_types']='jpg|png|jpeg';
        $config['file_name'] = $this->input->post('no_kamar');
        $config['overwrite'] = TRUE;
        $config['file_ext_tolower'] = TRUE;
        $config['remove_space'] = TRUE;
        $this->load->library('upload',$config);
        if($this->upload->do_upload('img')){

	        $images = $this->upload->data();
	        $config['img_library'] = 'gd2';
	        $config['source_image'] = './uploads'.$images['file_name'];
	        $config['create_thumb'] = FALSE;
	        $config['maintain_ratio'] = FALSE;
	        $config['quality'] = '100%';
	        $config['width'] = 512;
	        $config['height'] = 512;
	        $config['new_image'] = './img/bukti'.$images['file_name'];
	        $this->load->library('image_lib',$config);
	        $this->image_lib->resize();
	        $this->image_lib->clear();

	        if (!$this->image_lib->resize()) {
	            echo $this->image_lib->display_errors();
	        }
			$where = array('id' => $id, );
	        $input = $this->input;
			$data = array(	'no_kamar'	=> $input->post('no_kamar'),
							'harga' 	=> $input->post('harga'),
							'desc' 		=> $input->post('desc'),
							'img'		=> $images['file_name'])	;
			$this->M_crud->update("tb_room", $data,$where);
			redirect(base_url('admin/masterdata/kamar'),'refresh');


        }else{
        	$this->session->flashdata('gagal','GAGAL!');
			redirect(base_url('admin/masterdata/kamar'),'refresh');
        }
	}

	// pelanggan
	function pelanggan(){
		$data = array('pelanggan' => $this->M_crud->select('tb_pelanggan')->result());
		$this->load->view('Admin/pelanggan',$data);
	}
	function insertpelanggan(){

		// gambar bukti
        $img = $_FILES['img']['name'];
        $config['upload_path']='./uploads';
        $config['allowed_types']='jpg|png|jpeg';
        $config['file_name'] = uniqid();
        $config['overwrite'] = TRUE;
        $config['file_ext_tolower'] = TRUE;
        $config['remove_space'] = TRUE;
        $this->load->library('upload',$config);
        if($this->upload->do_upload('img')){

	        $images = $this->upload->data();
	        $config['img_library'] = 'gd2';
	        $config['source_image'] = './uploads'.$images['file_name'];
	        $config['create_thumb'] = FALSE;
	        $config['maintain_ratio'] = FALSE;
	        $config['quality'] = '100%';
	        $config['width'] = 512;
	        $config['height'] = 512;
	        $config['new_image'] = './img/bukti'.$images['file_name'];
	        $this->load->library('image_lib',$config);
	        $this->image_lib->resize();
	        $this->image_lib->clear();

	        if (!$this->image_lib->resize()) {
	            echo $this->image_lib->display_errors();
	        }
	        $input = $this->input;
			$data = array(	'nama'		=> $input->post('nama'),
							'email' 	=> $input->post('email'),
							'phone' 	=> $input->post('phone'),
							'alamat'	=> $input->post('alamat'),
							'no_rek'	=> $input->post('no_rek'),
							'img'		=> $images['file_name']);
			$this->M_crud->insert("tb_pelanggan", $data);
			redirect(base_url('admin/masterdata/pelanggan'),'refresh');


        }else{
        	$this->session->flashdata('gagal','GAGAL!');
			redirect(base_url('admin/masterdata/pelanggan'),'refresh');

        }
        // gambar bukti



		// $input = $this->input;
		// $data = array(	'no_kamar'	=> $input->post('no_kamar'),
		// 				'harga' 	=> $input->post('harga'),
		// 				'desc' 		=> $input->post('desc'));
		// $this->M_crud->insert("tb_room", $data);
		// redirect(base_url('admin/masterdata/kamar'),'refresh');
	}
	function deletepelanggan($id){
		$where = array('id' => $id, );
		$this->M_crud->delete("tb_pelanggan", $where);
		redirect(base_url('admin/masterdata/pelanggan'),'refresh');
	}
	function editpelanggan($id){
		$where = array('id' => $id, );
		$data = array('pelanggan' =>$this->M_crud->selectwhere("tb_pelanggan", $where)->row(),
						'id' =>$id );
		$this->load->view('admin/editpelanggan', $data);
	}
	function updatepelanggan($id){
		// gambar bukti
        $img = $_FILES['img']['name'];
        $config['upload_path']='./uploads';
        $config['allowed_types']='jpg|png|jpeg';
        $config['file_name'] = uniqid();
        $config['overwrite'] = TRUE;
        $config['file_ext_tolower'] = TRUE;
        $config['remove_space'] = TRUE;
        $this->load->library('upload',$config);
        if($this->upload->do_upload('img')){

	        $images = $this->upload->data();
	        $config['img_library'] = 'gd2';
	        $config['source_image'] = './uploads'.$images['file_name'];
	        $config['create_thumb'] = FALSE;
	        $config['maintain_ratio'] = FALSE;
	        $config['quality'] = '100%';
	        $config['width'] = 512;
	        $config['height'] = 512;
	        $config['new_image'] = './img/bukti'.$images['file_name'];
	        $this->load->library('image_lib',$config);
	        $this->image_lib->resize();
	        $this->image_lib->clear();

	        if (!$this->image_lib->resize()) {
	            echo $this->image_lib->display_errors();
	        }

			$where = array('id' => $id, );
			$input = $this->input;
			$data = array(	'nama'		=> $input->post('nama'),
							'email' 	=> $input->post('email'),
							'phone' 	=> $input->post('phone'),
							'alamat'	=> $input->post('alamat'),
							'no_rek'	=> $input->post('no_rek'),
							'img'		=> $images['file_name']);
			$this->M_crud->update("tb_pelanggan", $data, $where);
			redirect(base_url('admin/masterdata/pelanggan'),'refresh');


        }else{
        	$this->session->flashdata('gagal','GAGAL!');
			redirect(base_url('admin/masterdata/pelanggan'),'refresh');

        }


	}

}