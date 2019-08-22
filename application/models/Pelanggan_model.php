<?php defined('BASEPATH') OR exit('NO direct script access allowed');

class Pelanggan_model extends CI_Model
{
	private $_table = "tb_pelanggan";
	
	public function save($data)
	{
		$this->db->insert('tb_pelanggan', $data);
		$id = $this->db->insert_id();
		return(isset($id)) ? $id: FALSE;
	}
}
