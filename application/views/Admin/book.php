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
    <section class="content-header">
      <h1>
        Data Kamar
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data kamar</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <!-- checkin, checkout, tgl_book, bukti bayar, nama pelanggan, status -->
                  <th>Checkin</th>
                  <th>Checkout</th>
                  <th>Tanggal Booking</th>
                  <th>Bukti Bayar</th>
                  <th>Pelanggan</th>
                  <th>Status</th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
                  <?php
                    foreach($book as $a){?>
                <tr>
                  <td><?=$a->checkin?></td>
                  <td><?=$a->checkout?></td>
                  <td><?=$a->tgl_book?></td>
                  <td><?=$a->bukti_bayar?></td>
                  <td><?=$a->nama?></td>
                  <td><?=$a->status?></td>
                  <td>
                    <a href="<?php echo base_url('admin/book/detailbook') ?>" type="button" class="btn btn-default">
                      Detail
                    </a>
                    <button type="button" class="btn btn-sm btn-info">Konfirmasi</button>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>

      <!-- data tables -->

    
    <!-- /.content -->
    </div>
    <?php $this->load->view('templates/footer') ?>

</body>
</html>
