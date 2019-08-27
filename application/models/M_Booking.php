<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_booking extends CI_Model{

  public function __construct()
  {
    parent::__construct();
  //Codeigniter : Write Less Do More
  }
  function select(){
    $this->db->select('tb_book.*,tb_pelanggan.nama, tb_pelanggan.email, tb_pelanggan.phone, tb_pelanggan.alamat, tb_pelanggan.no_rek');
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

  function get_booking($id = null){
    if ($id == null) {
      return null;
    }else{
      $book = $this->db->query("SELECT 
                    tb_book.*, 
                    tb_pelanggan.nama as 'nama_pelanggan',
                    tb_pelanggan.email as 'email',
                    tb_pelanggan.phone as 'phone',
                    count(tb_detail_book.id) as 'night', 
                    sum(tb_detail_book.harga) as 'total'
                    FROM tb_book LEFT JOIN tb_pelanggan ON tb_book.id_pelanggan = tb_pelanggan.id 
                    LEFT JOIN tb_detail_book ON tb_detail_book.book_id = tb_book.id 
                    WHERE tb_book.id = '$id'")->row_array();
      if ($book != null) {
        $detail = $this->db->query("SELECT tb_detail_book.*, 
                    tb_room.no_kamar as 'nama_kamar'
                    FROM tb_detail_book LEFT JOIN tb_room ON tb_detail_book.room_id = tb_room.id 
                    WHERE tb_detail_book.book_id = '$id'  ORDER BY tb_detail_book.tanggal ASC;")->result_array();
        $i = 0;
        foreach ($detail as $item) {
          $detail[$i]['detail'] = $this->db->query("SELECT * FROM tb_item_layanan WHERE book_detail_id = '".$item['id']."'")->result_array();
          $i++;
        }

        if ($i > 0) {
          $book['checkin'] = $detail[0]['tanggal'];
          $book['checkout'] = $detail[count($detail) -1]['tanggal'];
        }
        $book['detail'] = $detail;

        $book['pembayaran'] = $this->db->get_where('tb_pembayaran', ['book_id' => $id])->result_array();
      }
      return $book;
    }
  }
}
