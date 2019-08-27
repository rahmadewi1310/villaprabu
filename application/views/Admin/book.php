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
                  <th>Kode Booking</th>
                  <th>Tanggal Booking</th>
                  <th>Checkin</th>
                  <th>Checkout</th>
                  <th>Malam</th>
                  <th>Pelanggan</th>
                  <th>Total Tagihan</th>
                  <th>Total Bayar</th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
                  <?php
                    foreach($book as $a){?>
                <tr>
                  <td><?=$a->id?></td>
                  <td><?=$a->tgl_book?></td>
                  <td><?=$a->checkin?></td>
                  <td><?=$a->checkout?></td>
                  <td><?=$a->night?></td>
                  <td><?=$a->nama_pelanggan?></td>
                  <td><?=($a->tagihan_kamar + $a->tagihan_layanan)?></td>
                  <td><?=$a->total_bayar?></td>
                  <td>
                    <a href="<?=base_url('admin/book/detail/'.$a->id) ?>" type="button" class="btn btn-default">
                      Detail
                    </a>

                    <?php if($a->checkin == null){ ?>
                    <a href="<?=base_url('admin/book/checkin/'.$a->id) ?>" type="button" class="btn btn-success">
                      Checkin
                    </a>
                    <?php } if ($a->checkout == null && $a->checkin != null) { ?> 
                    <a href="<?=base_url('admin/book/checkout/'.$a->id) ?>" type="button" class="btn btn-danger">
                      Checkout
                    </a>
                    <?php } ?>
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
