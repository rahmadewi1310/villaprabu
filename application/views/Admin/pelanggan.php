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
          <?php if ($this->session->flashdata('gagal')) { ?>
          <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            <h4>
              <i class="icon fa fa-warning"></i> <?php echo $this->session->flashdata('gagal'); ?>
            </h4>
            Gagal upload gambar!!!
          </div>
          
        <?php } ?>
        </div>
        <!-- /.box-header -->

        <div class="box-body">
          <?php echo form_open_multipart('Admin/MasterData/insertpelanggan','class="form-horizontal"'); ?>
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama" class="form-control" placeholder="Nama Pelanggan" required>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" name="email" class="form-control" placeholder="Email pelanggan" required>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Telepon</label>
                  <input type="number" name="phone" class="form-control" placeholder="Telepon pelanggan" required>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" name="alamat" rows="2" placeholder="Alamat pelanggan" required></textarea>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>No Rekening</label>
                  <input type="number" name="no_rek" class="form-control" placeholder="No rekening pelanggan!" required>
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
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Telepon</th>
                  <th>Nomor Rekening</th>
                  <th>Alamat</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                    foreach($pelanggan as $a){?>
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
                  <td><?php echo $a->nama?></td>
                  <td><?php echo $a->email?></td>
                  <td><?php echo $a->phone?></td>
                  <td><?php echo $a->no_rek?></td>
                  <td><?php echo $a->alamat?></td>
                  <td>
                    <a href="<?php echo base_url('admin/masterdata/editpelanggan/'.$a->id) ?>" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i>Edit</a>
                    <a href="#" onclick="confDelete('<?=base_url('admin/masterdata/deletepelanggan/'.$a->id)?>')" class="btn btn-danger btn-xs">Delete</a>
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
