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

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Tambah data kamar</h3>
        </div>
        <!-- /.box-header -->

        <div class="box-body">
          <?php echo form_open_multipart('Admin/MasterData/insertkamar','class="form-horizontal"'); ?>
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Nomor kamar</label>
                  <input type="text" name="no_kamar" class="form-control" placeholder="isi nomor kamar!" required>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Harga</label>
                  <input type="number" name="harga" class="form-control" placeholder="berapa harga kamar!" required>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>Deskripsi</label>
                  <textarea class="form-control" name="desc" rows="2" placeholder="Isi deskripsi tentang kamar" required></textarea>
                </div>

                <div class="form-group">
                  <label>Foto</label>
                    <input type="file" id="input-file-now" class="dropify" name="img" required>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <input type="submit" name="submit" value="Simpan" class="btn btn-success">
          </div>

        </div>
      <?php echo form_close(); ?>
    </section>

      <!-- data tables -->
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
                  <th>Foto</th>
                  <th>Deskripsi</th>
                  <th>Harga</th>
                  <th>Nomor Kamar</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                    foreach($room as $a){?>
                <tr>
                  <td>
                    <img width="100px" height="100px" src="<?php 
                      if ($a->img =="") {
                        echo base_url('/uploads/standard-room.jpg');
                      }else{
                        echo base_url('/uploads/'.$a->img);
                      }
                      ?>">
                  </td>
                  <td><?php echo $a->desc?></td>
                  <td><?php echo "Rp. ".number_format($a->harga)?></td>
                  <td><?php echo $a->no_kamar?></td>
                  <td>
                    <a href="<?php echo base_url('admin/masterdata/editkamar/'.$a->id) ?>" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i>Edit</a>
                    <a href="#" onclick="confDelete('<?=base_url('admin/masterdata/deletekamar/'.$a->id)?>')" class="btn btn-danger btn-xs">Delete</a>
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
