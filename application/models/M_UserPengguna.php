<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_UserPengguna extends CI_Model{
  public $table   = 'TB_USER_ROLE';
  public $primary = 'ID_USER_ROLE';

  public function __construct()
  {
    parent::__construct();
  //Codeigniter : Write Less Do More
  }

  public function list()
  {
    return $this ->db->get($this->table)->result();
  }
 
  public function edit($ID_USER_ROLE)
  {
    $query = $this->db->where("ID_USER_ROLE", $ID_USER_ROLE)
            ->get("TB_USER_ROLE");
 
    if ($query) {
      return $query->row();
    }else{
      return false;
    }

  }
  
  public function update($data, $id)
  {
    $query = $this->db->update("TB_USER_ROLE", $data, $id);

    if($query){
      return true;
    }else{
      return false;
    }
  }

  public function delete($id)
  {
    return $this->db->delete($this->table, array("ID_USER_ROLE" => $id));
  }

  public function select($select, $where)
  {
    return $this->db->select($select)
                    ->where($where)
                    ->order_by('ID_USER_ROLE', 'ASC')
                    ->get($this->table);
  }

  public function list_pengguna()
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
