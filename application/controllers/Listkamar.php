<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listkamar extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $this->load->view('listkamar/index');
  }


}
