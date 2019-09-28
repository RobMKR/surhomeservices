@extends('layout')

@section('title', 'Sur Home Services')

@section('content')

    <!--================Home Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Pricing</h2>
                    <div class="page_link">
                        <a href="index.html">Home</a>
                        <a href="#">Pricing</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->

    <div class="container">
        <div class="row">
            <div class="col-md-12" style="text-align: center; margin: 50px 0">
                <h3 style="text-align: center; margin-bottom: 50px" >Central Heating Prices</h3>
                <table border="0" cellspacing="0" style="margin: 0 auto;" cellpadding="6" bgcolor="f1f1f1">
                    <thead>
                    <tr style="color: #fff">
                        <td bgcolor="#a7cb00" width="180">
                            <div align="center">
                                <div class="tabletitles">Size of Property</div>
                            </div>
                        </td>
                        <td bgcolor="#a7cb00" width="180">
                            <div align="center">
                                <div class="tabletitles">Number of Radiators</div>
                            </div>
                        </td>
                        <td bgcolor="#a7cb00" width="180">
                            <div align="center">
                                <div class="tabletitles">Boiler Size</div>
                            </div>
                        </td>
                        <td bgcolor="#a7cb00" width="180">
                            <div align="center">
                                <div class="tabletitles">Total Cost</div>
                            </div>
                        </td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr bgcolor="#FFFFFF">
                        <td>
                            <div align="center">1 bed bungalow</div>
                        </td>
                        <td>
                            <div align="center">5</div>
                        </td>
                        <td>
                            <div align="center">24kw</div>
                        </td>
                        <td>
                            <div align="center">~ $2,500</div>
                        </td>
                    </tr>
                    <tr bgcolor="#f8ffda">
                        <td>
                            <div style="text-align: center;" align="center">2 bed house</div>
                        </td>
                        <td style="text-align: center;">6</td>
                        <td>
                            <div style="text-align: center;" align="center">24kw</div>
                        </td>
                        <td>
                            <div style="text-align: center;" align="center">~ $3,000</div>
                        </td>
                    </tr>
                    <tr bgcolor="#FFFFFF">
                        <td>
                            <div align="center">3 bed house</div>
                        </td>
                        <td>
                            <div align="center">9</div>
                        </td>
                        <td>
                            <div align="center">28kw</div>
                        </td>
                        <td>
                            <div align="center">~ $3,500</div>
                        </td>
                    </tr>
                    <tr bgcolor="#f8ffda">
                        <td>
                            <div align="center">4 bed house</div>
                        </td>
                        <td>
                            <div align="center">10</div>
                        </td>
                        <td>
                            <div align="center">33kw</div>
                        </td>
                        <td>
                            <div align="center">~ $4,000</div>
                        </td>
                    </tr>
                    <tr bgcolor="#FFFFFF">
                        <td>
                            <div align="center">5 bed house</div>
                        </td>
                        <td>
                            <div align="center">12</div>
                        </td>
                        <td>
                            <div align="center">33kw</div>
                        </td>
                        <td>
                            <div align="center">~ $4,500</div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="text-align: center; margin: 50px 0">
                <h3 style="text-align: center; margin-bottom: 50px" >Plumbing Services Pricing</h3>
                <table border="0" cellspacing="0" style="margin: 0 auto;" cellpadding="6" bgcolor="f1f1f1">
                    <thead>
                    <tr style="color: #fff">
                        <td bgcolor="#a7cb00" width="320">
                            <div align="center">
                                <div class="tabletitles">Service Type</div>
                            </div>
                        </td>
                        <td bgcolor="#a7cb00" width="320">
                            <div align="center">
                                <div class="tabletitles">Description</div>
                            </div>
                        </td>
                        <td bgcolor="#a7cb00" width="320">
                            <div align="center">
                                <div class="tabletitles">Total Cost</div>
                            </div>
                        </td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr bgcolor="#FFFFFF">
                        <td>
                            <div align="center">CLOGGED SINK DRAIN</div>
                        </td>
                        <td>
                            <div align="center">single drain with drain clean-out access</div>
                        </td>
                        <td>
                            <div align="center">~ $99</div>
                        </td>
                    </tr>
                    <tr bgcolor="#f8ffda">
                        <td>
                            <div style="text-align: center;" align="center">WATER LEAK DETECTION</div>
                        </td>
                        <td>
                            <div style="text-align: center;" align="center">electronic slab leak detection equipment</div>
                        </td>
                        <td>
                            <div style="text-align: center;" align="center">~ $199</div>
                        </td>
                    </tr>
                    <tr bgcolor="#FFFFFF">
                        <td>
                            <div align="center">WATER PRESSURE REGULATOR</div>
                        </td>
                        <td>
                            <div align="center">3/4" residential water regulator w/ install</div>
                        </td>
                        <td>
                            <div align="center">~ $275</div>
                        </td>
                    </tr>
                    <tr bgcolor="#f8ffda">
                        <td>
                            <div align="center">WATER LEAK REPAIR</div>
                        </td>
                        <td>
                            <div align="center">prices starting at</div>
                        </td>
                        <td>
                            <div align="center">~ $175</div>
                        </td>
                    </tr>
                    <tr bgcolor="#FFFFFF">
                        <td>
                            <div align="center">TOILET REPAIR</div>
                        </td>
                        <td>
                            <div align="center">includes universal toilet parts</div>
                        </td>
                        <td>
                            <div align="center">~ $105-$175</div>
                        </td>
                    </tr>

                    <tr bgcolor="#f8ffda">
                        <td>
                            <div align="center">FAUCET REPAIR SINK OR SHOWER</div>
                        </td>
                        <td>
                            <div align="center">includes install & most cartridge brands</div>
                        </td>
                        <td>
                            <div align="center">~ $195</div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12" style="text-align: center; margin: 50px 0">
                <h3 style="text-align: center; margin-bottom: 50px" >Home Electrical Cover Prices</h3>
                <table border="0" cellspacing="0" style="margin: 0 auto;" cellpadding="6" bgcolor="f1f1f1">
                    <thead>
                    <tr style="color: #fff">
                        <td bgcolor="#a7cb00" width="320">
                            <div align="center">
                                <div class="tabletitles">Service</div>
                            </div>
                        </td>
                        <td bgcolor="#a7cb00" width="320">
                            <div align="center">
                                <div class="tabletitles">Price</div>
                            </div>
                        </td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr bgcolor="#FFFFFF">
                        <td>
                            <div align="center">Fuse Board Upgrades</div>
                        </td>
                        <td>
                            <div align="center">Starting from $600</div>
                        </td>
                    </tr>
                    <tr bgcolor="#f8ffda">
                        <td>
                            <div style="text-align: center;" align="center">Electrical Installation Condition Report</div>
                        </td>
                        <td>
                            <div style="text-align: center;" align="center">~ $250</div>
                        </td>
                    </tr>
                    <tr bgcolor="#FFFFFF">
                        <td>
                            <div align="center">Smoke alarm installations</div>
                        </td>
                        <td>
                            <div align="center">~ $125</div>
                        </td>
                    </tr>
                    <tr bgcolor="#f8ffda">
                        <td>
                            <div align="center">Electric cooker and hob installations</div>
                        </td>
                        <td>
                            <div align="center">~ $115</div>
                        </td>
                    </tr>
                    <tr bgcolor="#FFFFFF">
                        <td>
                            <div align="center">Additional sockets</div>
                        </td>
                        <td>
                            <div align="center">~ $60</div>
                        </td>
                    </tr>
                    <tr bgcolor="#f8ffda">
                        <td>
                            <div align="center">Spot light installations</div>
                        </td>
                        <td>
                            <div align="center">~ $80</div>
                        </td>
                    </tr>
                    <tr bgcolor="#FFFFFF">
                        <td>
                            <div align="center">Outside lighting and power</div>
                        </td>
                        <td>
                            <div align="center">~ $140</div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

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