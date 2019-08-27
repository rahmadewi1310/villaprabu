<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('M_booking');
	}

	public function index(){
		$data = array('book' => $this->M_booking->select('TERKONFIRMASI')->result(), );
		$this->load->view('admin/book', $data);
	}

	public function booking_order(){
		$data = array('book' => $this->M_booking->select('BARU')->result(), );
		$this->load->view('admin/book_order', $data);
	}

	public function detail($id){
		$data['data'] = $this->M_booking->get_booking($id);	
		$this->load->view('admin/detailbook', $data);
		echo json_encode($data);
	}

	public function konfirmasi($id = null){
		if ($id != null) 
			$this->M_booking->update($id, ['status' => 'TERKONFIRMASI']);

		redirect('admin/book/booking_order');
	}

	public function reject($id = null){
		if ($id != null) 
			$this->M_booking->delete($id);

		redirect('admin/book/booking_order');
	}

	
	public function tambah_layanan($id_book=null){
		$this->load->view('admin/tambah_layanan');
	}

}

/* End of file Book.php */
/* Location: ./application/controllers/Admin/Book.php */