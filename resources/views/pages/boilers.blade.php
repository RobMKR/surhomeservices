@extends('layout')

@section('title', 'Sur Home Services')

@section('content')

    <!--================Home Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Boilers and Heating</h2>
                    <div class="page_link">
                        <a href="/">Home</a>
                        <a href="#">Boilers and Heating</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->


    <section class="design_area p_120">
        <div class="container">
            <div class="design_inner row">
                <div class="col-lg-5">
                    <img class="img-fluid" src="img/design-1.jpg" alt="">
                </div>
                <div class="col-lg-7">
                    <div class="design_left_text">
                        <h2>Wet Central <br>Heating System</h2>
                    </div>
                </div>
            </div>
            <div class="design_inner row" style="margin-top: 40px;">
                <div class="col-lg-12">

                    <p>
                        Wet systems are the US’s most common form of heating.
                        In a wet system, hot water flows through a network of pipes,
                        which connect to radiators throughout your home or business.
                        And at the system’s centre, a boiler burns fuel, which in turn heats the water that feeds the network of pipes.
                    </p>
                    <p>
                        Despite their name, radiators don’t just emit radiant heat. In fact, heaters pass the majority
                        of their heat through convection. Air, when warmed by a heater, rises naturally,
                        and cold air falls. As a result, hot air circulates and warms your room.
                    </p>
                    <p>
                        You may also connect your pipework to a hot water cylinder (tank), which provides enough hot water for a bath or washing your dishes.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="design_area">
        <div class="container">
            <div class="design_inner row">
                <div class="col-lg-7">
                    <div class="design_left_text" style="margin-left: 50px;">
                        <h2>Warm Air <br> Heating Systems</h2>
                    </div>
                </div>
                <div class="col-lg-5">
                    <img class="img-fluid" src="img/design-2.jpg" alt="">
                </div>
            </div>
            <div class="design_inner row" style="margin-top: 40px;">
                <div class="col-lg-12">

                    <p>
                        Most USA homes have gas fired boilers fitted. As if you have a gas supply, a
                        gas boiler is the most cost-effective way to warm your house or business.
                        However, warm air heating is also an affordable way to keep your home heated.
                    </p>
                    <p>
                        Warm air heating works by pulling the air into your property from an outside vent.
                        A gas fuelled flame heats the air, and then a system of ducts circulates it.
                        This heating works well inside insulated properties, and in one-storey houses and bungalows,
                        but also performs great in bigger homes and commercial premises.
                    </p>
                    <p>
                        Flame heated air is efficient and rivals your gas boiler concerning performance. Ducting air around your home is also productive.
                        It can heat a room in an instant, while also, preventing the build up of damp and condensation in your house.
                    </p>
                    <p>
                        Warm air heating is a good option for some homes. For example, a small flat that’s still under construction,
                        which allows us to inbuild the ducting. Or in a modern property,
                        which is well insulated and where you can fit a warm air system, this kind of heating can work well.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="design_area" style="margin-top: 50px; text-align: center; margin-bottom: 100px;">
        <div class="container">
            <div class="design_inner row">
                <div class="col-lg-12">
                    <h2>OTHER SERVICES WE ARE PROVIDING</h2>
                </div>
            </div>
            <div class="design_inner row" style="margin-top: 40px;">
                <div class="col-lg-12">

                    <h3>
                        Gas Appliance Installation
                    </h3>
                    <p>
                        Be careful: installing a boiler or a cooker can be difficult,
                        and if you don’t know what you’re doing, things can go wrong. Also,
                        a Gas Safe registered engineer must install all gas cookers and boilers.
                        If you do it yourself, you could nullify your landlord or home insurance policy.
                    </p>
                    <p>
                        At Sur Home, all our expert engineers are Gas Safe registered; we’re fully qualified to fit your gas appliance, be it a cooker or a boiler.
                    </p>
                </div>
                <br>
                <div class="col-lg-12">
                    <h3>Boiler Replacement</h3>
                    <p>
                        You don’t have to be a contract customer to qualify for a one off repair.
                        We can help anyone, no matter how big or small the job is.
                        One of our specialist heating engineers will examine your boiler, provide you with a price to repair it, then if you’re happy, fix it.
                    </p>
                </div>
            </div>
        </div>
    </section>


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