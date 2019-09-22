@extends('layout')

@section('title', 'Sur Home Services')

@section('content')

    <!--================Home Banner Area =================-->
    <section class="home_banner_area" id="home">
        <div class="banner_inner">
            <div class="container">
                <div class="banner_content">
                    <h2>When things break down at home,  <br /><b style="color:#a7cb00;">we’ve got you covered</b></h2>
                    <p>Protect your boiler, heating, drains and more. We’re here to help whenever you need us.</p>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->


    <section class="home_info_are" style="margin-top: 80px;">
        <div class="container">
            <div class="main_title">
                <h2>Why To Choose Us</h2>
            </div>
            <div class="">

                <p>By choosing us, our promise to you – we set up appointments to suit your schedule,
                    and we arrive promptly to ensure an efficient visit.
                    Our team believes that every job should begin with a basic demonstration of common courtesy and respect by way of a polite,
                    professional technician arriving for their scheduled appointment on time. When we arrive, we show up in our "warehouse on wheels.
                    " This means our vehicles are fully stocked so you won't have to worry about us starting a job
                    and then wasting time running back to the office to grab an ordinary piece of equipment.</p>
            </div>
        </div>
    </section>
    <!--================Feature Area =================-->
    <section class="feature_area" style="margin-top: 60px;">
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
                        <a class="main_btn" href="/boilers">View Details</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="feature_item">
                        <img src="img/icon/2.jpg" alt="">
                        <h4>Plumbing and drains</h4>
                        <p>Cover your plumbing and drains for extra help and peace of mind when things go wrong.</p>
                        <a class="main_btn" href="/plumbing">View Details</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="feature_item">
                        <img src="img/icon/3.jpg" alt="">
                        <h4>Home electrical cover</h4>
                        <p>Not a fan of electrical DIY? Cover your electrics and we’ll come to the rescue the next time you have a problem.</p>
                        <a class="main_btn" href="/electrical">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Feature Area =================-->

    <!--================Testimonials Area =================-->
    <section class="testimonials_area p_120">
        <div class="container">
            <div class="main_title">
                <h2>What Customer Say About Us</h2>
            </div>
            <div class="testi_slider owl-carousel">
                <div class="item">
                    <div class="testi_item">
                        <div class="media">
                            <div class="media-body">
                                <p>Absolutely nothing needs to change. Service was fast... <br> Thank you.</p>
                                <h4>Mark Alviro Wiens</h4>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testi_item">
                        <div class="media">
                            <div class="media-body">
                                <p>They're very friendly and very knowledgeable And I'll definitely use them any time I need a plumber or electrical in my house.</p>
                                <h4>Arnold Moodey</h4>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testi_item">
                        <div class="media">
                            <div class="media-body">
                                <p>Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware.</p>
                                <h4>Vanig Sanossian</h4>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Testimonials Area =================-->

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
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendors/counter-up/jquery.counterup.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="vendors/popup/jquery.magnific-popup.min.js"></script>
    <script src="js/theme.js"></script>
@endsection