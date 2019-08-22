<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkin extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_checkin');
    $this->load->model('M_kamar');
 
    $this->load->library('form_validation');
    //Codeigniter : Write Less Do More
  }
    
  function index()
  {
    $checkin = $this->M_checkin;
    $kamar = $this->M_kamar->getAll();

    $this->load->view("checkin/index", array( 'kamar' => $kamar));
  }

  function tampil_list()
  {
    $data["checkin"] = $this->M_checkin->list_tipe();
    $this->load->view("checkin/tampil_list", $data);
  }

  function tambah()
  {
    $data = array(
      'ID_KAMAR'          => $this->input->post("ID_KAMAR"),
      'NAMA'    => $this->input->post("NAMA"),
      'TIPE_IDENTITAS'   => $this->input->post("TIPE_IDENTITAS"),
      'NOMOR_IDENTITAS'    => $this->input->post("NOMOR_IDENTITAS"),
      'ALAMAT'          => $this->input->post("ALAMAT"),
      'NOMOR_TELP'    => $this->input->post("NOMOR_TELP"),
      'TANGGAL_CHECKIN'   => $this->input->post("TANGGAL_CHECKIN"),
      'TANGGAL_CHECKOUT'    => $this->input->post("TANGGAL_CHECKOUT"),
      'TOTAL_BIAYA_KAMAR'   => $this->input->post("TOTAL_BIAYA_KAMAR")
    );

    $this->M_checkin->insert($data);

    //redirect
    redirect('Checkin/tampil_list/');
  } 

  function edit($ID_CHECKIN)
  {
    $checkin = $this->M_checkin;
    $kamar = $this->M_kamar->getAll();

    $ID_CHECKIN = $this->uri->segment(3);
    $data = array(
              'kamar'  => $kamar,
              'data_checkin'  => $this->M_checkin->edit($ID_CHECKIN));
    $this->load->view('checkin/update_checkin', $data);
  }

  function update()
  {
    $id['ID_CHECKIN'] = $this->input->post('ID_CHECKIN');
    $data = array(
      'ID_KAMAR'          => $this->input->post("ID_KAMAR"),
      'NAMA'    => $this->input->post("NAMA"),
      'TIPE_IDENTITAS'   => $this->input->post("TIPE_IDENTITAS"),
      'NOMOR_IDENTITAS'    => $this->input->post("NOMOR_IDENTITAS"),
      'ALAMAT'          => $this->input->post("ALAMAT"),
      'NOMOR_TELP'    => $this->input->post("NOMOR_TELP"),
      'TANGGAL_CHECKIN'   => $this->input->post("TANGGAL_CHECKIN"),
      'TANGGAL_CHECKOUT'    => $this->input->post("TANGGAL_CHECKOUT"),
      'TOTAL_BIAYA_KAMAR'   => $this->input->post("TOTAL_BIAYA_KAMAR"),
      'STATUS'    => $this->input->post("STATUS"),
    );

    $proses = $this->M_checkin->update($data, $id);
    redirect(site_url('checkin/tampil_list'));
  }

  function delete($id=null)
  {
    if(!isset($id)) show_404();

    if($this->M_checkin->delete($id)){
        redirect(site_url('checkin/tampil_list'));
    }
  }
}
