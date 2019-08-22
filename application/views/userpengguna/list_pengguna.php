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
          <div class="table-responsive">
		<table class="table table-hover" id="dataTable" with="100%" cellspacing="0">
			<thead>
				<tr>
 					
					<th>Nama Pengguna/Admin</th>
					<th>Keterangan</th>
          <th>Username</th>
          <th>Password</th>
				</tr>
			</thead>

			<tbody>
				<?php

				foreach($userpengguna as $hasil){
				?>

				<tr>
					
					<td><?php echo $hasil->ROLE_NAME ?></td>
					<td><?php echo $hasil->KETERANGAN ?></td>
          <td><?php echo $hasil->USERNAME ?></td>
          <td><?php echo $hasil->PASSWORD ?></td>

					<td>
						<a href="<?php echo site_url('UserPengguna/edit/'.$hasil->ID_USER_ROLE) ?>" class="btn btn-sm btn-succes"><i class="fas fa-edit"></i> Update</a>
						<a href="<?php echo site_url('UserPengguna/delete/').$hasil->ID_USER_ROLE ?>" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
					</td>

				</tr>
			<?php } ?>
				</div>
			</tbody>
		</table>
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

