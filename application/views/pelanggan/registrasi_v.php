<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Nareswari Villa</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('assets2/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="<?php echo base_url('assets2/datatables/dataTables.bootstrap4.css') ?>" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('template2/css/sb-admin.css') ?>" rel="stylesheet">

</head>
<body id="page-top">
    <div id="wrapper">
      <div id="content-wrapper">
      <div class="container-fluid">
            <div class="card mb-3">
          <div class="card-header">
            <a><h2><center>Register</center></h2></a>
            <a href="<?php echo site_url('LoginPelanggan') ?>" class="text-center new-account">Back to Login?</a>
          </div>
        <div class="card-body">
            <div class="container">
              <div class="col-md-12">
                <?php echo form_open('Registrasi/add') ?>
              </div>
              <?php if(isset($error)) { echo $error; }; ?>
                <div class="form-group">
                    <div class="form-row">
                    <div class="col-md-6">
                        <label for="name">Your Name*</label>
                        <input class="form-control" type="text" name="NAMA" placeholder="Your Name" />
                        <?php echo form_error('NAMA'); ?>
                    </div>
             
                    <div class="col-md-6">
                        <label for="name">Email Address*</label>
                        <input class="form-control" type="text" name="EMAIL" placeholder="Email Address" />
                        <?php echo form_error('EMAIL'); ?>
                    </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row">
                    <div class="col-md-6">
                        <label for="name">Username*</label>
                        <input class="form-control" type="text" name="USERNAME" placeholder="USERNAME" />
                        <?php echo form_error('USERNAME'); ?>
                    </div>
             
                    <div class="col-md-6">
                        <label for="name">Password*</label>
                        <input class="form-control" type="PASSWORD" name="PASSWORD" placeholder="PASSWORD" />
                        <?php echo form_error('PASSWORD'); ?>
                    </div>
                    </div>
                </div>
                    <div class="col-md-6">
                        <label for="name">Alamat</label>
                      <textarea class="form-control" type="text" name="ALAMAT" placeholder="Alamat"></textarea>
                        <?php echo form_error('ALAMAT'); ?>
                    </div>
                    <div class="col-md-6">
                        <label for="name">Phone Number*</label>
                        <input class="form-control" type="text" name="TELP" placeholder="Phone Number" />
                        <?php echo form_error('TELP'); ?>
                    </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row">
                    <div class="col-md-6">
                        <label for="name">Gendre*</label><br/>
                        <label><input type="radio" name="JENIS_KELAMIN" id="JENIS_KELAMIN" value="laki-laki" />Male</label>
                        <label><input type="radio" name="JENIS_KELAMIN" id="JENIS_KELAMIN" value="perempuan" />Female</label>
                    </div>
                    </div>
                </div>

                <center><input class="btn btn-primary" type="submit" name="btn" value="Save" /></center>

</body>
</html>