<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>

<header>
    <div class="header-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-8 col-lg-6">
                    <div class="header-top-left">
                        <ul>
                            <li><span>Opening Time :</span> 8:30 AM - 9:30 PM</li>
                        </ul>
                    </div>
                </div>

                <div class="col-xxl-4 col-lg-6">
                    <div class="topheader-info">
                        <div class="top-button f-right ">
                            <a href="{{ route('contact.index') }}">
                                CONTACT US
                            </a>
                        </div>
                        <div class="header-language f-right">
                            <select>
                                <option data-display="English">English</option>
                                <option value="1">Japan</option>
                            </select>
                        </div>
                        <div class="header-location f-right">
                            <ul>
                                <li>
                                    <i class="flaticon-pin"></i>
                                    <a href="mailto:info@prolife-mm.com">
                                        info@prolife-mm.com
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-menu header-sticky">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-xxl-2 col-xl-2 col-lg-2">
                    <div class="header-logo ">
                        <a href="index.html">
                            <img src="{{ asset('data/logo.jpg') }}" class="img-fluid" alt="img" style="width: 100px;">
                        </a>
                    </div>
                </div>

                <div class="col-xxl-8 col-xl-8 col-lg-8">
                    <div class="main-menu d-none d-lg-block ">
                        <nav id="mobile-menu">
                            <ul>

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

                                <li class="menu-item-has-children">
                                    <a href="javascript::void(0)">
                                        Gallery
                                    </a>
                                    <ul class="sub-menu">
                                        @foreach ($categories as $category)
                                            <li>
                                                <a href="{{ route('activities.show', $category->id) }}">
                                                    {{ $category->title ?? '' }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>

                            </ul>
                        </nav>
                    </div>

                    <div class="side-menu-icon d-lg-none text-end">
                        <button class="side-toggle"><i class="far fa-bars"></i></button>
                    </div>
                </div>

                <div class="col-xxl-2 col-xl-2 col-lg-2" style="background: red">
                    <div class="main-menu-wrapper d-flex align-items-center justify-content-end">
                        <div class="main-menu-wrapper__call-number d-flex align-items-center">
                            <div class="main-menu-wrapper__call-icon ">
                                <img src="{{ asset('assets/img/menu-icon/chatting.png') }}" alt="">
                            </div>
                            <div class="main-menu-wrapper__call-text">
                                <span>Contact Us</span>
                                <h6>
                                    <a href="tel:(555)58023059" style="color: white;">
                                        09 444 161997
                                    </a>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas-overlay"></div>
    <div class="fix">
        <div class="side-info">
            <button class="side-info-close"><i class="fal fa-times"></i></button>
            <div class="side-info-content">
                <div class="mobile-menu"></div>
            </div>
        </div>
    </div>
</header>
