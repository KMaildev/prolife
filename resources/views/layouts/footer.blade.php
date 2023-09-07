<footer class="footer-area footer-bg pt-95">
    <div class="container">
        <div class="row">
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                <div class="footer-about-1">
                    <div class="footer-about-1-content">
                        <div class="footer-logo footer-logo-3 mb-30">
                            <a href="#">
                                <img src="{{ asset('data/logo_bg.png') }}" alt="">
                            </a>
                        </div>
                        <p class="mb-50">
                            Overseas Employment Service Agencies provide expert guidance for finding jobs abroad.
                            <br><br>
                            They have extensive networks with employers, enhancing your job prospects.
                        </p>
                        <h4 class="footer-about-1__title mb-30">
                            Follow Us
                        </h4>
                        <ul class="social_links">
                            <li>
                                <a class="" href="https://www.facebook.com/Azamicompany/" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a class="" href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a class="" href="#">
                                    <i class="fab fa-instagram"></i>

                                </a>
                            </li>
                            <li>
                                <a class="" href="#">
                                    <i class="fab fa-pinterest-p"></i>
                                </a>
                            </li>
                            <li>
                                <a class="" href="#">
                                    <i class="fab fa-pinterest-p"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-6">
                <div class="footer-widget footer-2 footer-btm-mobile ml-30">
                    <h3 class="footer-widget__title mb-25">
                        Quick Links
                    </h3>
                    <ul class="footer-widget_menu-link">
                        <li>
                            <a href="{{ route('home') }}">
                                Myanmar
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('about.index') }}">
                                Our Company
                            </a>
                        </li>


                        <li>
                            <a href="{{ route('technical') }}">
                                Technicians
                            </a>
                        </li>


                        <li>
                            <a href="{{ route('skilled_worker.index') }}">
                                Skilled Workers
                            </a>
                        </li>

                        @foreach ($categories as $category)
                            <li>
                                <a href="{{ route('activities.show', $category->id) }}">
                                    {{ $category->title ?? '' }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6">
                <div class="footer-widget footer-3 footer-btm-mobile ml-50">
                    <h3 class="footer-widget__title mb-25">
                        Facebook
                    </h3>
                    <div id="fb-root"></div>
                    <script async defer crossorigin="anonymous"
                        src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v14.0&appId=210045094312905&autoLogAppEvents=1"
                        nonce="PosYNXjc"></script>

                    <div class="fb-page" data-href="https://www.facebook.com/Azamicompany" data-tabs="timeline"
                        data-width="100" data-height="250" data-small-header="false" data-adapt-container-width="true"
                        data-hide-cover="false" data-show-facepile="true">
                        <blockquote cite="https://www.facebook.com/Azamicompany" class="fb-xfbml-parse-ignore"><a
                                href="https://www.facebook.com/Azamicompany">Facebook</a>
                        </blockquote>
                    </div>
                </div>
            </div>

            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6">
                <div class="footer-widget footer-4 footer-btm-mobile ml-40">
                    <h3 class="footer-widget__title mb-25">
                        Get in Touch
                    </h3>
                    <ul class="footer-widget_menu-link-info">
                        <li>
                            <a href="tel:+95 9 430 240 39">
                                <i class="far fa-phone-alt"></i>
                                <span>
                                    +95 9 430 240 39
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="mailto:info@prolife-mm.com">
                                <i class="fal fa-envelope"></i>
                                <span>
                                    info@prolife-mm.com
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript::void(0)">
                                <i class="fal fa-map"></i>
                                No.11-B, Tharaphy Street, Saw Yan Paing West Quarter, Ahlone Township, Yangon, Myanmar.
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- Footer Copy right start -->
<div class="footer-copyright-area">
    <div class="container">
        <div class="row">
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                <div
                    class="footer-copyright__wrapper footer-copyright-home dis-none d-flex align-items-center theme-bg">
                    <div class="footer-copyright__wrapper__icon mr-10">
                        <i class="fal fa-headset"></i>
                    </div>
                    <div class="footer-copyright__wrapper__call-number copy-right-cell">
                        <span>Call - Or - SMS</span>
                        <h5>
                            <a href="tel:+95 9 430 240 39">
                                +95 9 430 240 39
                            </a>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8">
                <div class="row subscribe-top align-items-center">
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <h4 class="copyright-title">
                            Keep in Touch
                        </h4>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 ">
                        <div class="subscribe-footer">
                            <a href="{{ route('contact.index') }}" class="theme-btn">
                                Contact Us
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row copyright-botom-padding align-items-center">
                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                        <div class="copyright-botom">
                            <center>
                                <p>
                                    Copyright ©{{ now()->year }}
                                    All Rights Reserved
                                </p>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer Copy right start -->
