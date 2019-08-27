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
              <h3>KODE : <b><?=$data['id']?></b></h3>
              <table>
                <b>
                  <tr>
                    <td width="150px">Pelanggan</td>
                    <td width="10px">:</td>
                    <td><?=$data['nama_pelanggan']?></td>
                  </tr>
                  <tr>
                    <td width="150px">Email Pelanggan</td>
                    <td width="10px">:</td>
                    <td><?=$data['email']?></td>
                  </tr>
                  <tr>
                    <td width="150px">No. HP Pelanggan</td>
                    <td width="10px">:</td>
                    <td><?=$data['phone']?></td>
                  </tr>
                  <tr>
                    <td>Checkin</td>
                    <td>:</td>
                    <td><?=date('D, d F Y', strtotime($data['checkin']))?></td>
                  </tr>
                  <tr>
                    <td>Checkout</td>
                    <td>:</td>
                    <td><?=date('D, d F Y', strtotime($data['checkout']))?></td>
                  </tr>
                </b>
              </table>
              <div class="row"><div class="col-md-8">
              <h4>Detail : </h4>
              <table id="example2" class="table table-bordered table-striped table-hover">
                <tbody>
                <?php
                  $total = 0;
                  foreach ($data['detail'] as $item) {
                    echo "
                  <tr>
                    <td>".date('D, d F Y', strtotime($item['tanggal']))."
                    <br/><b>".$item['tipe']."</b>";

                    if (count($item['detail']) > 0) {
                      echo "<table class='table'>
                        <tr>
                          <th>No.</th>
                          <th>Produk/Layanan</th>
                          <th class='text-right'>Jumlah</th>
                          <th class='text-right'>Harga satuan</th>
                          <th class='text-right'>Subtotal</th>
                        </tr>
                      ";
                      $i = 1;
                      foreach ($item['detail'] as $sub) {
                        echo "<tr>
                          <td>".$i."</td>
                          <td>".$sub['remark']."</td>
                          <td class='text-right'>".$sub['jumlah']." x </td>
                          <td class='text-right'>".number_format($sub['harga'], 2, ',','.')."</td>
                          <td class='text-right'>".number_format(($sub['harga'] * $sub['jumlah']), 2, ',','.')."</td>
                        </tr>";
                        $i++;
                        $item['harga'] += ($sub['harga'] * $sub['jumlah']);
                      }
                      echo "</table>";
                    }
                  echo "
                    </td>
                    <th class='text-right'>".number_format($item['harga'], 2, ',','.')."</th>
                  </tr>";
                    $total += $item['harga'];
                  }
                  echo "<tr><th class='text-right'>TOTAL</th><th class='text-right'>".number_format($total, 2, ',','.')."</th></tr>";
                ?>
              </tbody>
            </table>
            </div><div class="col-md-4">
            Pembayaran : 
            <table class="table table-bordered">
              <tr>
                    <th>Tanggal</th>
                    <th>Tipe</th>
                    <th>Nominal</th>
                  </tr>
              <?php
                $total_bayar = 0;
                if (count($data['pembayaran']) <= 0) {
                  echo "<tr><td colspan='3' class='text-center'>Belum ada pembayaran</td></tr>";
                }else
                foreach ($data['pembayaran'] as $item) {
                  echo "<tr>
                    <td>".date('D, d F Y', strtotime($item['tanggal']))."</td>
                    <td>".$item['tipe']."</td>
                    <td>".number_format($item['nominal'], 2, ',','.')."</td>
                  </tr>";
                  $total_bayar += $item['nominal'];
                }
                echo "<tr>
                    <td colspan='2'>TOTAL BAYAR</td>
                    <th class='text-right'>".number_format($total_bayar, 2, ',','.')."</th>
                  </tr>";
              ?>
            </table>
            <p class="text-right">TOTAL BELUM DIBAYAR </p>
            <?php
            echo "<h2 class='text-right'>".number_format(($total - $total_bayar), 2, ',', '.')."</h2>"; 
            ?>
            </div></div>
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
