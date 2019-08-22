<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kamar extends CI_Model{
  public $table   = 'TB_KAMAR';
  public $primary = 'ID_KAMAR';

  public function __construct()
  {
    parent::__construct();
  //Codeigniter : Write Less Do More
  }

  public function list()
  {
    return $this ->db->get($this->table)->result();
  }

  public function edit($ID_KAMAR)
  {
    $query = $this->db->where("ID_KAMAR", $ID_KAMAR)
              ->get("TB_KAMAR");

    if ($query) {
      return $query->row();
    }else{
      return false;
    }
  }

  public function update($data, $id)
  {
    $query = $this->db->update("TB_KAMAR", $data, $id);

    if($query){
      return true;
    }else{
      return false;
    }
  }

  public function delete($id)
  {
    return $this->db->delete($this->table, array("ID_KAMAR" => $id));
  }

  public function select($select, $where)
  {
    return $this->db->select($select)
                    ->where($where)
                    ->order_by('ID_KAMAR', 'ASC')
                    ->get($this->table);
  }

  public function list_tipe()
  {
    $this->db->select('*');
    $this->db->from('TB_KAMAR');
    $this->db->join('TB_KAMAR_TIPE', 'TB_KAMAR_TIPE.ID_KAMAR_TIPE=TB_KAMAR.ID_KAMAR_TIPE');
    $query = $this->db->get();
    return $query->result();
  }

  public function list_dashboard() //untuk dashboard pelanggan
  {
    $this->db->select('*');
    $this->db->from('TB_KAMAR');
    $this->db->join('TB_KAMAR_TIPE', 'TB_KAMAR_TIPE.ID_KAMAR_TIPE=TB_KAMAR.ID_KAMAR_TIPE');
    $this->db->where('TB_KAMAR.STATUS_KAMAR', 'TERSEDIA');
    $query = $this->db->get();
    return $query->result();
  }


  public function getKamar()
  {
    $this->db->select('*');
    $this->db->from('TB_KAMAR_TIPE');
    $this->db->join('TB_KAMAR', 'TB_KAMAR_TIPE.ID_KAMAR_TIPE=TB_KAMAR_TIPE.ID_KAMAR_TIPE');
    $query = $this->db->get();
    return $query->result();
  }

  public function insert($value)
  {
    return $this->db->insert($this->table, $value);
  }

  public function getAll(){
    return $this->db->get($this->table)->result_array();
  }

 }
