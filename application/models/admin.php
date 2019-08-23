<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Model{
	private static $table = 'tb_admin';

	function validasi($username, $password){
		return $this->db->get_where(self::$table, [
			'username' => $username,
			'password' => $password
		])->row();
	}

	function find_all($page = 0){
		$this->db->get(self::$table)->result();
	}
}