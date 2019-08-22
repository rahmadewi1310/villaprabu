<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{

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
    $data["kamar"] = $this->M_kamar->list_tipe();
    $this->load->view("housekeeping/dashboard1", $data, array(
                'tipekamar'  => $tipekamar));
  }

}
