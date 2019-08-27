<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Nareswari Villa</title>
  <?php $this->load->view('templates/head') ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">
    <?php $this->load->view('templates/header') ?>
  <?php $this->load->view('templates/side') ?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- <section class="content-header">
      <h1>
        Data Kamar
      </h1>
    </section> -->

    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title"> data kamar</h3>
        </div>
        <!-- /.box-header -->

        <?php echo form_open_multipart('Admin/MasterData/updatekamar/'.$id,'class="form-horizontal"'); ?>
          <div class="box-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Nomor kamar</label>
                  <input type="text" name="no_kamar" class="form-control" placeholder="isi nomor kamar!" value="<?=$room->no_kamar?>" required>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Harga</label>
                  <input type="number" name="harga" class="form-control" placeholder="berapa harga kamar!" value="<?=$room->harga?>" required>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>Deskripsi</label>
                  <textarea class="form-control" name="desc" rows="3" placeholder="Isi deskripsi tentang kamar" required><?=$room->desc?></textarea>
                </div>
                <div class="form-group">
                  <label>Foto</label></br>
                  <?php 
                      if ($room->img =="") {
                        echo "Tidak ada gambar";
                        }else{?>
                    <img width="100px" height="100px" src="<?php echo base_url('/uploads/'.$pelanggan->img); ?>">
                  <?php } ?>
                    <input type="file" id="input-file-now" class="dropify" name="img" required>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <input type="submit" name="submit" value="Simpan" class="btn btn-success">
          </div>

        <?php echo form_close(); ?>
      </div>
    </section>
    <!-- /.content -->
    </div>
    <?php $this->load->view('templates/footer') ?>
    <!-- Control Sidebar -->
    <div class="control-sidebar-bg"></div>
  </div>
  <script src="<?php echo base_url() ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="<?php echo base_url() ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- SlimScroll -->
  <script src="<?php echo base_url() ?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="<?php echo base_url() ?>assets/bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url() ?>assets/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?php echo base_url() ?>assets/dist/js/demo.js"></script>
  <script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>
</body>
</html>
