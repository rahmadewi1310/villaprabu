<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class masterdata extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('admin');
		
	}

	function admin($id = null){
		// $this->load->model('admin');
		if ($id != null) {
			
		}else{
			$data = $this->admin->find_all();
		}
	}

	function admin_post(){

	}

}