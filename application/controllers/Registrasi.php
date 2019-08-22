<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Pelanggan_model");
		$this->load->library('form_validation');
	}

	public function index()
	{
		$registrasi = $this->Pelanggan_model;

		$this->load->view('pelanggan/registrasi_v');
		
	}

	public function add()
	{
		//set form validation
        $this->form_validation->set_rules('NAMA', 'NAMA', 'required');
        $this->form_validation->set_rules('EMAIL', 'EMAIL', 'required');
        $this->form_validation->set_rules('JENIS_KELAMIN', 'JENIS_KELAMIN', 'required');
        $this->form_validation->set_rules('TELP', 'TELP', 'required');
        $this->form_validation->set_rules('USERNAME', 'USERNAME', 'required');
        $this->form_validation->set_rules('PASSWORD', 'PASSWORD', 'required');
         $this->form_validation->set_rules('ALAMAT', 'ALAMAT', 'required');

        //set message form validation
        $this->form_validation->set_message('required','<div class="alert alert-danger" >
        <b><i class="fa fa-exclamation-circle"></i> {field}</b> harus diisi</div>');

        if ($this->form_validation->run() == TRUE){    

		$this->load->helper(array('form', 'url'));
		$NAMA = $this->input->post('NAMA');
		$EMAIL = $this->input->post('EMAIL');
		$JENIS_KELAMIN = $this->input->post('JENIS_KELAMIN');
		$TELP = $this->input->post('TELP');
		$USERNAME = $this->input->post('USERNAME');
		$PASSWORD = $this->input->post('PASSWORD');
		$ALAMAT = $this->input->post('ALAMAT');

		$data = array('NAMA' => $NAMA,
					  'EMAIL' => $EMAIL,
					  'JENIS_KELAMIN' => $JENIS_KELAMIN,
					  'TELP' => $TELP,
					  'USERNAME' => $USERNAME,
					  'PASSWORD' => $PASSWORD,
					  'ALAMAT'	=> $ALAMAT);
		$this->load->model('Pelanggan_model');
		$id = $this->Pelanggan_model->save($data);

      	$this->load->view('pelanggan/registrasi_v');

	}
}

	
}