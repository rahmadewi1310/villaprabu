<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tipekamar extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_kamar_tipe');
 
    $this->load->library('form_validation');
    //Codeigniter : Write Less Do More
  }
 
  function index()
  {
    $this->load->view('tipekamar/index');
  }

  public function delete($id=null)
  {
    if(!isset($id)) show_404();

    if($this->M_kamar_tipe->delete($id)){
      redirect(site_url('Tipekamar/tampil_list'));
    }
  }

  function edit($ID_KAMAR_TIPE)
  {
    $tipekamar = $this->M_kamar_tipe;
   
    $ID_KAMAR_TIPE = $this->uri->segment(3);
    $data = array(
             'data_kamartipe'  => $this->M_kamar_tipe->edit($ID_KAMAR_TIPE));
    $this->load->view('tipekamar/update_kamar', $data);
  }

  function update()
  {
    $id['ID_KAMAR_TIPE'] = $this->input->post('ID_KAMAR_TIPE');
    $data = array(
            'NAMA_KAMAR_TIPE'     => $this->input->post("NAMA_KAMAR_TIPE"),
      'HARGA_MALAM'       => $this->input->post("HARGA_MALAM"),
      'KETERANGAN' => $this->input->post("KETERANGAN"),
    );

    $proses = $this->M_kamar_tipe->update($data, $id);
    redirect(site_url('Tipekamar/tampil_list'));
  }
  
    function tampil_list()
  {
    $data["tipekamar"] = $this->M_kamar_tipe->list_tipe();
    $this->load->view("Tipekamar/list_tipe", $data);
  }

  function tambah()
  {
    $data = array(
      'NAMA_KAMAR_TIPE'     => $this->input->post("NAMA_KAMAR_TIPE"),
      'HARGA_MALAM'       => $this->input->post("HARGA_MALAM"),
      'KETERANGAN' => $this->input->post("KETERANGAN")
    );

    $this->M_kamar_tipe->insert($data);

    //redirect
    redirect('Tipekamar/tampil_list/');
  } 
}
