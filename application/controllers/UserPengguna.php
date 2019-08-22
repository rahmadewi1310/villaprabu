<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserPengguna extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_UserPengguna');

    $this->load->library('form_validation');
    //Codeigniter : Write Less Do More
  }
   
  function edit($ID_USER_ROLE)
  {
    $UserPengguna = $this->M_UserPengguna;

    $UserPengguna = $this->uri->segment(3);
    $data = array(
              'data_userpengguna'  => $this->M_UserPengguna->edit($ID_USER_ROLE));
    $this->load->view('userpengguna/update_pengguna', $data);
  }

  function update()
  {
    $id['ID_USER_ROLE'] = $this->input->post('ID_USER_ROLE');
    $data = array(
            'ROLE_NAME'  => $this->input->post("ROLE_NAME"),
            'KETERANGAN'  => $this->input->post("KETERANGAN"),
            'USERNAME'  => $this->input->post("USERNAME"),
            'PASSWORD'  => $this->input->post("PASSWORD"),
    );

    $proses = $this->M_UserPengguna->update($data, $id);
    redirect(site_url('UserPengguna/tampil_list'));
  }

  function index()
  {
    $this->load->view('userpengguna/index');
  }
 
  function tampil_list()
  {
    $data["userpengguna"] = $this->M_UserPengguna->list_pengguna();
    $this->load->view("userpengguna/list_pengguna", $data);
  }

  function tambah()
  {
    $data = array(
      'ROLE_NAME'     => $this->input->post("ROLE_NAME"),
      'KETERANGAN'    => $this->input->post("KETERANGAN"),
      'USERNAME'  => $this->input->post("USERNAME"),
      'PASSWORD'  => $this->input->post("PASSWORD")
    );

    $this->M_UserPengguna->insert($data);

    //redirect
    redirect('UserPengguna/tampil_list/');
  } 
}
