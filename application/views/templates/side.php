<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Admin</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
          </button>
        </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <li>
        <a href="http://localhost/villaprabu/">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-key"></i>
          <span>check In/ Check Out</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url('checkin/') ?>"><i class="fa fa-circle-o"></i>Check In </a></li>
          <li><a href="<?php echo site_url('checkin/tampil_list') ?>"><i class="fa fa-circle-o"></i>List Check in </a></li>
          <li><a href="<?php echo base_url('checkin/tampil_list') ?>"><i class="fa fa-circle-o"></i>Check Out</a></li>
          <li><a href="<?php echo base_url('booking') ?>"><i class="fa fa-circle-o"></i>Reservasi / Booking</a></li>
          <li><a href="<?php echo base_url('booking/tampil_list') ?>"><i class="fa fa-circle-o"></i>List Booking</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-book"></i>
          <span>Room Services</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url('layanan') ?>"><i class="fa fa-circle-o"></i>Pesan Layanan / Produk</i></a></li>
          <li><a href="<?php echo base_url('kamar/tampil_list/') ?>"><i class="fa fa-circle-o"></i> Pembersihan Kamar</i></a></li>
        </ul>
      </li> 
      <li class="header">ADMINISTRASI HOTEL</li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-bed"></i>
                <span>Kamar</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url('kamar') ?>"><i class="fa fa-circle-o"></i> Tambah Kamar</a></li>
                <li><a href="<?php echo base_url('kamar/tampil_list/') ?>"><i class="fa fa-circle-o"></i> Lihat Kamar</a></li>
                <li><a href="<?php echo site_url('tipekamar') ?>"><i class="fa fa-circle-o"></i> Tipe Kamar</a></li>
                <li><a href="<?php echo base_url('Tipekamar/tampil_list/') ?>"><i class="fa fa-circle-o"></i> Lihat Tipe Kamar</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-cutlery"></i>
                <span>Layanan</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url('layanan/tampil_list/') ?>"><i class="fa fa-circle-o"></i> Lihat Layanan</a></li>
                <li><a href="<?php echo base_url('layanan') ?>"><i class="fa fa-circle-o"></i> Tambah Layanan</a></li>
                <li><a href="<?php echo base_url('kategorilayanan') ?>"><i class="fa fa-circle-o"></i> Kategori Layanan</a></li>
                <li><a href="<?php echo base_url('Kategorilayanan/tampil_list/') ?>"><i class="fa fa-circle-o"></i> Lihat Kategori Layanan</a></li>
              </ul>
            </li>
            <!-- <li class="treeview">
              <a href="#">
                <i class="fa fa-user"></i>
                <span>User Manager</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url('userpengguna/') ?>"><i class="fa fa-circle-o"></i> User Pengguna</a></li>
                <li><a href="<?php echo base_url('userpengguna/tampil_list') ?>"><i class="fa fa-circle-o"></i> Daftar Pengguna</a></li>


              </ul>
            </li> -->
            <li class="treeview">
              <a href="#">
                <i class="fa fa-exchange"></i>
                <span>Laporan</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url('transaksikamar') ?>"><i class="fa fa-circle-o"></i> Transaksi Kamar</a></li>
               </ul>
            </li>
        </ul>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
