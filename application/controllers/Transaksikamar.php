<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksikamar extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_booking');
    $this->load->model('M_Transaksi_Kamar');
    $this->load->library('Pdf');
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $data["booking"] = $this->M_booking->list_tipe();
    $this->load->view("transaksikamar/index", $data);
  }

  function cetak()
  {
    $data['booking'] = $this->M_Transaksi_Kamar->getData();
            $this->load->view('transaksikamar/cetak_pdf', $data);
  }
}
