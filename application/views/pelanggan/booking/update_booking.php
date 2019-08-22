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
          <form action="<?php echo site_url('pelanggan/booking/update')?>" method="POST">
            <div class="box-body">
              <div class="row">
                <div class="col-sm-4">
                  <input type="hidden" name="ID_BOOKING" value="<?php echo $data_booking->ID_BOOKING; ?>">
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="NAMA" value="<?php echo $data_booking->NAMA?>" class="form-control" >
                  </div>

                  <div class="form-group">
                    <label>Tanggal In</label>
                    <input type="date" name="TANGGAL_IN" value="<?php echo $data_booking->TANGGAL_IN?>" class="form-control" >
                  </div>

                  <div class="form-group">
                    <label>Tanggal Out</label>
                    <input type="date" name="TANGGAL_OUT" value="<?php echo $data_booking->TANGGAL_OUT?>" class="form-control" >
                  </div>

                  <div class="form-group">
                    		<label>Tipe Kamar</label>
                    		<select class="selectpicker form-control" id='tipe' name='ID_KAMAR_TIPE'>
                    		<option value="0">--Pilih Tipe Kamar--</option>
                    			<?php foreach ($tipe as $key => $value):?>
                    		<option value="<?php echo $value['ID_KAMAR_TIPE']?>"><?php echo $value['NAMA_KAMAR_TIPE']?>
                    		</option>
                    			<?php endforeach; ?>
                    		</select>
                  </div>

                  <div class="form-group">
                    <label>Jumlah Kamar</label>
                    <input type="text" name="JMLH_KAMAR" value="<?php echo $data_booking->JMLH_KAMAR?>" class="form-control" >
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
  <?php $this->load->view('pelanggan/template_pelanggan/head') ?>
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
