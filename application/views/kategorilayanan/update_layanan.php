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
          <form action="<?php echo site_url('kategorilayanan/update')?>" method="POST">
            <div class="box-body">
              <div class="row">
                <div class="col-sm-4">
                  <input type="hidden" name="ID_LAYANAN_KATEGORI" value="<?php echo $data_kategorilayanan->ID_LAYANAN_KATEGORI; ?>">
                  <div class="form-group">
                    <label>Nama Layanan Kategori</label>
                    <input type="text" name="NAMA_LAYANAN_KATEGORI" value="<?php echo $data_kategorilayanan->NAMA_LAYANAN_KATEGORI?>" class="form-control" >
                  </div>

                  <div class="form-group">
                    <label>Keterangan</label>
                    <input type="text" name="KETERANGAN" value="<?php echo $data_kategorilayanan->KETERANGAN?>" class="form-control" >
                  </div>

                    <center><button type="submit" class="btn btn-md-primary">Update</button></center>
 
                    </div>
                  </div>
              </div>
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
