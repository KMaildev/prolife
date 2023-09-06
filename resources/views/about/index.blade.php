@extends('layouts.main')
@section('title', 'About of Our Company')
@section('content')
    <div class="page-title__area pt-110" style="background-image: url({{ asset('data/5.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12" style="height: 250px;">

                </div>
            </div>
        </div>
        <nav class="breadccrumb-bg">
            <ul class="breadcrumb justify-content-center pt-20 pb-20">
                <li class="bd-items">
                    <a href="{{ route('home') }}">Home</a>
                </li>
                <li class="bd-items bdritems">|</li>
                <li class="bd-items">
                    <a href="javascript::void(0)">
                        About of Our Company
                    </a>
                </li>
            </ul>
        </nav>
    </div>


    <section class="about-area pt-120 pb-90">
        <div class="container">
            <div class="row wow fadeInUp" data-wow-delay="0.2s"
                style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                <div class="col-xxl-6 col-xl-6 col-lg-6 mb-30">
                    <div class="section_title_wrapper">
                        <span class="subtitle">
                            About Us
                        </span>
                        <h2 class="section-title about-span mb-30">
                            <span>Prolife Co., Ltd</span>
                        </h2>
                        <div class="section_title_wrapper-about-content">
                            <h5>
                                Oversea Employment Service Agency
                            </h5>
                            <p style="text-align: justify; color: black;">
                                Welcome to Prolife Co., Ltd, your trusted partner in building bridges between aspiring
                                individuals and fulfilling opportunities. We are a dynamic organization that combines the
                                expertise of an overseas employment agency with the cultural richness of a Japanese language
                                school.
                            </p>

                            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                                <div class="about2__item d-flex  mb-20 mr-20">
                                    <div class="about2__icon">
                                        <i class="flaticon-fair-trade"></i>
                                    </div>
                                    <div class="about2__content">
                                        <h4>Expert guidance</h4>
                                        <p>
                                            Overseas Employment Service Agencies provide expert guidance
                                            for finding jobs abroad.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                                <div class="about2__item about2-border d-flex  mb-30 mr-20">
                                    <div class="about2__icon">
                                        <i class="flaticon-trophy"></i>
                                    </div>
                                    <div class="about2__content">
                                        <h4>Job connections</h4>
                                        <p>
                                            They have extensive networks with employers, enhancing your job
                                            prospects.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 mb-30">
                    <div class="about_wrapper">
                        <div class="about_wrapper__group">
                            <div class="about_wrapper__group-top mb-15">
                                <img src="{{ asset('data/6.jpg') }}" alt="">
                            </div>
                            <div class="about_wrapper__group-btm d-flex align-items-center justify-content-end">
                                <div class="about_wrapper__group-btm-img1 ml-30">
                                    <img src="{{ asset('data/7.jpg') }}" alt="">
                                </div>
                                <div class="about_wrapper__group-btm-img2 ml-15">
                                    <img src="{{ asset('data/8.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="histry-area pt-110 pb-90" style="background-image: url({{ asset('data/history.jpg') }});">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-10">
                    <div class="section_title_wrapper text-center wow fadeInUp" data-wow-delay="0.3s"
                        style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                        <h2 class="section-title white-color">
                            Prolife Co., Ltd 5+ Year's <br> Awesome History
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="ab-tabs pb-70">
        <div class="abtb-hr1">
            <span></span>
        </div>
        <div class="abtb-pth">
            <img src="{{ asset('assets/img/about/pth.png') }}" alt="">
        </div>
        <div class="container">
            <div class="row ">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                    <div class="price-tab pb-130 abtab-top">
                        <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link nav-radius active" id="pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                    aria-selected="true">2019 - 2021</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link navr-radius" id="pills-contact-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-contact" type="button" role="tab"
                                    aria-controls="pills-contact" aria-selected="false">2022 - 2023</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="row ">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                            <div class="abtb-content text-right pr-105 mb-45">
                                <div class="abtbs-round">
                                    <span></span>
                                </div>
                                <div class="abtb-mbr">
                                    <span></span>
                                </div>
                                <span>22 jan 1995</span>
                                <h4 class="abtb-title">
                                    Started Journey in New York
                                </h4>
                                <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end
                                    of the day, going forward, a new normal that has evolved from generation.</p>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                            <div class="abtb-content pl-105 mb-45">
                                <span>25 Aug 1994</span>
                                <h4 class="abtb-title">
                                    First Trophy Winner in World
                                </h4>
                                <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end
                                    of the day, going forward, a new normal that has evolved from generation.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                            <div class="abtb-content text-right pr-105 mb-45">
                                <div class="abtbs-round">
                                    <span></span>
                                </div>
                                <div class="abtb-mbr">
                                    <span></span>
                                </div>
                                <span>22 jan 1995</span>
                                <h4 class="abtb-title">
                                    Started Journey in New York
                                </h4>
                                <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end
                                    of the day, going forward, a new normal that has evolved from generation.</p>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                            <div class="abtb-content pl-105 mb-45">
                                <span>25 Aug 1994</span>
                                <h4 class="abtb-title">
                                    First Trophy Winner in World
                                </h4>
                                <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end
                                    of the day, going forward, a new normal that has evolved from generation.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <div class="row ">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                            <div class="abtb-content text-right pr-105 mb-45">
                                <div class="abtbs-round">
                                    <span></span>
                                </div>
                                <div class="abtb-mbr">
                                    <span></span>
                                </div>
                                <span>22 jan 1995</span>
                                <h4 class="abtb-title">
                                    Started Journey in New York
                                </h4>
                                <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end
                                    of the day, going forward, a new normal that has evolved from generation.</p>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                            <div class="abtb-content pl-105 mb-45">
                                <span>25 Aug 1994</span>
                                <h4 class="abtb-title">
                                    First Trophy Winner in World
                                </h4>
                                <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end
                                    of the day, going forward, a new normal that has evolved from generation.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                            <div class="abtb-content text-right pr-105 mb-45">
                                <div class="abtbs-round">
                                    <span></span>
                                </div>
                                <div class="abtb-mbr">
                                    <span></span>
                                </div>
                                <span>22 jan 1995</span>
                                <h4 class="abtb-title">
                                    Started Journey in New York
                                </h4>
                                <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end
                                    of the day, going forward, a new normal that has evolved from generation.</p>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                            <div class="abtb-content pl-105 mb-45">
                                <span>25 Aug 1994</span>
                                <h4 class="abtb-title">
                                    First Trophy Winner in World
                                </h4>
                                <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end
                                    of the day, going forward, a new normal that has evolved from generation.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
