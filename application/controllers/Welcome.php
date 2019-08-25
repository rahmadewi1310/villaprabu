<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		if ($this->input->get('booking') != null) {
			$this->booking();
		}else{
			$this->load->model('M_kamar');
			$checkin = $this->input->get('check_in');
			$checkout = $this->input->get('check_out');
			$person = $this->input->get('person');
			$data['checkin'] = ($checkin == null)?date("Y-m-d"):$checkin;
			$data['checkout'] = ($checkout == null)?(((new DateTime($data['checkin']))->modify('+1 day'))->format('Y-m-d')):$checkout;
			$data['night'] = ((new DateTime($checkout))->diff(new DateTime($checkin)))->d;
			$data['room'] = $this->M_kamar->cari_kamar($checkin, $checkout, $person);
			// echo "}";
			$this->load->view('welcome_message', $data);
		}
	}

	function booking(){
		$room_id = $this->input->get('booking');
		$checkin = $this->input->get('check_in');
		$checkout = $this->input->get('check_out');
		$diff = (new DateTime($checkout))->diff(new DateTime($checkin));
	}
}
