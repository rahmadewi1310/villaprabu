<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_checkin extends CI_Model{
  public $table   = 'TB_CHECKIN';
  public $primary = 'ID_CHECKIN';

  public function __construct()
  {
    parent::__construct();
  //Codeigniter : Write Less Do More
  }
  
  public function list()
  {
    return $this ->db->get($this->table)->result();
  }
  
  public function edit($ID_CHECKIN)
  {
    $query = $this->db->where("ID_CHECKIN", $ID_CHECKIN)
            ->get("TB_CHECKIN");
 
    if ($query) {
      return $query->row();
    }else{
      return false;
    }

  }

  public function update($data, $id)
  {
    $query = $this->db->update("TB_CHECKIN", $data, $id);

    if($query){
      return true;
    }else{
      return false;
    }
  }

  public function delete($id)
  {
    return $this->db->delete($this->table, array("ID_CHECKIN" => $id));
  }

    public function list_tipe()
  {
    $this->db->select('*');
    $this->db->from('TB_CHECKIN');
    $this->db->join('TB_KAMAR', 'TB_KAMAR.ID_KAMAR=TB_CHECKIN.ID_KAMAR');
    $query = $this->db->get();
    return $query->result();
  }

  public function getAll(){
    return $this->db->get($this->table)->result_array();
  }

  public function insert($value)
  {
    return $this->db->insert($this->table, $value);
  }

  public function getKamar($ID_KAMAR)
  {
    $query = $this->db->where("ID_KAMAR", $ID_KAMAR)
                ->get("TB_KAMAR");

        if($query){
            return $query->row();
        }else{
            return false;
        }
  }

 }
