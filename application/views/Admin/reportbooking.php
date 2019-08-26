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
                            <h3 class="box-title">Laporan Booking</h3>
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
                                    <th>Total</th>
                                </tr>
                                <?php
                                    for($i=1; $i<11; $i++){?>
                                <tr>
                                    <td style="width: 10px">No</td>
                                    <td>Pelanggan<?=$i?></td>
                                    <td>Checkin<?=$i?></td>
                                    <td>checkout<?=$i?></td>
                                    <td>Total<?=$i?></td>
                                </tr>
                                <?php }?>
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