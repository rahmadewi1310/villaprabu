<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kamar extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_kamar');
    $this->load->model('M_kamar_tipe');
    $this->load->library('form_validation');
    //Codeigniter : Write Less Do More
  }
  
  function index()
  {
    $kamar = $this->M_kamar;
    $tipekamar = $this->M_kamar_tipe->getAll();
    $this->load->view('kamar/index', array(
                'tipekamar'  => $tipekamar,));
  }

  

  function tampil_list()
  {
    $kamar = $this->M_kamar;
    $tipekamar = $this->M_kamar_tipe->getAll();
    $data["kamar"] = $this->M_kamar->list_tipe();
    $this->load->view("kamar/list_tipe", $data, array(
                'tipekamar'  => $tipekamar,));
  }

  function tambah()
  {
    $data = array(
      'ID_KAMAR_TIPE'     => $this->input->post("ID_KAMAR_TIPE"),
      'NOMOR_KAMAR'     => $this->input->post("NOMOR_KAMAR"),
      'MAX_DEWASA'       => $this->input->post("MAX_DEWASA"),
      'MAX_ANAK'      => $this->input->post("MAX_ANAK")

    );

    $this->M_kamar->insert($data);

    //redirect
    redirect('kamar/tampil_list/');
  } 
}
