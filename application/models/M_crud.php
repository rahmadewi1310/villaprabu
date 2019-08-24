<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_crud extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function select($tabel){
		return $this->db->get($tabel);
	}
	public function selectwhere($tabel,$where){
		$this->db->where($where);
		return $this->db->get($tabel);

	}
	
	public function insert($tabel,$data){
		$this->db->insert($tabel, $data);
	}

	public function update($tabel,$data,$where){
		$this->db->where($where);
		$this->db->update($tabel, $data);
	}
	public function delete($tabel,$where){
		$this->db->where($where);
		$this->db->delete($tabel);
	}
}

/* End of file M_crud.php */
/* Location: ./application/models/M_crud.php */