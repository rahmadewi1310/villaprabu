<!DOCTYPE html>
<html>
<head>
  <title>Nareswari Villa</title>
  <?php $this->load->view('templates/head') ?>
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/colorlib-wizard/fonts/material-design-iconic-font/css/material-design-iconic-font.css">

  <link rel="stylesheet" href="<?php echo base_url() ?>assets/colorlib-wizard/css/style.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <?php $this->load->view('housekeeping/template_housekeeping/header') ?>
    <aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Housekeeping</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
          </button>
        </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <li>
        <a href="http://localhost/villaprabu/Housekeeping/Dashboard">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>
      <li class="treeview">
</li>
</ul>
</section>
</aside>

    <div class="content-wrapper">
      <section class="content">
        <div class="box">
          <div class="table-responsive"><meta charset="utf-8">
            <table class="table table-hover" id="dataTable" with="100%" cellspacing="1">
        			<thead>
        				<tr>

        					<th>Nomer Kamar</th>
                  <th>Nama Kamar</th>
        					<th>Maximal Dewasa</th>
        					<th>Maximal Anak-Anak</th>
        					<th>Status Kamar</th>
        				</tr>
        			</thead>

        			<tbody>
        				<?php

        				foreach($kamar as $hasil){
        				?>

        				<tr>
        					<td><?php echo $hasil->NOMOR_KAMAR ?></td>
        					<td><?php echo $hasil->NAMA_KAMAR_TIPE?></td>
        					<td><?php echo $hasil->MAX_DEWASA ?></td>
        					<td><?php echo $hasil->MAX_ANAK ?></td>
                  <td><?php echo $hasil->STATUS_KAMAR ?></td>

        					<td>
        						<a href="<?php echo site_url('housekeeping/Kamar/edit/'.$hasil->ID_KAMAR) ?>" class="btn btn-sm btn-succes"><i class="fas fa-edit"></i> Update</a>
        						<a href="<?php echo site_url('Kamar/delete/').$hasil->ID_KAMAR ?>" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
        					</td>

        				</tr>
        			<?php } ?>
        				</div>
        			</tbody>
        		</table>
        </div>
      </section>
    </div>
    <?php $this->load->view('housekeeping/template_housekeeping/footer') ?>
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
