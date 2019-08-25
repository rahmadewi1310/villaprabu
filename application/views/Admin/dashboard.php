<!DOCTYPE html>
<html>
<head>
	<title>Villa Prabu</title>
	<?php 
	$this->load->view('templates/head'); 
	?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
	<?php 
	$this->load->view('templates/header');
	$this->load->view('templates/side'); 
	?>
	<div class="content-wrapper">
		<section class="content">
			<div class="row">
				<div class="col-lg-4 col-xs-6">
					<div class="small-box bg-aqua">
						<div class="inner">
							<h3>150</h3>
							<p>New Orders</p>
						</div>
						<div class="icon">
							<i class="ion ion-bag"></i>
						</div>
						<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<div class="col-lg-4 col-xs-6">
					<div class="small-box bg-green">
						<div class="inner">
							<h3>150</h3>
							<p>New Orders</p>
						</div>
						<div class="icon">
							<i class="ion ion-bag"></i>
						</div>
						<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<div class="col-lg-4 col-xs-6">
					<div class="small-box bg-yellow">
						<div class="inner">
							<h3>150</h3>
							<p>New Orders</p>
						</div>
						<div class="icon">
							<i class="ion ion-bag"></i>
						</div>
						<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>
</body>
</html>