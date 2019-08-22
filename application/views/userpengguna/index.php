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
          <form action= 'UserPengguna/tambah' method="post" >
            <div class="box-body">
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    
                    <label>Nama Pengguna/Admin</label>
                    <input class="form-control" name="ROLE_NAME" required="">
                  </div>
                  <div class="form-group">
                    <label>Keterangan</label>
                    <input class="form-control" name="KETERANGAN" required="">
                  </div>
                  <div class="form-group">
                    <label>Username</label>
                    <input class="form-control" name="USERNAME" required="">
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input class="form-control" name="PASSWORD" required="">
                </div>
              </div>
            </div>
            <div class="box-footer">
              <input class="btn btn-success" type="submit" name="btn" value="Tambah Jenis Pengguna"/>
              <a class="btn btn-warning" href="?module=user/user-list">Batal</a>
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
