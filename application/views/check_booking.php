<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
<?php
  $path = 'assets/frontend/';
?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Villa Prabu</title>
    <link rel="icon" href="<?=base_url($path.'img/favicon.png')?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=base_url($path.'css/bootstrap.min.css')?>">
    <!-- animate CSS -->
    <link rel="stylesheet" href="<?=base_url($path.'css/animate.css')?>">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="<?=base_url($path.'css/owl.carousel.min.css')?>">
    <!-- themify CSS -->
    <link rel="stylesheet" href="<?=base_url($path.'css/themify-icons.css')?>">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="<?=base_url($path.'css/flaticon.css')?>">
    <!-- fontawesome CSS -->
    <link rel="stylesheet" href="<?=base_url('assets/bower_components/font-awesome/css/font-awesome.min.css')?>">
    <!-- magnific CSS -->
    <link rel="stylesheet" href="<?=base_url($path.'css/magnific-popup.css')?>">
    <link rel="stylesheet" href="<?=base_url($path.'css/gijgo.min.css')?>">
    <!-- niceselect CSS -->
    <link rel="stylesheet" href="<?=base_url($path.'css/nice-select.css')?>">
    <!-- slick CSS -->
    <link rel="stylesheet" href="<?=base_url($path.'css/slick.css')?>">
    <!-- style CSS -->
    <link rel="stylesheet" href="<?=base_url($path.'css/style.css')?>">
</head>

<body>
    
    <!-- booking part start-->
    <section class="booking_part section_padding" id="booking">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="booking_content">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="form" role="tabpanel" aria-labelledby="hotel-tab">
                                <div class="booking_form">
                                    <p><small>Kode Booking</small></p>
                                    <h2><?=@$data['id']?></h2>
                                    <p><small>Status</small></p>
                                    <h5><?=(@$data['status'] == 'BARU')?'<b>BELUM DIKONFIRMASI</b>':$data['status'] ?></h5>
                                    <p><small>Tanggal</small></p>
                                    <h5><?=@date('D, d F Y', strtotime($data['tgl_book']))?></h5>
                                    <p><small>Datang</small></p>
                                    <h5><?=(@$data['checkin'] != null)?@date('D, d F Y', strtotime($data['checkin'])):'-'?></h5>
                                    <p><small>Keberangkatan</small></p>
                                    <h5><?=(@$data['checkout'] != null)?@date('D, d F Y', strtotime($data['checkout'])):'-'?></h5>
                                    <p><small>Jumlah</small></p>
                                    <h3><?=$data['night']?> malam</h3>
                                    <hr>
                                    <p><small>Pemesan</small></p>
                                    <h2><?=$data['nama_pelanggan']?></h2>
                                    <h4><?=$data['email']?></h4>
                                    <h4><?=$data['phone']?></h4>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="booking_content">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="hotel" role="tabpanel" aria-labelledby="hotel-tab">
                                <div class="booking_form">
                                    <h3>Detail</h3>
                                    <table class="table">
                                        <?php
                                        foreach($data['detail'] as $item){
                                            echo "<tr>
                                                <td>".date('D, d F Y', strtotime($item['tanggal']))."
                                                    <br>
                                                    $item['tipe']
                                                </td>

                                                <td>".$item['nama_kamar']."</td>
                                                <td class='text-right'>Rp ".number_format($item['harga'], 2, ',', '.')."</td>
                                            </tr>";
                                        }
                                        ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- jquery plugins here-->
    <script src="<?=base_url($path.'js/jquery-1.12.1.min.js')?>"></script>
    <!-- popper js -->
    <script src="<?=base_url($path.'js/popper.min.js')?>"></script>
    <!-- bootstrap js -->
    <script src="<?=base_url($path.'js/bootstrap.min.js')?>"></script>
    <!-- magnific js -->
    <script src="<?=base_url($path.'js/jquery.magnific-popup.js')?>"></script>
    <!-- swiper js -->
    <script src="<?=base_url($path.'js/owl.carousel.min.js')?>"></script>
    <!-- masonry js -->
    <script src="<?=base_url($path.'js/masonry.pkgd.js')?>"></script>
    <!-- masonry js -->
    <script src="<?=base_url($path.'js/jquery.nice-select.min.js')?>"></script>
    <script src="<?=base_url($path.'js/gijgo.min.js')?>"></script>
    <!-- contact js -->
    <script src="<?=base_url($path.'js/jquery.ajaxchimp.min.js')?>"></script>
    <script src="<?=base_url($path.'js/jquery.form.js')?>"></script>
    <script src="<?=base_url($path.'js/jquery.validate.min.js')?>"></script>
    <script src="<?=base_url($path.'js/mail-script.js')?>"></script>
    <script src="<?=base_url($path.'js/contact.js')?>"></script>
    <!-- custom js -->
    <script src="<?=base_url($path.'js/custom.js')?>"></script>
</body>

</html>