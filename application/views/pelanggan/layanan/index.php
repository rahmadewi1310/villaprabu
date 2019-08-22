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
          <form>
            <div class="box-body">
              <div class="row">
                <div class="col-sm-4">
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                          <tr>
                            <th>Nama Layanan</th>
                            <th>Harga</th>
                            <th>Kategori Layanan</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php 
                  foreach($layanan as $hasil) : 
                    ?>
                          <tr>
                          <td><?php echo $hasil->NAMA_LAYANAN ?></td>
                          <td><?php echo $hasil->HARGA_LAYANAN ?></td>
                          <td><?php echo $hasil->NAMA_LAYANAN_KATEGORI?></td>
                          <td><a class="btn btn-success" type="submit" name="btn" href="<?php echo site_url('pelanggan/layanan/addCart/'.$hasil->ID_LAYANAN) ?>">Beli</a><br/><br/>
                          <a class="btn btn-warning" href="?module=user/user-list">Batal</a>
                        </td>
                        </tr>
                          <?php endforeach; ?>
                        </tbody>
                      </table>
                  
                  
                </div>
            </div>
            <div class="box-footer">
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
