<footer class="footer_area p_120">
    <div class="container">
        <div class="row footer_inner">
            <div class="col-lg-4">
                <aside class="f_widget ab_widget">
                    <div class="f_title">
                        <h3>About Us</h3>
                    </div>
                    <p>Sur Home Services is an all-inclusive HVAC and Plumbing company based in Los Angeles, CA. If your heater is not working or you need a leaking pipe repaired, we've got you covered. For many years, our team has provided HVAC services ensuring our clients are comfortable in their homes no matter the weather!</p>
                </aside>
            </div>
            <div class="col-lg-4">
                <aside class="f_widget news_widget">
                    <div class="f_title">
                        <h3>Newsletter</h3>
                    </div>
                    <p>Stay updated with our latest trends</p>
                    <div id="">
                        @if(session()->has('x'))
                            <div class="">
                                {{ session('x') }}
                            </div>
                        @else
                            <form action="/subscribe" method="POST" class="subscribe_form relative">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <div class="input-group d-flex flex-row">
                                    <input name="EMAIL" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                                    <button class="btn sub-btn"><span class="lnr lnr-arrow-right"></span></button>
                                </div>
                                <div class="mt-10 info"></div>
                            </form>
                        @endif
                    </div>
                </aside>
            </div>
            <div class="col-lg-4">
                <aside class="f_widget social_widget">
                    <div class="f_title">
                        <h3>Site Map</h3>
                    </div>
                    <ul>
                        <li><a class="footer-link" href="/">Home</a></li>
                        <li><a class="footer-link" href="/about">About</a></li>
                        <li><a class="footer-link" href="/boilers">Boilers and Heating</a></li>
                        <li><a class="footer-link" href="/plumbing">Plumbing and drains</a></li>
                        <li><a class="footer-link" href="/electrical">Home electrical cover</a></li>
                        <li><a class="footer-link" href="/pricing">Pricing</a>
                        <li><a class="footer-link" href="/contact">Contact</a></li>
                    </ul>
                </aside>
            </div>
        </div>
        <div class="copy_right_text">
            <p>
                Copyright &copy;Sur Home Services. All rights reserved
            </p>
        </div>
    </div>
</footer>