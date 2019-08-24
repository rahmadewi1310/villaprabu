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
        <a href="<?=base_url('admin/dashboard')?>">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>
      <li>
        <a href="<?=base_url('admin/book')?>">
          <i class="fa fa-tag"></i> <span>Booking</span>
        </a>
      </li>
      
      <li class="header">MASTER DATA</li>
      <li><a href="<?php echo base_url('admin/masterdata/admin') ?>"><i class="fa fa-users"></i>Data Admin </a></li>
      <li><a href="<?php echo site_url('admin/masterdata/kamar') ?>"><i class="fa fa-home"></i>Data Kamar</a></li>
      <li class="header">LAPORAN</li>
      <li><a href="<?php echo base_url('admin/laporan/booking') ?>"><i class="fa fa-tags"></i>Laporan Booking</a></li>
      <li><a href="<?php echo site_url('admin/laporan/pelanggan') ?>"><i class="fa fa-user"></i>Laporan Pelanggan</a></li>
      <li><a href="<?php echo site_url('admin/laporan/kamar') ?>"><i class="fa fa-home"></i>Laporan Kamar</a></li>
      
    </ul>
  </li>
</ul>
</section>
</aside>
