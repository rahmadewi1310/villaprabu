<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller{

  function index(){
    if ($this->input->post('data') != null) {
      $data = json_decode($this->input->post('data'), true);
      $nama = $this->input->post('nama');
      $email = $this->input->post('email');
      $phone = $this->input->post('phone_number');
      $alamat = $this->input->post('alamat');
      $no_rek = $this->input->post('no_rek');

      
    }
  }

}
