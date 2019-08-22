<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class M_cart extends CI_Model {
 
 public function getLayanan($id)
 {

    $this->db->where('ID_LAYANAN', $id);
    $ambilData = $this->db->get('tb_layanan');
    return $ambilData->row();
 }

 public function tambah_order($data)
 {
 	$this->db->insert('tb_order_layanan', $data);
 	$id = $this->db->insert_id();
 	return (isset($id)) ? $id : FALSE;
 }

 public function tambah_detail_order($data)
 {
 	$this->db->insert('tb_detail_order_layanan', $data);
 }

    
}
