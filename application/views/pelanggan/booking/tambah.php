<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Nareswari Villa</title>
  <?php $this->load->view('pelanggan/template_pelanggan/head') ?>
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/colorlib-wizard/fonts/material-design-iconic-font/css/material-design-iconic-font.css">
  
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/colorlib-wizard/css/style.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <?php $this->load->view('pelanggan/template_pelanggan/header') ?>
    <?php $this->load->view('pelanggan/template_pelanggan/side') ?>
    <div class="content-wrapper">
      <section class="content">
        <div class="box">
          <form action= '<?php echo site_url('pelanggan/booking/tambah')?>' method="post" >
            <div class="box-body">
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                     
                    <label>Nama Anda</label>
                    <input class="form-control" name="NAMA" required="" value="<?php echo $this->session->userdata('NAMA')?>">
                  </div>
                  <div class="form-group">
                    <label>Tanggal In</label>
                    <input type="date" id="TANGGAL_IN" class="form-control" name="TANGGAL_IN" required="" >
                  </div>
                  <div class="form-group">
                    <label>Tanggal Out</label>
                    <input type="date" id="TANGGAL_OUT" class="form-control" name="TANGGAL_OUT" required="">
                  </div>
                  <input type="hidden" id="ID_KAMAR" class="form-control" name="ID_KAMAR" value="<?php echo $this->uri->segment(4) ?>" required="" >
                </div>
                </div>
                
            </div>
            <div class="box-footer">
              <input class="btn btn-success" type="submit" name="btn" value="Booking"/>
              <a class="btn btn-warning" href="?module=user/user-list">Batal</a>
            </div>
          </form>
        </div>
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
