<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}
	function reportbooking(){
		$this->load->view('admin/reportbooking');
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