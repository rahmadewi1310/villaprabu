<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kamar extends CI_Model{

  function cari_kamar($start_date, $end_date, $person){
    $sql = "SELECT tb_room.* FROM tb_room 
      WHERE (
        SELECT count(tb_detail_book.id) FROM tb_detail_book INNER JOIN tb_book ON tb_detail_book.book_id = tb_book.id  
        WHERE (tb_detail_book.tanggal BETWEEN '$start_date' AND '$end_date') 
        AND tb_detail_book.room_id = tb_room.id
        AND tb_book.status = 'TERKONFIRMASI' 
      ) <= 0 AND '$start_date' < '$end_date';";

    // echo "{\"sql\":\"".$sql."\", \"data\":";
    return $this->db->query($sql)->result();
  }
}
