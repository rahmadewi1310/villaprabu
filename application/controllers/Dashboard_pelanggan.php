<?php

class Dashboard_pelanggan extends CI_Controller{

public function __construct()

	{
		parent::__construct();
		$this->load->model('M_kamar');
		$this->load->model('M_kamar_tipe');

	}

	public function index()
	{
		$kamar = $this->M_kamar;
    	$tipekamar = $this->M_kamar_tipe->getAll();
    	$data["kamar"] = $this->M_kamar->list_dashboard();
    	$this->load->view("pelanggan/dashboard", $data, array(
                'tipekamar'  => $tipekamar));
	}

	
}