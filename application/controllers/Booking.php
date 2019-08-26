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

      $i = 0; $tagihan = array();
      foreach ($data['tagihan'] as $item) {
        $tagihan[$i] = array(
          'tanggal' => $item['date'],
          'room_id' => $item['room_id'],
          'harga' => $item['biaya']
        );
        $i++;
      }

      $this->load->model('M_booking');
      $result = $this->M_booking->create_booking(
        array(
          'nama' => $nama,
          'email' => $email,
          'phone' => $phone,
          'alamat' => $alamat,
          'no_rek' => $no_rek
        ),
        array(
          'tgl_book' => date('Y-m-d'),
          'status' => 'BARU'
        ),
        $tagihan
      );
      if ($result != null) {
        $this->session->set_userdata('id_booking', $result);
      }
    }
    redirect('booking/open/'.$result);
  }

  function open($id = null){
    if ($id == null) {
      $id = $this->input->get('kode');
    }
    $this->load->model('M_booking');
    $data['data'] = $this->M_booking->get_booking($id);
    $this->load->view('check_booking', $data);
    echo json_encode($data);
  }

}
