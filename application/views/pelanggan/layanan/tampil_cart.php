<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Nareswari Villa</title>
  <?php $this->load->view('pelanggan/template_pelanggan/head') ?>
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/colorlib-wizard/fonts/material-design-iconic-font/css/material-design-iconic-font.css">

  <link rel="stylesheet" href="<?php echo base_url() ?>assets/colorlib-wizard/css/style.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <?php $this->load->view('pelanggan/template_pelanggan/header') ?>
    <?php $this->load->view('pelanggan/template_pelanggan/side') ?>
    <div class="content-wrapper">
      <section class="content">
        <div class="box">
          <form>
            <div class="box-body">
              <div class="row">
                <div class="col-sm-4">
                 <?php echo form_open('pelanggan/layanan/updateCart'); ?>

        <table class="table table-bordered" id="dataTable" width="500%" cellspacing="0">

          <div class="card-header">
            <a href="<?php echo site_url('pelanggan/layanan') ?>"></i> Pesan Lagi?</a>
          </div>

        <tr>
                
                <th style="text-align:center;">Quantity</th>
                <th style="text-align:center;">Item Name</th>
                <th style="text-align:center;">Item Price</th>
                <th style="text-align:center;">Sub-Total</th>
                <th style="text-align:center;">Options</th>
        </tr>

        <?php $i = 1; ?>

        <?php foreach ($this->cart->contents() as $items): ?>

                <?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>

        <tr>

                <td style="text-align:center;"><?php echo form_input(array('name' => 'qty'.$i, 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?></td>

                <td width="100%" style="text-align:center;">
                        <?php echo $items['name']; ?>

                        <?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>

                                <p>
                                        <?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>

                                                <strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />

                                        <?php endforeach; ?>
                                </p>

                        <?php endif; ?>
                </td>

                <td width="100%" style="text-align:center;"><?php echo $this->cart->format_number($items['price']); ?></td>

                <td width="50%" style="text-align:center;">Rp.<?php echo $this->cart->format_number($items['subtotal']); ?></td>

                <td style="text-align:center;">
                  <a> <?php echo anchor('pelanggan/layanan/hapusCart/'.$items['rowid'], 'Delete') ?></a>
                </td>
        </tr>

    <?php $i++; ?>

    <?php endforeach; ?>

    <tr>
            <td colspan="2"> </td>
            <td class="right" style="text-align:center;"><strong>Total</strong></td>
            <td width="200%" class="right" style="text-align:center;"><strong>Rp <?php echo $this->cart->format_number($this->cart->total()); ?></strong></td>
            <td></td>
    </tr>

    </table><br/>

      <p><button type="submit" class="btn btn-md btn-success">Update Your Cart</button> 
      </p>
      <a href="<?php echo base_url()?>pelanggan/layanan/check_out"  class ='btn btn-sm btn-primary'>Proses Order</a>
      </tr>
      </tr>
       
      </div>
        </div>
        
     
                  
                  
                </div>
            </div>
            
          </form>
        </div>
      </section>
    </div>
    <?php $this->load->view('pelanggan/template_pelanggan/footer') ?>
    <div class="control-sidebar-bg"></div>
  </div>
  <script src="<?php echo base_url() ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url() ?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <script src="<?php echo base_url() ?>assets/bower_components/fastclick/lib/fastclick.js"></script>
  <script src="<?php echo base_url() ?>assets/dist/js/adminlte.min.js"></script>
  <script src="<?php echo base_url() ?>assets/dist/js/demo.js"></script>
  <script src="<?php echo base_url() ?>assets/colorlib-wizard/js/jquery.steps.js"></script>
  <script src="<?php echo base_url() ?>assets/colorlib-wizard/js/main.js"></script>
  <script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
  </script>
</body>
</html>
