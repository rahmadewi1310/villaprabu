<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{

  function __construct()
  {
    parent::__construct();
	if($this->session->userdata('username') == '' && $this->session->userdata('email') == ''){
		redirect('admin/login');
	}
  }

  function index()
  {
    $this->load->view('welcome_message.php');
  }

}
