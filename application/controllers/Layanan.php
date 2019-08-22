<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layanan extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_layanan');
    $this->load->model('M_kategorilayanan');
    $this->load->library('form_validation');
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $layanan = $this->M_layanan;
    $layanankategori = $this->M_kategorilayanan->getAll();
    $this->load->view('layanan/index', array(
                'layanankategori'  => $layanankategori,));
  }
 
  function tampil_list()
  {
    // $layanan = $this->M_layanan;
    // $layanankategori = $this->M_kategorilayanan->getAll();
    // $data["layanan"] = $this->M_layanan->list_tipe();
    // $this->load->view("layanan/list_tipe", $data, array(
    //             'layanankategori'  => $layanankategori, $data));

    $data["layanan"] = $this->M_layanan->list();
    $this->load->view("layanan/list_tipe", $data);
  }

  function tambah()
  {
    $data = array(
      'ID_LAYANAN_KATEGORI'     => $this->input->post("ID_LAYANAN_KATEGORI"),
      'NAMA_LAYANAN'            => $this->input->post("NAMA_LAYANAN"),
      'SATUAN'                  => $this->input->post("SATUAN"),
      'HARGA_LAYANAN'           => $this->input->post("HARGA_LAYANAN")
    );

    $this->M_layanan->insert($data);

    //redirect
    redirect('layanan/tampil_list/');
  }

   function edit($ID_LAYANAN)
  {
    $booking = $this->M_layanan;
    $tipe = $this->M_kategorilayanan->getAll();

    $ID_LAYANAN = $this->uri->segment(3);
    $data = array(
              'tipe'          => $tipe,
              'data_layanan'  => $this->M_layanan->edit($ID_LAYANAN));
    $this->load->view('layanan/update_layanan', $data);
  }

  function update()
  {
    $id['ID_LAYANAN'] = $this->input->post('ID_LAYANAN');
    $data = array(
            'ID_LAYANAN_KATEGORI'  => $this->input->post("ID_LAYANAN_KATEGORI"),
            'NAMA_LAYANAN'  => $this->input->post("NAMA_LAYANAN"),
            'SATUAN'  => $this->input->post("SATUAN"),
            'HARGA_LAYANAN'  => $this->input->post("HARGA_LAYANAN"),
    );

    $proses = $this->M_layanan->update($data, $id);
    redirect(site_url('layanan/tampil_list'));
  } 
}
