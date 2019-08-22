<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Nareswari Villa</title>
  <?php $this->load->view('pelanggan/template_pelanggan/head') ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <?php $this->load->view('pelanggan/template_pelanggan/header') ?>
    <?php $this->load->view('pelanggan/template_pelanggan/side') ?>
    <div class="content-wrapper">
      <section class="content-header">
      <h2>Selamat Datang <?php echo $this->session->userdata('NAMA')?></h2>
    </section>
    <!-- session di bawah ini untuk membuat info kamar yang tersedia -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
       <?php foreach ($kamar as $hasil) {?>
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
         
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>Nomor: <br/><?php echo $hasil->NOMOR_KAMAR?></h3>
              <p>Tipe Kamar: <?php echo $hasil->NAMA_KAMAR_TIPE?></p>
              <p>Status: <?php echo $hasil->STATUS_KAMAR?></p>
              <p>Harga: Rp.<?php echo $hasil->HARGA_MALAM?></p>
            </div>
            <div class="icon">
              <i class="fa fa-bed"></i>
            </div>
            <a href="<?php echo site_url('pelanggan/booking/add/'.$hasil->ID_KAMAR) ?>" class="small-box-footer">Book Now <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <?php } ?>
        <!-- ./col -->
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
          </div>
          <!-- /.box-footer-->
        </div>
        <!-- /.box -->
      </section>
         
          
    </div>
    <?php $this->load->view('pelanggan/template_pelanggan/footer') ?>
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
