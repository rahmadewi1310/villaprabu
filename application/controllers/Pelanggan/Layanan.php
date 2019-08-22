<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layanan extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('pelanggan_layanan');
    $this->load->model('M_kategorilayanan');
    $this->load->model('M_layanan');
    $this->load->model('M_cart');
    //$this->load->model('M_pelanggan');
    $this->load->library('form_validation');
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $data["layanan"] = $this->M_layanan->getLayanan();
    $this->load->view("pelanggan/layanan/index",$data);
  }

  function addCart($id)
  {
    $ambilData = $this->M_cart->getLayanan($id);
    $data = array('id' => $ambilData->ID_LAYANAN,
            'qty' => 1,
            'price' => $ambilData->HARGA_LAYANAN,
            'name' => $ambilData->NAMA_LAYANAN);
    $this->cart->insert($data);
    $this->load->view("pelanggan/layanan/tampil_cart");
  }

  function hapusCart($rowid)
  {
    $this->cart->update(array('rowid' => $rowid, 'qty' => 0));
    $this->load->view("pelanggan/layanan/tampil_cart");
  }

  function updateCart()
  {
    $i = 1;
    foreach ($this->cart->contents() as $layanan) {
      $this->cart->update(array('rowid' => $layanan['rowid'], 'qty' => $_POST['qty'.$i]));
      $i++;
    }
    $this->load->view("pelanggan/layanan/tampil_cart");
  }

  function check_out()
  {
        $config = array();
        $config['charset'] = 'utf-8';
        $config['useragent'] = 'Codeigniter';
        $config['protocol'] = "smtp";
        $config['mailtype'] = "html";
        $config['smtp_host'] = "ssl://smtp.gmail.com";
        $config['smtp_port'] = "465";
        $config['smtp_timeout'] = "400";
        $config["smtp_user"] = "watersportmawarkuning@gmail.com";
        $config['smtp_pass'] = "tachris2019";
        $config['crlf'] = "\r\n";
        $config['newline'] = "\r\n";
        $config['wordwrap'] = TRUE;

                    
        $this->load->library('email', $config);
        $this->email->initialize($config);
        $this->email->from($config['smtp_user']);
        $this->email->to('rahmasiti413@gmail.com');
        $this->email->subject("Hello Admin");
        $this->email->message("Ada Pelanggan Yang Memesan Layanan");
        $this->email->send();
        

        $data_order = array('TGL' => date('Y-m-d'),
                     'ID_PELANGGAN' =>$this->session->userdata('ID_PELANGGAN'),
                     'TOTAL_BAYAR' =>$this->cart->total()
          );
      $id_order = $this->M_cart->tambah_order($data_order);

      if ($cart = $this->cart->contents())
      {
        foreach($cart as $item)
        {
          $data_detail = array(
                     'ID_LAYANAN' => $item['id'],
                     'JUMLAH' => $item['qty'],
                    'ID_ORDER' => $id_order);
          $proses = $this->M_cart->tambah_detail_order($data_detail);
        }
      }
      redirect("pelanggan/booking/berhasil"); 
  }
   
}
