<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('M_booking');
	}

	public function index()
	{
		$data = array('book' => $this->M_booking->select()->result(), );
		$this->load->view('admin/book', $data);
	}
	public function detailbook(){
		$data = array('book' => $this->M_booking->select()->result(), );	
		$this->load->view('admin/detailbook', $data);
	}

}

/* End of file Book.php */
/* Location: ./application/controllers/Admin/Book.php */