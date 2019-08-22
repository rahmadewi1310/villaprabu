<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('pelanggan_booking');
    $this->load->model('M_kamar_tipe');
    $this->load->model('M_kamar');
 
    $this->load->library('form_validation');
    //Codeigniter : Write Less Do More
  }
    
  function index()
  {
    $data["booking"] = $this->pelanggan_booking->list_tipe();
    $this->load->view("pelanggan/Booking/list_booking", $data);
  }

  function add($ID_KAMAR)
  {
    
    $ID_KAMAR = $this->uri->segment(3);
    $data = array('data_kamar' => $this->M_kamar->getKamar($ID_KAMAR));
    $this->load->view('pelanggan/booking/tambah', $data);
  }

  function tampil_list()
  {
    $data["booking"] = $this->pelanggan_booking->list_tipe();
    $this->load->view("pelanggan/Booking/list_booking", $data);
  }

  function berhasil()
  {
    $this->load->view('pelanggan/booking/booking_berhasil');
  }

  function tambah()
  {
    $data = array(
      'NAMA'          => $this->input->post("NAMA"),
      'TANGGAL_IN'    => $this->input->post("TANGGAL_IN"),
      'TANGGAL_OUT'   => $this->input->post("TANGGAL_OUT"),
      'ID_KAMAR'      => $this->input->post("ID_KAMAR"),
    );

    $this->pelanggan_booking->insert($data);

    //kirim email notifikasi ke admin kalo ada pelanggan yg booking
        $config = array();
        $config['charset'] = 'utf-8';
        $config['useragent'] = 'Codeigniter';
        $config['protocol'] = "smtp";
        $config['mailtype'] = "html";
        $config['smtp_host'] = "ssl://smtp.gmail.com";
        $config['smtp_port'] = "465";
        $config['smtp_timeout'] = "400";
        $config["smtp_user"] = "watersportmawarkuning";
        $config['smtp_pass'] = "tachris2019";
        $config['crlf'] = "\r\n";
        $config['newline'] = "\r\n";
        $config['wordwrap'] = TRUE;

        $no_pesanan = $this->input->post('ID_BOOKING');
                    
        $this->load->library('email', $config);
        $this->email->initialize($config);
        $this->email->from($config['smtp_user']);
        $this->email->to("chrismahayani@gmail.com");
        $this->email->subject("Halo Admin!");
        $this->email->message("Ada data reservasi baru masuk dengan no booking $no_pesanan Harap segera dikonfirmasi!!");
        $this->email->send();

    //redirect
    redirect('pelanggan/Booking/berhasil/');
  } 

  function edit($ID_BOOKING)
  {
    $booking = $this->pelanggan_booking;
    $tipe = $this->M_kamar_tipe->getAll();

    $ID_BOOKING = $this->uri->segment(3);
    $data = array(
              'tipe'  => $tipe,
              'data_booking'  => $this->pelanggan_booking->edit($ID_BOOKING));
    $this->load->view('pelanggan/booking/update_booking', $data);
  }

  function update()
  {
    $id['ID_BOOKING'] = $this->input->post('ID_BOOKING');
    $data = array(
            'NAMA'  => $this->input->post("NAMA"),
            'TANGGAL_IN'  => $this->input->post("TANGGAL_IN"),
            'TANGGAL_OUT'  => $this->input->post("TANGGAL_OUT"),
            'ID_KAMAR_TIPE'  => $this->input->post("ID_KAMAR_TIPE"),
            'JMLH_KAMAR'  => $this->input->post("JMLH_KAMAR"),
    );

    $proses = $this->pelanggan_booking->update($data, $id);
    redirect(site_url('pelanggan/booking/tampil_list'));
  }

  function delete($id=null)
  {
    if(!isset($id)) show_404();

    if($this->pelanggan_booking->delete($id)){
        redirect(site_url('pelanggan/booking/tampil_list'));
    }
  }
}
