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
 }
