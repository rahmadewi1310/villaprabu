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
        <?php $sisa = (($data['tagihan_kamar'] + $data['tagihan_layanan']) - $data['total_bayar']); ?>
        <h3>Total belum bayar : <b><?=number_format($sisa, 2, ',','.')?></b></h3>
        <?php echo form_open_multipart('Admin/book/bayar/'.$data['id']); ?>
          <div class="box-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Tanggal</label>
                  <input type="date" value="<?=date('Y-m-d')?>" name="tanggal" class="form-control" placeholder="Tgl Pembayaran" required>
                </div>
                <div class="form-group">
                  <label>Nominal</label>
                  <input type="number" name="nominal" value="<?=$sisa?>" class="form-control" placeholder="100000" required>
                </div>

                <div class="form-group">
                  <label>Tipe</label>
                  <select name="tipe" class="form-control">
                    <option value="CASH">CASH</option>
                    <option value="TRANSFER">TRANSFER</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Nomor Rekenening</label>
                  <input type="number" name="nomor_rekening" class="form-control" placeholder="Nomor rekening untuk transfer" >
                </div>
                <input type="text" name="book_id" value="<?=$data['id']?>" hidden>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <input type="submit" value="Simpan" class="btn btn-success">
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
