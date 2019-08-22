<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kamar_tipe extends CI_Model{
  public $table   = 'TB_KAMAR_TIPE';
  public $primary = 'ID_KAMAR_TIPE';

  public function __construct()
  {
    parent::__construct();
  //Codeigniter : Write Less Do More
  }
 
  public function list()
  {
    return $this ->db->get($this->table)->result();
  }

  public function edit($ID_KAMAR_TIPE)
  {
    $query = $this->db->where("ID_KAMAR_TIPE", $ID_KAMAR_TIPE)
    ->get("TB_KAMAR_TIPE");
 
    if ($query) {
      return $query->row();
    }else{
      return false;
    }

  }

  public function update($data, $id)
  {
    $query = $this->db->update("TB_KAMAR_TIPE", $data, $id);

    if($query){
      return true;
    }else{
      return false;
    }
  }

  public function delete($id)
  {
    return $this->db->delete($this->table, array("ID_KAMAR_TIPE" => $id));
  }

  public function select($select, $where)
  {
    return $this->db->select($select)
                    ->where($where)
                    ->order_by('ID_KAMAR_TIPE', 'ASC')
                    ->get($this->table);
  }

  public function list_tipe()
  {
    return $this ->db->get($this->table)->result();
  }

  public function getAll(){
    return $this->db->get($this->table)->result_array();
  }

  public function insert($value)
  {
    return $this->db->insert($this->table, $value);
  }

 }
