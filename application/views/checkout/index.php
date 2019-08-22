<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Nareswari Villa</title>
	<?php $this->load->view('templates/head') ?>
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/colorlib-wizard/fonts/material-design-iconic-font/css/material-design-iconic-font.css">

	<link rel="stylesheet" href="<?php echo base_url() ?>assets/colorlib-wizard/css/style.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<?php $this->load->view('templates/header') ?>
		<?php $this->load->view('templates/side') ?>
		<div class="content-wrapper">
			<section class="content">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">KAMAR NOMOR : <b>101</b></h3>
					</div>
					<form action="" method="post">
						<div class="box-body">
							<div class="row">
								<div class="col-sm-3">
									<div class="alert alert-info">
										<h4>STANDART</h4>
										<ul class="list-unstyled">
											<li>Harga / Malam : <b>Rp 100,000</b></li>
											<li>Maximal Orang Dewasa : <b>2 Orang</b></li>
											<li>Maximal Anak-anak : <b>1 Orang</b></li>
										</ul>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="form-group">
										<label># INVOICE</label>
										<input class="form-control" name="nomor_invoice" value="INV-20181114-67" readonly="">
									</div>
									<div class="form-group">
										<label>Nama Tamu</label>
										<input class="form-control" value="Mr. Kadek&nbsp;Suartini" readonly="">
									</div>
								</div>
								<div class="col-sm-5">
									<div class="form-group">
										<label>Jumlah Tamu</label>
										<div class="row">
											<div class="col-sm-6">
												<input class="form-control" value="2 Dewasa" readonly="">
											</div>
											<div class="col-sm-6">
												<input class="form-control" value="1 Anak-anak" readonly="">
											</div>
										</div>
									</div>
									<div class="form-group">
										<label>Tanggal / Waktu Check-In</label>
										<div class="row">
											<div class="col-sm-6">
												<input class="form-control" value="2018-11-14" readonly="">
											</div>
											<div class="col-sm-6">
												<input class="form-control" value="01:03:00" readonly="">
											</div>
										</div>
									</div>
									<div class="form-group">
										<label>Tanggal / Waktu Check-Out</label>
										<div class="row">
											<div class="col-sm-6">
												<input id="checkout" class="form-control" name="tanggal_checkout" data-date-format="yyyy-mm-dd" value="2018-11-16">
											</div>
											<div class="col-sm-6">
												<input class="form-control" name="waktu_checkout" value="12:00:00">
											</div>
										</div>
									</div>
								</div>
							</div>
							<h3>Rincian Tagihan</h3>
							<hr>
							<table class="table table-striped">
								<thead>
									<tr>
										<th>Keterangan Layanan / Produk</th>
										<th>Harga</th>
										<th>Qty</th>
										<th>Total</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Room reserved type : STANDART ROOM</td>
										<td>Rp 100,000</td>
										<td>2 malam</td>
										<td>Rp 200,000</td>
									</tr>
									<tr>
										<td>MIE GORENG</td>
										<td>Rp 15,000</td>
										<td>5&nbsp;Porsi</td>
										<td>Rp 75,000</td>
									</tr>
									<tr>
										<td>KOPI TUBRUK</td>
										<td>Rp 85,000</td>
										<td>5&nbsp;Pitcher</td>
										<td>Rp 425,000</td>
									</tr>
									<tr>
										<td rowspan="4"></td>
										<td colspan="2"><b>Sub-Total</b></td>
										<td><b>Rp 700,000</b></td>
									</tr>
									<tr>
										<td colspan="2">PPn 10%</td>
										<td>Rp 70,000</td>
									</tr>
									<tr>
										<td colspan="2">Jumlah Deposit</td>
										<td class="text-red">Rp 1,000,000</td>
									</tr>
									<tr>
										<td colspan="2"><b>Grand Total</b></td>
										<td><b>Rp -230,000</b></td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="box-footer">
							<input name="id_kamar" value="8" type="hidden">
							<input name="id_transaksi_kamar" value="23" type="hidden">
							<input name="jumlah_pembayaran" value="-230000" type="hidden">

							<button class="btn btn-success" type="submit" name="checkout">Check Out</button>
							<a class="btn btn-primary" href="?report=transaksi-tamu&amp;transaksi=23" target="_blank">Cetak Invoice</a>
							<a class="btn btn-warning" href="?module=transaksi/checkin">Batal</a>
						</div>
					</form>
				</div>
			</section>
		</div>
		<?php $this->load->view('templates/footer') ?>
		<div class="control-sidebar-bg"></div>
	</div>
	<script src="<?php echo base_url() ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
	<script src="<?php echo base_url() ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url() ?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?php echo base_url() ?>assets/bower_components/fastclick/lib/fastclick.js"></script>
	<script src="<?php echo base_url() ?>assets/dist/js/adminlte.min.js"></script>
	<script src="<?php echo base_url() ?>assets/dist/js/demo.js"></script>
	<script src="<?php echo base_url() ?>assets/colorlib-wizard/js/jquery.steps.js"></script>
	<script src="<?php echo base_url() ?>assets/colorlib-wizard/js/main.js"></script>
	<script>
	$(document).ready(function () {
		$('.sidebar-menu').tree()
	})
	</script>
</body>
</html>
