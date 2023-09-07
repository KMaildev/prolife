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
                        <div class="about_wrapper__certificate">
                            <img src="{{ asset('data/logo.jpg') }}" alt="" style="width: 180px; border-radius: 50%;">
                        </div>  
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
                            Prolife Company Limited 5+ Year's <br> Awesome History
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



    <section class="team-area grey-soft-bg pt-110 pb-80"
        style="background-image: url({{ asset('assets/img/testimonial/tsti1-bg.html') }});">
        <div class="container">
            <div class="row justify-content-center wow fadeInUp" data-wow-delay="0.3s"
                style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                <div class="col-xxl-10">
                    <div class="section_title_wrapper text-center mb-50">
                        <span class="subtitle">
                            Prolife Co., Ltd
                        </span>
                        <h2 class="section-title">
                            Company Profile
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 wow fadeInUp" data-wow-delay="0.3s"
                    style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <style>
                        .table {
                            border-collapse: collapse;
                            border: 1px solid black;
                            width: 100%;
                        }

                        th,
                        td {
                            border: 1px solid black;
                        }
                    </style>
                    <table class="table" style="background-color: white">
                        <tbody>
                            <tr>
                                <td style="color:white; background-color:#2e3094; width: 20%;">
                                    会社名
                                </td>

                                <td style="color:black;">
                                    Prolife Co., Ltd
                                </td>
                            </tr>

                            <tr>
                                <td style="color:black;">
                                    本社所在地
                                </td>

                                <td style="color:black;">
                                    No.11-B, Tharaphy Street, Saw Yan Paing West Quarter, Ahlone Township, Yangon, Myanmar.
                                </td>
                            </tr>

                            <tr>
                                <td style="color:white; background-color:#2e3094;">
                                    代表
                                </td>

                                <td style="color:black;">
                                    U Nyan Kyaw
                                </td>
                            </tr>

                            <tr>
                                <td style="color:black;">
                                    理事
                                </td>

                                <td style="color:black;">
                                    -
                                </td>
                            </tr>

                            <tr>
                                <td style="color:white; background-color:#2e3094;">
                                    ライセンス番号
                                </td>

                                <td style="color:black;">
                                    232/2023
                                </td>
                            </tr>

                            <tr>
                                <td style="color:black;">
                                    電話番号
                                </td>

                                <td style="color:black;">
                                    <a href="tel:+95 9 430 240 39">
                                        +95 9 430 240 39
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="color:white; background-color:#2e3094;">
                                    メール
                                </td>

                                <td style="color:black;">
                                    <a href="mailto:info@prolife-mm.com">
                                        info@prolife-mm.com
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="color:black;">
                                    Website
                                </td>

                                <td style="color:black;">
                                    <a href="">
                                        www.prolife-mm.com
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <br>
            <div class="row justify-content-center wow fadeInUp" data-wow-delay="0.3s"
                style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                <div class="col-xxl-10">
                    <div class="section_title_wrapper text-center mb-50">
                        <span class="subtitle">
                            Prolife Co., Ltd
                        </span>
                        <h2 class="section-title">
                            Legal Documents
                        </h2>
                    </div>
                </div>
            </div>


            <div class="row d-flex justify-content-around">
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 wow fadeInUp" data-wow-delay="0.3s"
                    style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <div class="team text-center mb-30">
                        <div class="team__thumb team__thumb-2 mb-25">
                            <img src="{{ asset('data/c1.png') }}" alt="">
                        </div>
                        <div class="team__text">
                            <h3 class="team__text-title">
                                <a href="javascript::void(0)">
                                    Overseas Employment Agency Licence
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>


                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 wow fadeInUp" data-wow-delay="0.3s"
                    style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <div class="team text-center mb-30">
                        <div class="team__thumb team__thumb-2 mb-25">
                            <img src="{{ asset('data/c2.png') }}" alt="">
                        </div>
                        <div class="team__text">
                            <h3 class="team__text-title">
                                <a href="javascript::void(0)">
                                    Overseas Employment Agency Licence
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>



    <section class="team__details pt-120 pb-160">
        <div class="container">
            <div class="team__details-inner p-relative white-bg">
                <div class="team__details-shape p-absolute wow fadeInRight" data-wow-delay=".2s">
                    <img src="{{ asset('assets/img/icon/team/shape-1.html') }}" alt="">
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="team__details-img w-img mr-50">
                            <img src="https://media.istockphoto.com/id/1328535598/vector/woman-working-from-home-home-office-concept-vector-illustration-in-flat-style.jpg?b=1&s=612x612&w=0&k=20&c=HRphPphYUFZfNaNJNWoKF8g2nldWS_tKzaSUt50Skxc="
                                class="w-100" alt="">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="team__details-content pt-105">
                            <span class="wow fadeInUp" data-wow-delay=".4s">
                                Prolife Co., Ltd
                            </span>
                            <h3 class="wow fadeInUp" data-wow-delay=".6s">
                                MD'S MESSAGE
                            </h3>
                            <p class="wow fadeInUp" data-wow-delay=".8s" style="text-align: justify">
                                Dear Job Seekers,
                                <br><br>
                                Welcome to our overseas employment agency!
                                <br><br>
                                In our journey of overseas employment and Japanese language education, your dedication has
                                been remarkable. Keep up the great work as we strive to change lives and bridge cultures.
                                Let's embrace innovation and partnership for a brighter future.
                                <br><br>
                                Thank you for being part of our success.
                                <br><br>
                                Best Regards!
                                <br>
                                U Nyan Kyaw
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="steps-area pb-80 wow fadeInUp" data-wow-delay="0.3s"
        style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
        <div class="container">
            <div class="steps-br">
                <img src="{{ asset('assets/img/step/steps-br.png') }}" alt="">
            </div>
            <div class="row">

                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4" >
                    <div class="steps-box text-center mb-30" style="background-color: #FBF7EE; padding: 10px;">
                        <div class="steps-box__icon mb-35">
                            <span class="icon flaticon-explore"></span>
                        </div>
                        <div class="steps-box__content">
                            <h4 class="mb-25">
                                <a href="javascript::void(0)">
                                    Our Vision
                                </a>
                            </h4>
                            <p style="text-align: justify; color: black;">
                                "To Be a Global Beacon of Opportunity and Transformation"
                                <br>
                                At Prolife Co., Ltd, we envision a world where individuals from diverse backgrounds can
                                access
                                fulfilling overseas employment opportunities, enabling them to realize their full potential
                                and contribute to the global community.
                            </p>
                            <br>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                    <div class="steps-box text-center mb-30" style="background-color: #F8F8F8; padding: 10px;">
                        <div class="steps-box__icon mb-35">
                            <span class="icon flaticon-target"></span>
                        </div>
                        <div class="steps-box__content">
                            <h4 class="mb-25">
                                <a href="javascript::void(0)">
                                    Our Mission
                                </a>
                            </h4>
                            <p style="text-align: justify; color: black;">
                                "To Connect Talent with Global Opportunities"
                                <br>
                                Our mission is to serve as a trusted bridge, connecting talented individuals with
                                international employment prospects. We are committed to providing top-notch services,
                                facilitating meaningful experiences, and fostering cross-cultural understanding.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                    <div class="steps-box text-center mb-30" style="background-color: #F1F8F9; padding: 10px;">
                        <div class="steps-box__icon mb-35">
                            <span class="icon flaticon-tap"></span>
                        </div>
                        <div class="steps-box__content">
                            <h4 class="mb-25">
                                <a href="javascript::void(0)">
                                    Our Value
                                </a>
                            </h4>
                            <p style="text-align: justify; color: black;">
                                Integrity: We uphold the highest ethical standards, ensuring transparency, honesty, and
                                fairness in all our interactions with clients, candidates, and partners.
                                <br>
                                Excellence: We continually strive for excellence in our services, setting benchmarks in the
                                industry for quality, professionalism, and customer satisfaction.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
