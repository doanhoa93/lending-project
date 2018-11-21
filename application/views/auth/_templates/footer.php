<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>
<footer>
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12  col wow fadeInUp" data-wow-delay=".1s">
                    <div class="footer-widget footer-logo">
                        <h1>Lending</h1>
                        <p>Lor separat existentie es un myth. Por scientie, musica, sport etc, litot  usa li sam larLor separat existentie es un myth existentie.</p>
                        <ul>
                            <li><i class="fa fa-phone"></i> +455 5475 6645</li>
                            <li><i class="fa fa-envelope"></i> info@yourdomail.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".2s">
                    <div class="footer-widget footer-menu">
                        <h2>Footer Menu</h2>
                        <ul>
                            <li><a href="faq.html">Faq</a></li>
                            <li><a href="about.html">About us</a></li>
                            <li><a href="#">Customer Insights</a></li>
                            <li><a href="service.html">FInancial Service</a></li>
                            <li><a href="#">Business Devlopment</a></li>
                            <li><a href="">Project Management</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".3s">
                    <div class="footer-widget instagram-wrap">
                        <h2>Instagram</h2>
                        <ul>
                            <li><a href="#"><img src="<?php echo base_url($frameworks_dir . '/assets/images/instagram/1.jpg'); ?>" alt=""></a></li>
                            <li><a href="#"><img src="<?php echo base_url($frameworks_dir . '/assets/images/instagram/2.jpg'); ?>" alt=""></a></li>
                            <li><a href="#"><img src="<?php echo base_url($frameworks_dir . '/assets/images/instagram/3.jpg'); ?>" alt=""></a></li>
                            <li><a href="#"><img src="<?php echo base_url($frameworks_dir . '/assets/images/instagram/4.jpg'); ?>" alt=""></a></li>
                            <li><a href="#"><img src="<?php echo base_url($frameworks_dir . '/assets/images/instagram/5.jpg'); ?>" alt=""></a></li>
                            <li><a href="#"><img src="<?php echo base_url($frameworks_dir . '/assets/images/instagram/6.jpg'); ?>" alt=""></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".4s">
                    <div class="footer-widget quick-contact">
                        <h2>Quick Contact</h2>
                        <form action="#">
                            <input type="text" placeholder="Full Name">
                            <input type="email" placeholder="Email">
                            <textarea name="massage" id="massage" cols="30" rows="10" placeholder="Massage"></textarea>
                            <button type="button" name="button" class="btn-style">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom text-center">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" style="color: white;">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="<?php echo base_url($frameworks_dir . '/assets/js/vendor/jquery-1.12.4.min.js'); ?>"></script>
<!-- bootstrap js -->
<script src="<?php echo base_url($frameworks_dir . '/assets/js/bootstrap.min.js'); ?>"></script>
<!-- owl.carousel.2.0.0-beta.2.4 css -->
<script src="<?php echo base_url($frameworks_dir . '/assets/js/owl.carousel.min.js'); ?>"></script>
<!-- counterup.main.js -->
<script src="<?php echo base_url($frameworks_dir . '/assets/js/counterup.main.js'); ?>"></script>
<!-- isotope.pkgd.min.js -->
<script src="<?php echo base_url($frameworks_dir . '/assets/js/imagesloaded.pkgd.min.js'); ?>"></script>
<!-- isotope.pkgd.min.js -->
<script src="<?php echo base_url($frameworks_dir . '/assets/js/isotope.pkgd.min.js'); ?>"></script>
<!-- jquery.waypoints.min.js -->
<script src="<?php echo base_url($frameworks_dir . '/assets/js/jquery.waypoints.min.js'); ?>"></script>
<!-- jquery.magnific-popup.min.js -->
<script src="<?php echo base_url($frameworks_dir . '/assets/js/jquery.magnific-popup.min.js'); ?>"></script>
<!-- jquery.slicknav.min.js -->
<script src="<?php echo base_url($frameworks_dir . '/assets/js/jquery.slicknav.min.js'); ?>"></script>
<!-- snake.min.js -->
<script src="<?php echo base_url($frameworks_dir . '/assets/js/snake.min.js'); ?>"></script>
<!-- wow js -->
<script src="<?php echo base_url($frameworks_dir . '/assets/js/wow.min.js'); ?>"></script>
<!-- plugins js -->
<script src="<?php echo base_url($frameworks_dir . '/assets/js/plugins.js'); ?>"></script>
<!-- main js -->
<script src="<?php echo base_url($frameworks_dir . '/assets/js/scripts.js'); ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.11.0/sweetalert2.all.min.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script>
    function getValue(){
        alert($("#amount").val());
    }
    $(function() {
        $( "#slider-range-min" ).slider({
            range: "min",
            value: 50,
            min: 0,
            max: 100,
            slide: function( event, ui ) {
                $( "#amount" ).text('');
                $( "#amount" ).append('I need to borrow ' + "$" + ui.value + ",000");
            }
        });
        $( "#amount" ).append( "$" + $( "#slider-range-min" ).slider( "value") + ",000");
    });
</script>
<script type="text/javascript">
    function login() {
        swal({
            showCancelButton: false,
            showConfirmButton: false,
            html:'<div class="contact-area" style="margin:20px">'+
                    '<div class="form-style">' +
                        '<h3>Login now</h3>' +
                        '<form action="<?php echo site_url('auth/login'); ?>" method="post" id="cf">' +
                            '<div class="row">' +
                                '<div class="col-sm-12 col-xs-12">' +
                                    '<input type="email" name="identity" value="" id="identity" class="form-control" placeholder="Your email">' +
                                '</div>' +
                                '<div class="col-sm-12 col-xs-12">' +
                                    '<input type="password" name="password" value="" id="password" class="form-control" placeholder="Your password">' +
                                '</div>' +
                                '<div class="col-xs-12 quote-wrap">'+
                                    '<input type="submit" name="submit" value="Login" class="btn btn-primary btn-block btn-flat">' +
                                '</div>'+
                            '</div>' +
                        '</form>' +
                    '</div>' +
                '</div>'
        });
    }

    $('input[name=options]').click(function(){
        alert($(this).attr("id"));
    });
</script>
    </body>
</html>
