<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategorilayanan extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_Kategorilayanan');

    $this->load->library('form_validation');
    //Codeigniter : Write Less Do More
  }
   
  function edit($ID_LAYANAN_KATEGORI)
  {
    $kategorilayanan = $this->M_Kategorilayanan;

    $ID_LAYANAN_KATEGORI = $this->uri->segment(3);
    $data = array(
              'data_kategorilayanan'  => $this->M_Kategorilayanan->edit($ID_LAYANAN_KATEGORI));
    $this->load->view('kategorilayanan/update_layanan', $data);
  }

  function update()
  {
    $id['ID_LAYANAN_KATEGORI'] = $this->input->post('ID_LAYANAN_KATEGORI');
    $data = array(
            'NAMA_LAYANAN_KATEGORI'  => $this->input->post("NAMA_LAYANAN_KATEGORI"),
            'KETERANGAN'  => $this->input->post("KETERANGAN"),
    );

    $proses = $this->M_Kategorilayanan->update($data, $id);
    redirect(site_url('Kategorilayanan/tampil_list'));
  }

  function index()
  {
    $this->load->view('kategorilayanan/index');
  }
 
  function tampil_list()
  {
    $data["kategorilayanan"] = $this->M_Kategorilayanan->list_tipe();
    $this->load->view("Kategorilayanan/list_tipe", $data);
  }

  function tambah()
  {
    $data = array(
      'NAMA_LAYANAN_KATEGORI'     => $this->input->post("NAMA_LAYANAN_KATEGORI"),
      'KETERANGAN'                => $this->input->post("KETERANGAN")
    );

    $this->M_Kategorilayanan->insert($data);

    //redirect
    redirect('Kategorilayanan/tampil_list/');
  } 
}
