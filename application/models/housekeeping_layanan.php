<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_layanan extends CI_Model{
  public $table   = 'TB_LAYANAN';
  public $primary = 'ID_LAYANAN';

  public function __construct()
  {
    parent::__construct();
  //Codeigniter : Write Less Do More
  }

  public function list()
  {
    return $this ->db->get($this->table)->result();
  }

  public function edit($ID_LAYANAN)
  {
    $query = $this->db->where("ID_LAYANAN", $ID_LAYANAN)
            ->get("TB_LAYANAN");

    if ($query) {
      return $query->row();
    }else{
      return false;
    }

  }

  public function update($data, $id)
  {
    $query = $this->db->update("TB_LAYANAN", $data, $id);

    if($query){
      return true;
    }else{
      return false;
    }
  }

  public function delete($id)
  {
    return $this->db->delete($this->table, array("ID_LAYANAN" => $id));
  }

  public function select($select, $where)
  {
    return $this->db->select($select)
                    ->where($where)
                    ->order_by('TB_LAYANAN', 'ASC')
                    ->get($this->table);
  }

  public function list_tipe()
  {
    return $this ->db->get($this->table)->result();
  }

  public function getKamar()
  {
    $this->db->select('*');
    $this->db->from('TB_LAYANAN_KATEGORI');
    $this->db->join('TB_LAYANAN', 'TB_LAYANAN_KATEGORI.ID_LAYANAN_KATEGORI=TB_LAYANAN_KATEGORI.ID_LAYANAN_KATEGORI');

  }

  public function insert($value)
  {
    return $this->db->insert($this->table, $value);
  }

 }
