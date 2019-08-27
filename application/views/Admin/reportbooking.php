<!DOCTYPE html>
<html>
<head>
    <title>Villa Prabu</title>
    <?php 
    $this->load->view('templates/head'); 
    ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <?php 
    $this->load->view('templates/header');
    $this->load->view('templates/side'); 
    ?>
    <div class="content-wrapper">
        <!-- konten -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h1 class="box-title">Laporan Booking</h1>
                            <a href="<?php echo base_url('admin/report/cetakreportbooking') ?>" type="button" class="pull-right btn btn-primary">Cetak Pdf</a>
                        </div>
                <!-- /.box-header -->
                        <div class="box-body">
                            <table class="table table-bordered">
                                <tr>
                                    <th style="width: 10px">No</th>
                                    <th>Pelanggan</th>
                                    <th>Checkin</th>
                                    <th>Checkout</th>
                                    <th>Tanggal Booking</th>
                                    <th>Total</th>
                                </tr>
                                <?php $a=0;
                                    $total = 0;
                                    foreach ($book as $i) {
                                        $a++;  
                                        $subtotal = ($i->tagihan_kamar + $i->tagihan_layanan);
                                        $total += $subtotal;  
                                    ?>
                                <tr>
                                    <td style="width: 10px"><?=$a?></td>
                                    <td><?=$i->nama_pelanggan?></td>
                                    <td><?=$i->checkin?></td>
                                    <td><?=$i->checkout?></td>
                                    <td><?=$i->tgl_book?></td>
                                    <td><?=$subtotal?></td>
                                </tr>
                                <?php }?>
                                <tr>
                                    <td colspan="5" align="right">total</td>
                                    <td>Rp. <?=$total?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- konten -->
    </div>
</div>

    <?php $this->load->view('templates/footer') ?>
</body>
</html>