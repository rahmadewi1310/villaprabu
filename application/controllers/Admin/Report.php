<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('pdf');
		$this->load->model('M_report');
		$this->load->model('M_booking');
	}
	function reportbooking(){

		$data = array('book' => $this->M_booking->select()->result(), );
		$this->load->view('admin/reportbooking',$data);
	}
	function reportpelanggan(){
		$this->load->view('admin/reportpelanggan');
	}
	function reportkamar(){
		$this->load->view('admin/reportkamar');
	}
	function cetakreportbooking()
  	{
        $pdf = new Pdf('P', 'mm', 'A5', true, 'UTF-8', false);
	    $pdf->SetTitle('Daftar Produk');
	    $pdf->SetHeaderMargin(30);
	    $pdf->SetTopMargin(20);
	    $pdf->setFooterMargin(20);
	    $pdf->SetAutoPageBreak(true);
	    $pdf->SetAuthor('Author');
	    $pdf->SetDisplayMode('real', 'default');
	    $pdf->AddPage();
	    $html='<h3 align="center">Laporan Booking</h3>
	            <table cellspacing="1" bgcolor="#666666" cellpadding="2">
	                <tr bgcolor="#ffffff">
	                    <th style="width: 30px">No</th>
	                    <th>Pelanggan</th>
	                    <th>Checkin</th>
	                    <th>Checkout</th>
	                    <th>Tanggal Booking</th>
	                    <th>Total</th>
	                </tr>';
	                $a=0;
	                $book = $this->M_booking->select()->result();
                    foreach ($book as $i) {
                        $a++;
	                $html.='<tr bgcolor="#ffffff">
	                    <td>'.$a.'</td>
	                    <td>'.$i->nama.'</td>
	                    <td>'.$i->checkin.'</td>
	                    <td>'.$i->checkout.'</td>
	                    <td>'.$i->tgl_book.'</td>
	                    <td>total</td>
	                </tr>';
	                }
	                $html.='<tr>
                        <td colspan="5" align="right">total</td>
                        <td>Rp.00000</td>
                    </tr>';
	    $html.='</table>';
	    $pdf->writeHTML($html, true, false, true, false, '');
	    $pdf->Output('Laporan booking.pdf', 'I');
  	}
  	function cetakreportpelanggan(){
  		$pdf = new Pdf('P', 'mm', 'A5', true, 'UTF-8', false);
	    $pdf->SetTitle('Daftar Produk');
	    $pdf->SetHeaderMargin(30);
	    $pdf->SetTopMargin(20);
	    $pdf->setFooterMargin(20);
	    $pdf->SetAutoPageBreak(true);
	    $pdf->SetAuthor('Author');
	    $pdf->SetDisplayMode('real', 'default');
	    $pdf->AddPage();
	    $html='<h3>Daftar Transaksi Kamar</h3>
	            <table cellspacing="1" bgcolor="#666666" cellpadding="2">
	                <tr bgcolor="#ffffff">
	                    <th width="5%" align="center">No</th>
	                    <th width="20%" align="center">Nama</th>
	                    <th width="20%" align="center">Tgl In</th>
	                    <th width="15%" align="center">Tgl Out</th>
	                    <th width="15%" align="center">Nomor Kamar</th>
	                    <th width="15%" align="center">Status</th>
	                </tr>';
	    for ($i=1; $i<10; $i++)
	        {
	            $html.='<tr bgcolor="#ffffff">
	                    <td align="center">'.$i.'</td>
	                    <td> Nama'.$i.'</td>
	                    <td>tgl in'.$i.'</td>
	                    <td>tgl out'.$i.'</td>
	                    <td>no'.$i.'</td>
	                    <td>status'.$i.'</td>
	                </tr>';
	        }
	    $html.='</table>';
	    $pdf->writeHTML($html, true, false, true, false, '');
	    $pdf->Output('Laporan b.pdf', 'I');
  	}
  	function cetakreportkamar(){
  		$pdf = new Pdf('P', 'mm', 'A5', true, 'UTF-8', false);
	    $pdf->SetTitle('Daftar Produk');
	    $pdf->SetHeaderMargin(30);
	    $pdf->SetTopMargin(20);
	    $pdf->setFooterMargin(20);
	    $pdf->SetAutoPageBreak(true);
	    $pdf->SetAuthor('Author');
	    $pdf->SetDisplayMode('real', 'default');
	    $pdf->AddPage();
	    $html='<h3>Daftar Transaksi Kamar</h3>
	            <table cellspacing="1" bgcolor="#666666" cellpadding="2">
	                <tr bgcolor="#ffffff">
	                    <th width="5%" align="center">No</th>
	                    <th width="20%" align="center">Nama</th>
	                    <th width="20%" align="center">Tgl In</th>
	                    <th width="15%" align="center">Tgl Out</th>
	                    <th width="15%" align="center">Nomor Kamar</th>
	                    <th width="15%" align="center">Status</th>
	                </tr>';
	    for ($i=1; $i<10; $i++)
	        {
	            $html.='<tr bgcolor="#ffffff">
	                    <td align="center">'.$i.'</td>
	                    <td> Nama'.$i.'</td>
	                    <td>tgl in'.$i.'</td>
	                    <td>tgl out'.$i.'</td>
	                    <td>no'.$i.'</td>
	                    <td>status'.$i.'</td>
	                </tr>';
	        }
	    $html.='</table>';
	    $pdf->writeHTML($html, true, false, true, false, '');
	    $pdf->Output('Laporan b.pdf', 'I');
  	}

}

/* End of file Report.php */
/* Location: ./application/controllers/Admin/Report.php */