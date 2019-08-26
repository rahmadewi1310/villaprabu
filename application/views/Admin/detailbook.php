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
        Detail Tagihan
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <table>
                <b>
                  <tr>
                    <td width="150px">Pelanggan</td>
                    <td width="10px">:</td>
                    <td>Yan Mastra</td>
                  </tr>
                  <tr>
                    <td>Nomor Booking</td>
                    <td>:</td>
                    <td>12356789</td>
                  </tr>
                  <tr>
                    <td>Checkin</td>
                    <td>:</td>
                    <td>10 mei 2019</td>
                  </tr>
                  <tr>
                    <td>Checkout</td>
                    <td>:</td>
                    <td>20 mei 2019</td>
                  </tr>
                </b>
              </table>
              <table id="example2" class="table table-bordered table-hover">
                <tbody>
                <tr>
                  <td colspan="4">Tanggal 10 Mei 2019 <br/><b> Tagihan Kamar<b/></td>
                  <td>150.000</td>
                </tr>
                <tr>
                  <td colspan="5">Tanggal 10 Mei 2019 <br/><b> Tagihan Layanan<b/></td>
                </tr>
                <tr>
                  <td>No</td>
                  <td>Layanan</td>
                  <td>Jumlah</td>
                  <td>Harga</td>
                  <td>Subtotal</td>
                </tr>
                <?php for($i = 1; $i<10; $i++){ ?>
                  <tr>
                  <td><?=$i?></td>
                  <td>Layanan <?=$i?></td>
                  <td>Jumlah <?=$i?></td>
                  <td>Harga <?=$i?></td>
                  <td>Subtotal <?=$i?></td>
                </tr>
                <?php } ?>
                <tr>
                  <td colspan="4" align="right">Total</td>
                  <td>9000000</td>
                </tr>
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
