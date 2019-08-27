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

	function checkin($id){
		if ($id != null) 
			$this->M_booking->update($id, ['checkin' => date('Y-m-d')]);

		redirect('admin/book');
	}

	function checkout($id){
		if ($id != null) 
			$this->M_booking->update($id, ['checkout' => date('Y-m-d')]);

		redirect('admin/book');
	}

	function bayar($id){
		if ($id != null) {
			$book = $this->M_booking->get_all_booking(['tb_book.id' => '= \''.$id.'\''])->row();
			$data = $this->input->post();
			$sisa = ($book->tagihan_kamar + $book->tagihan_layanan) - $book->total_bayar;
			if (($sisa - $data['nominal']) > 0) {
				$data['nominal'] = $sisa;
			}

			$this->M_booking->bayar($id, $data);
		}
		redirect('admin/book/detail/'.$id);
	}

	public function tambah_layanan($id_book=null){
		$this->load->view('admin/tambah_layanan');
	}

	public function tambah_pembayaran($id_book=null){
		$d['data'] = $this->M_booking->get_all_booking(['tb_book.id' => ' = \''.$id_book.'\''])->row_array();
		$this->load->view('admin/tambah_pembayaran', $d);
	}

}

/* End of file Book.php */
/* Location: ./application/controllers/Admin/Book.php */