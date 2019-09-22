@extends('layout')

@section('title', 'Sur Home Services')

@section('content')

    <!--================Home Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Services</h2>
                    <div class="page_link">
                        <a href="index.html">Home</a>
                        <a href="services.html">Services</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Feature Area =================-->
    <section class="feature_area" style="margin-top: 120px;">
        <div class="container">
            <div class="main_title">
                <h2>What we offer to our clients</h2>
                <p>We've got home improvement solutions to give you peace of mind with your heating, hot water and electrics.</p>
            </div>
            <div class="feature_inner row">
                <div class="col-lg-4">
                    <div class="feature_item">
                        <img src="img/icon/1.jpg" alt="">
                        <h4>Boilers and heating</h4>
                        <p>We recommend getting your boiler serviced around once a year to keep it in good working order.</p>
                        <a class="main_btn" href="#">View Details</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="feature_item">
                        <img src="img/icon/2.jpg" alt="">
                        <h4>Plumbing and drains</h4>
                        <p>Cover your plumbing and drains for extra help and peace of mind when things go wrong.</p>
                        <a class="main_btn" href="#">View Details</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="feature_item">
                        <img src="img/icon/3.jpg" alt="">
                        <h4>Home electrical cover</h4>
                        <p>Not a fan of electrical DIY? Cover your electrics and we’ll come to the rescue the next time you have a problem.</p>
                        <a class="main_btn" href="#">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Feature Area =================-->

    <!--================Post Slider Area =================-->
    <section class="post_slider_area">
        <div class="main_title">
            <h2>Our Recent Completed Projects</h2>
            <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for as low as $.17 each.</p>
        </div>
        <div class="post_slider_inner owl-carousel">
            <div class="item">
                <div class="post_s_item">
                    <div class="post_img">
                        <img src="img/post-slider/post-s-1.jpg" alt="">
                    </div>
                    <div class="post_text">
                        <a href="single-blog.html"><h4>Nest Protect: 2nd Gen Smoke + CO Alarm</h4></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                        <a class="main_btn" href="#">View Details</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="post_s_item">
                    <div class="post_img">
                        <img src="img/post-slider/post-s-2.jpg" alt="">
                    </div>
                    <div class="post_text">
                        <a href="single-blog.html"><h4>Nest Protect: 2nd Gen Smoke + CO Alarm</h4></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                        <a class="main_btn" href="#">View Details</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="post_s_item">
                    <div class="post_img">
                        <img src="img/post-slider/post-s-3.jpg" alt="">
                    </div>
                    <div class="post_text">
                        <a href="single-blog.html"><h4>Nest Protect: 2nd Gen Smoke + CO Alarm</h4></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                        <a class="main_btn" href="#">View Details</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="post_s_item">
                    <div class="post_img">
                        <img src="img/post-slider/post-s-4.jpg" alt="">
                    </div>
                    <div class="post_text">
                        <a href="single-blog.html"><h4>Nest Protect: 2nd Gen Smoke + CO Alarm</h4></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                        <a class="main_btn" href="#">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Post Slider Area =================-->

    <!--================Clients Logo Area =================-->
    <section class="clients_logo_area p_120">
        <div class="container">
            <div class="clients_slider owl-carousel">
                <div class="item">
                    <img src="img/clients-logo/c-logo-1.png" alt="">
                </div>
                <div class="item">
                    <img src="img/clients-logo/c-logo-2.png" alt="">
                </div>
                <div class="item">
                    <img src="img/clients-logo/c-logo-3.png" alt="">
                </div>
                <div class="item">
                    <img src="img/clients-logo/c-logo-4.png" alt="">
                </div>
                <div class="item">
                    <img src="img/clients-logo/c-logo-5.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <!--================End Clients Logo Area =================-->

@endsection

@section('end')
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/stellar.js"></script>
    <script src="vendors/lightbox/simpleLightbox.min.js"></script>
    <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="vendors/isotope/isotope-min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="vendors/popup/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendors/counter-up/jquery.counterup.js"></script>
    <script src="js/theme.js"></script>
@endsection