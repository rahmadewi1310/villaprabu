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
          <form action="<?php echo site_url('kamar/update')?>" method="POST">
            <div class="box-body">
              <div class="row">
                <div class="col-sm-4">
                  <input type="hidden" name="ID_KAMAR" value="<?php echo $data_kamar->ID_KAMAR; ?>">
                  <div class="form-group">
                    <label>Nomor Kamar</label>
                    <input type="text" name="NOMOR_KAMAR" value="<?php echo $data_kamar->NOMOR_KAMAR?>" class="form-control" >
                  </div>

                  <div class="form-group">
                    		<label>Tipe Kamar</label>
                        <input type="text" name="ID_KAMAR_TIPE" value="<?php echo $data_kamar->ID_KAMAR_TIPE?>" class="form-control" >
                    		<select class="selectpicker form-control" id='tipe' name='ID_KAMAR_TIPE'>
                    		<option value="0">--Pilih Tipe Kamar--</option>
                    			<?php foreach ($tipe as $key => $value):?>
                    		<option value="<?php echo $value['ID_KAMAR_TIPE']?>"><?php echo $value['NAMA_KAMAR_TIPE']?>
                    		</option>
                    			<?php endforeach; ?>
                    		</select>
                  </div>

                  <div class="form-group">
                    <label>Maximal Orang Dewasa</label>
                    <input type="text" name="MAX_DEWASA" value="<?php echo $data_kamar->MAX_DEWASA?>" class="form-control" >
                    <select class="selectpicker form-control" name="MAX_DEWASA">
                      <option>--Pilih--</option>
                      <option value="1 Orang">1 Orang </option>
                      <option value="2 Orang">2 Orang </option>
                      <option value="3 Orang">3 Orang </option>
                      <option value="4 Orang">4 Orang </option>
                      <option value="5 Orang">5 Orang </option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label>Maximal anak-anak </label>
                    <input type="text" name="MAX_ANAK" value="<?php echo $data_kamar->MAX_ANAK?>" class="form-control" >
                    <select class="form-control" name="MAX_ANAK">
                      <option>--Pilih--</option>
                      <option value="1 Orang">1 Orang </option>
                      <option value="2 Orang">2 Orang </option>
                      <option value="3 Orang">3 Orang </option>
                      <option value="4 Orang">4 Orang </option>
                      <option value="5 Orang">5 Orang </option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label>Status Kamar</label>
                    <input type="text" name="STATUS_KAMAR" value="<?php echo $data_kamar->STATUS_KAMAR?>" class="form-control" >
                    <select class="form-control" name="STATUS_KAMAR">
                        <option>--Pilih--</option>
                        <option value="TERSEDIA">TERSEDIA </option>
                        <option value="TERPAKAI">TERPAKAI </option>
                        <option value="KOTOR">KOTOR </option>
                    </select>
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
</html>
