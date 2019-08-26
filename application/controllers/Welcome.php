<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		if ($this->input->get('booking') != null) {
			$this->booking_form();
		
		}else{
			$this->load->model('M_kamar');
			$checkin = $this->input->get('check_in');
			$checkout = $this->input->get('check_out');
			$person = $this->input->get('person');
			$data['checkin'] = ($checkin == null)?date("Y-m-d"):$checkin;
			$data['checkout'] = ($checkout == null)?(((new DateTime($data['checkin']))->modify('+1 day'))->format('Y-m-d')):$checkout;
			$data['night'] = ((new DateTime($data['checkin']))->diff(new DateTime($data['checkout'])))->days;
			$data['room'] = $this->M_kamar->cari_kamar($data['checkin'], $data['checkout'], $person);
			// echo "}";
			$this->load->view('welcome_message', $data);
		}
	}

	function booking_form(){
		$this->load->model('M_kamar');
		$room_id = $this->input->get('booking');
		$data['checkin'] = $this->input->get('check_in');
		$data['checkout'] = $this->input->get('check_out');
		$data['night'] = (new DateTime($data['checkout']))->diff(new DateTime($data['checkin']))->days;
		$data['room'] =  $this->M_kamar->get_kamar($room_id);
		$tagihan = array();

		$checkin = new DateTime($data['checkin']);
		for ($i=0; $i < $data['night']; $i++) {
			$item = new stdClass();
			$item->date = ($checkin->modify('+'.$i.' day'))->format('Y-m-d');
			$item->room_id = $room_id;
			$item->kamar = $data['room']->no_kamar;
			$item->biaya = $data['room']->harga;
			$tagihan[$i] = $item;
		}

		$data['tagihan'] = $tagihan;
		$data['data'] = json_encode($data);

		$this->load->view('booking_form', $data);
	}


}
