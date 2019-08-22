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
    $this->load->view('housekeeping/kamar/index', array(
                'tipekamar'  => $tipekamar));
  }

  public function delete($id=null)
  {
    if(!isset($id)) show_404();

    if($this->M_kamar->delete($id)){
      redirect(site_url('housekeeping/kamar/tampil_list'));
    }
  }

  public function edit($ID_KAMAR)
  {
    //untuk memanggil combobox untuk tabel tipe kamar
    $tipe = $this->M_kamar_tipe->getAll();

    $ID_KAMAR = $this->uri->segment(3);
    $data = array('data_kamar' => $this->M_kamar->edit($ID_KAMAR),
                  'tipe'  => $tipe);

    $this->load->view('housekeeping/update_kamar', $data);
  }

  function update()
  {
    $id['ID_KAMAR'] = $this->input->post('ID_KAMAR');
    $data = array(
            'ID_KAMAR_TIPE'  => $this->input->post("ID_KAMAR_TIPE"),
            'NOMOR_KAMAR'  => $this->input->post("NOMOR_KAMAR"),
            'MAX_DEWASA'  => $this->input->post("MAX_DEWASA"),
            'MAX_ANAK'  => $this->input->post("MAX_ANAK"),
            'STATUS_KAMAR'  => $this->input->post("STATUS_KAMAR"),
    );

    $proses = $this->M_kamar->update($data, $id);
    redirect(site_url('housekeeping/Kamar/tampil_list'));
  }

  function tampil_list()
  {
    $kamar = $this->M_kamar;
    $tipekamar = $this->M_kamar_tipe->getAll();
    $data["kamar"] = $this->M_kamar->list_tipe();
    $this->load->view("housekeeping/kamar/list_tipe", $data, array(
                'tipekamar'  => $tipekamar));
  }

  function tambah()
  {
    $data = array(
      'ID_KAMAR_TIPE'     => $this->input->post("ID_KAMAR_TIPE"),
      'NOMOR_KAMAR'     => $this->input->post("NOMOR_KAMAR"),
      'MAX_DEWASA'       => $this->input->post("MAX_DEWASA"),
      'MAX_ANAK'      => $this->input->post("MAX_ANAK"),
      'STATUS_KAMAR'      => $this->input->post("STATUS_KAMAR")
    );

    $this->M_kamar->insert($data);

    //redirect
    redirect('housekeeping/Kamar/tampil_list/');
  }
}
