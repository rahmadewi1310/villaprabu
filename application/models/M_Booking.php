<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_booking extends CI_Model{

  public function __construct()
  {
    parent::__construct();
  //Codeigniter : Write Less Do More
  }
  function select(){
    $this->db->select('tb_book.*,tb_pelanggan.*');
    $this->db->from('tb_book');
    $this->db->join('tb_pelanggan', 'tb_book.id_pelanggan = tb_pelanggan.id', 'left');
    return $this->db->get();
  }

  function create_booking($pelanggan = array(), $booking = array(), $detail_booking = array()){
    $book_id = $this->create_booking_id();
    $booking['id'] = $book_id;
    $x_pelanggan = $this->db->get_where('tb_pelanggan', ['email' => $pelanggan['email']])->row();
    if ($x_pelanggan == null) {
      $this->db->insert('tb_pelanggan', $pelanggan);
    }

    $booking['id_pelanggan'] = $x_pelanggan->id;
    $book = $this->db->insert('tb_book', $booking);
    if($book) {
      $detail = false;
      foreach($detail_booking as $item) {
        $item['book_id'] = $book_id;
        $detail = $this->db->insert('tb_detail_book', $item);
      }
      if ($detail) {
        return $book_id;
      } return null;
    } return null;
  }

  function create_booking_id(){
    return date('YmdHis').(explode(" ", microtime())[1]);
  }
}
