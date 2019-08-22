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
    $this->load->view('welcome_message.php');
  }

}
