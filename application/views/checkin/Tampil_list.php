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
    <?php $this->load->view('templates/header') ?>
    <?php $this->load->view('templates/side') ?>
    <div class="content-wrapper">
      <section class="content">
        <div class="box">
          <div class="table-responsive"><meta charset="utf-8">
    <table class="table table-hover" id="dataTable" with="100%" cellspacing="0">
      <thead>
        <tr>
          
          <th>Nama</th>
          <th>Tipe Identitas</th>
          <th>Nomor Identitas</th>
          <th>Tanggal IN</th>
          <th>Tanggal Out</th>
          <th>No Telepon</th>
          <th>Total Biaya</th>
          <th>Status</th>
        </tr>
      </thead>

      <tbody>
        <?php

        foreach($checkin as $hasil){
        ?>

        <tr>
          <td><?php echo $hasil->NAMA ?></td>
          <td><?php echo $hasil->TIPE_IDENTITAS?></td>
          <td><?php echo $hasil->NOMOR_IDENTITAS?></td>
          <td><?php echo $hasil->TANGGAL_CHECKIN?></td>
          <td><?php echo $hasil->TANGGAL_CHECKOUT ?></td>
          <td><?php echo $hasil->NOMOR_TELP ?></td>
          <td><?php echo $hasil->TOTAL_BIAYA_KAMAR ?></td>
          <td><?php echo $hasil->STATUS ?></td>
          <td>
            <a href="<?php echo site_url('checkin/edit/'.$hasil->ID_CHECKIN) ?>" class="btn btn-sm btn-succes"><i class="fas fa-edit"></i> Update</a>
            <a href="<?php echo site_url('checkin/delete/').$hasil->ID_CHECKIN ?>" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
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

