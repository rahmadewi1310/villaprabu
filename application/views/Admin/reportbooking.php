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
                <div class="col-md-6">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Laporan Booking</h3>
                            <button href="" type="button" class="pull-right btn btn-primary">Cetak Pdf</button>
                        </div>
                <!-- /.box-header -->
                        <div class="box-body">
                            <table class="table table-bordered">
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Task</th>
                                    <th>Progress</th>
                                    <th style="width: 40px">Label</th>
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