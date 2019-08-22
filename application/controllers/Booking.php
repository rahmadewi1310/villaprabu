<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_booking');
    $this->load->model('M_kamar');
 
    $this->load->library('form_validation');
    //Codeigniter : Write Less Do More
  }
    
  function index()
  {
    $booking = $this->M_booking;
    $kamar = $this->M_kamar->getAll();

    $this->load->view("booking/tambah", array( 'kamar' => $kamar));
  }

  function tampil_list()
  {
    $data["booking"] = $this->M_booking->list_tipe();
    $this->load->view("Booking/list_booking", $data);
  }

  function tambah()
  {
    $data = array(
      'NAMA'          => $this->input->post("NAMA"),
      'TANGGAL_IN'    => $this->input->post("TANGGAL_IN"),
      'TANGGAL_OUT'   => $this->input->post("TANGGAL_OUT"),
      'JMLH_KAMAR'    => $this->input->post("JMLH_KAMAR")
    );

    $this->M_booking->insert($data);

    //redirect
    redirect('Booking/tampil_list/');
  } 

  function edit($ID_BOOKING)
  {
    $booking = $this->M_booking;
    $kamar = $this->M_kamar->getAll();

    $ID_BOOKING = $this->uri->segment(3);
    $data = array(
              'kamar'  => $kamar,
              'data_booking'  => $this->M_booking->edit($ID_BOOKING));
    $this->load->view('booking/update_booking', $data);
  }

  function update()
  {
    $id['ID_BOOKING'] = $this->input->post('ID_BOOKING');
    $data = array(
            'NAMA'  => $this->input->post("NAMA"),
            'TANGGAL_IN'  => $this->input->post("TANGGAL_IN"),
            'TANGGAL_OUT'  => $this->input->post("TANGGAL_OUT"),
            'STATUS'  => $this->input->post("STATUS"),
    );

    $proses = $this->M_booking->update($data, $id);
    redirect(site_url('booking/tampil_list'));
  }

  function delete($id=null)
  {
    if(!isset($id)) show_404();

    if($this->M_booking->delete($id)){
        redirect(site_url('booking/tampil_list'));
    }
  }
}
