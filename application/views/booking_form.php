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
    
    <!-- about us css start-->
    <section class="about_us section_padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="about_img">
                        <img src="<?=base_url('uploads/'.((!isset($room_img) || $room_img=='')?'standard-room.jpg':$item->img))?>" alt="#">
                    </div>
                </div>
                <div class="col-lg-8">
                    <h2><?=$room->no_kamar?></h2>
                    <p>Include <?=$room->kapasitas?> persons</p>
                    <h4><?=number_format($room->harga, 2, ',', '.')?>/night</h4>
                    <p><?=$room->desc?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- banner part start-->

    <!-- booking part start-->
    <section class="booking_part" id="booking">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="booking_content">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="form" role="tabpanel" aria-labelledby="hotel-tab">
                                <div class="booking_form">
                                    <h4>Bookingan anda</h4>
                                    <p><small>Checkin</small></p>
                                    <h5><?=date('D, d F Y', strtotime($checkin))?></h5>
                                    <p><small>Checkout</small></p>
                                    <h5><?=date('D, d F Y', strtotime($checkout))?></h5>
                                   <table class="table table-bordered">
                                       <tr>
                                           <th>Date</th>
                                           <th>Kamar</th>
                                           <th>Biaya</th>
                                       </tr>
                                       <?php
                                       $total = 0;
                                       foreach ($tagihan as $item) {
                                            echo "
                                       <tr>
                                           <td>".date('D, d F Y', strtotime($item->date))."</td>
                                           <td>".$item->kamar."</td>
                                           <td class='text-right'>Rp ".number_format($item->biaya, 2, ',', '.')."</td>
                                       </tr>";
                                       $total += $item->biaya;
                                       }
                                       echo "<tr>
                                       <td colspan='2' class='text-right'>Total</td><td class='text-right'>Rp".number_format($total, 2, ',', '.')."</td>
                                       </tr>";
                                       ?>
                                   </table>
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
                                    <h3>Form Booking</h3>
                                    <form action="<?=base_url('/booking')?>" method="post" enctype="multipart/form-data">
                                        <input type="text" name="data" value='<?=$data?>' hidden>
                                        <div class="form-group">
                                            <label for="nama">Nama</label>
                                            <input type="text" name="nama" id="nama" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" id="email" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Phone Number</label>
                                            <input type="phone" name="phone_number" id="phone" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat">Alamat</label>
                                            <input type="text" name="alamat" id="alamat" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat">No. Rekening</label>
                                            <input type="number" name="no_rek" id="no_rek" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="bukti_bayar">Bukti Bayar</label>
                                            <input type="file" name="bukti_bayar" id="bukti_bayar" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">SUBMIT</button>
                                        </div>
                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Header part end-->

    <!--top place start-->
    <section class="top_place" style="margin-top: 24px">
        <div class="container">
            
        </div>
    </section>
    <!--top place end-->
    <!-- footer part start-->
    <footer class="footer-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-6 col-md-5">
                    <div class="single-footer-widget">
                        <h4>Discover Destination</h4>
                        <ul>
                            <li><a href="#">Miami, USA</a></li>
                            <li><a href="#">California, USA</a></li>
                            <li><a href="#">London, UK</a></li>
                            <li><a href="#">Saintmartine, Bangladesh</a></li>
                            <li><a href="#">Mount Everast, India</a></li>
                            <li><a href="#">Sidney, Australia</a></li>
                            <li><a href="#">Miami, USA</a></li>
                            <li><a href="#">California, USA</a></li>
                            <li><a href="#">London, UK</a></li>
                            <li><a href="#">Saintmartine, Bangladesh</a></li>
                            <li><a href="#">Mount Everast, India</a></li>
                            <li><a href="#">Sidney, Australia</a></li>
                        </ul>

                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="single-footer-widget">
                        <h4>Subscribe Newsletter</h4>
                        <div class="form-wrap" id="mc_embed_signup">
                            <form target="_blank"
                                action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                method="get" class="form-inline">
                                <input class="form-control" name="EMAIL" placeholder="Your Email Address"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '"
                                    required="" type="email">
                                <button class="click-btn btn btn-default text-uppercase"> <i class="far fa-paper-plane"></i>
                                </button>
                                <div style="position: absolute; left: -5000px;">
                                    <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value=""
                                        type="text">
                                </div>

                                <div class="info"></div>
                            </form>
                        </div>
                        <p>Subscribe our newsletter to get update news and offers</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="single-footer-widget footer_icon">
                        <h4>Contact Us</h4>
                        <p>4156, New garden, New York, USA
                                +880 362 352 783</p>
                        <span>contact@martine.com</span>
                        <div class="social-icons">
                            <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-twitter-alt"></i></a>
                            <a href="#"><i class="ti-pinterest"></i></a>
                            <a href="#"><i class="ti-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="copyright_part_text text-center">
                        <p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer part end-->

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