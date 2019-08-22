<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Kategorilayanan extends CI_Model{
  public $table   = 'TB_LAYANAN_KATEGORI';
  public $primary = 'ID_LAYANAN_KATEGORI';

  public function __construct()
  {
    parent::__construct();
  //Codeigniter : Write Less Do More
  }

  public function list()
  {
    return $this ->db->get($this->table)->result();
  }
 
  public function edit($ID_LAYANAN_KATEGORI)
  {
    $query = $this->db->where("ID_LAYANAN_KATEGORI", $ID_LAYANAN_KATEGORI)
            ->get("TB_LAYANAN_KATEGORI");
 
    if ($query) {
      return $query->row();
    }else{
      return false;
    }

  }
  
  public function update($data, $id)
  {
    $query = $this->db->update("TB_LAYANAN_KATEGORI", $data, $id);

    if($query){
      return true;
    }else{
      return false;
    }
  }

  public function delete($id)
  {
    return $this->db->delete($this->table, array("ID_LAYANAN_KATEGORI" => $id));
  }

  public function select($select, $where)
  {
    return $this->db->select($select)
                    ->where($where)
                    ->order_by('ID_LAYANAN_KATEGORI', 'ASC')
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
