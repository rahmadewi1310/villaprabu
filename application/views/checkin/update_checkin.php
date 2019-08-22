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
          <form action="<?php echo site_url('checkin/update')?>" method="POST">
            <div class="box-body">
              <div class="row">
                <div class="col-sm-4">
                  <input type="hidden" name="ID_CHECKIN" value="<?php echo $data_checkin->ID_CHECKIN; ?>">

                  <div class="form-group">
                    <label>Kamar</label>
                    <input type="text" name="ID_KAMAR" value="<?php echo $data_checkin->ID_KAMAR?>" class="form-control" >
                    <select class='selectpicker form-control' id="ID_KAMAR" name="ID_KAMAR">
                      <option value="0">--Pilih Kamar--</option>
                        <?php foreach ($tipe as $key => $value):?>
                      <option value="<?php echo $value['ID_KAMAR']?>"><?php echo $value['NAMA_KAMAR']?>
                      </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                  <div class="form-group">
                    <label>Nama Pelanggan</label>
                    <input type="text" name="NAMA" value="<?php echo $data_checkin->NAMA?>" class="form-control" >
                  </div>

                <div class="form-group">
                  	<label>Tipe Identitas</label>
                  	<input type="text" name="TIPE_IDENTITAS" value="<?php echo $data_checkin->TIPE_IDENTITAS?>" class="form-control" >
                  	<select class="form-control" name="TIPE_IDENTITAS" value="<?php echo $data_checkin->TIPE_IDENTITAS?>">
						<option>--Tipe Identitas--</option>
						<option value="KTP">KTP </option>
						<option value="SIM">SIM </option>
						<option value="PASSPORT">PASSPORT </option>
					</select>
				</div>

				<div class="form-group">
                    <label>Nomor Identitas</label>
                    <input class="form-control" name="NOMOR_IDENTITAS" value="<?php echo $data_checkin->NOMOR_IDENTITAS?>">
                </div>

                <div class="form-group">
                    <label>Alamat</label>
                    <textarea class="form-control" name="ALAMAT" value="<?php echo $data_checkin->ALAMAT?>"></textarea>
                </div>

                <div class="form-group">
                    <label>Nomor Telepon</label>
                    <input class="form-control" name="NOMOR_TELP" value="<?php echo $data_checkin->NOMOR_TELP?>">
                </div>

                <div class="form-group">
                    <label>Tanggal In</label>
                    <input type="date" id="TANGGAL_CHECKIN" class="form-control" name="TANGGAL_CHECKIN" value="<?php echo $data_checkin->TANGGAL_CHECKIN?>">
                </div>

                <div class="form-group">
                    <label>Tanggal Out</label>
                    <input type="date" id="TANGGAL_CHECKOUT" class="form-control" name="TANGGAL_CHECKOUT" value="<?php echo $data_checkin->TANGGAL_CHECKOUT?>">
                  </div>
                  
                  <div class="form-group">
                    <label>Total Harga</label>
                    <input class="form-control" name="TOTAL_BIAYA_KAMAR" value="<?php echo $data_checkin->TOTAL_BIAYA_KAMAR?>">
                  </div>

                  <div class="form-group">
                    <label>STATUS</label><br/>
                    <input type="checkbox" name="STATUS" value="LUNAS"><b>LUNAS</b>
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
