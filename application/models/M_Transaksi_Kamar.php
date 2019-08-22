<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class M_Transaksi_Kamar extends CI_Model {
 
    public function getData()
    {
        $query = $this->db->get('TB_BOOKING');
        		 $this->db->join('TB_KAMAR', 'TB_KAMAR.ID_KAMAR=TB_BOOKING.ID_KAMAR');
        return $query->result_array();
    }
}
?>