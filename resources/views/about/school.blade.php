@extends('layouts.main')
@section('title', 'Japanese School')
@section('content')
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url({{ asset('data/slider1.jpg') }});">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>
                    Japanese School
                </h2>
                <ul class="thm-breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><span class="icon-caret"></span></li>
                    <li>
                        Katsuki Co.,Ltd
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <style>
        @keyframes textShine {
            0% {
                background-position: 0% 50%;
            }

            100% {
                background-position: 100% 50%;
            }
        }

        .font-design1 {
            font-size: clamp(2.8rem, 1.5vw, 3rem);
            font-weight: bold;
            margin: 5px;
            background: linear-gradient(to right,
                    #061E5E 20%,
                    #00affa 30%,
                    #0190cd 70%,
                    #c43477 80%);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            text-fill-color: transparent;
            background-size: 500% auto;
            animation: textShine 5s ease-in-out infinite alternate;
        }
    </style>

    <section class="services-one services-one--about" style="padding: 20px 0px 10px;">
        <div class="auto-container">
            <div class="sec-title text-center text-design">
                <h2 class="font-design1">
                    Katsuki Co.,Ltd
                    <br>
                    Japanese Language School
                </h2>
            </div>

            <div class="row">

                <div class="col-xl-3 col-lg-6 col-md-6  wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                    <div class="services-one__single text-center">
                        <div class="services-one__single-img">
                            <div class="inner">
                                <img src="{{ asset('data/study.jpg') }}" alt="#"
                                    style="width: 100%; height: 190px; background-size: center; object-fit: cover;">
                            </div>
                            <div class="icon-box">
                                <span class="fa fa-book"></span>
                            </div>
                        </div>

                        <div class="services-one__single-title">
                            <h2><a href="javascript::void(0)">Study Japanese Language</a></h2>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1000ms">
                    <div class="services-one__single text-center">
                        <div class="services-one__single-img">
                            <div class="inner">
                                <img src="{{ asset('data/2.jpg') }}" alt="#"
                                    style="width: 100%; height: 190px; background-size: center; object-fit: cover;">
                            </div>
                            <div class="icon-box">
                                <span class="fa fa-file"></span>
                            </div>
                        </div>

                        <div class="services-one__single-title">
                            <h2><a href="javascript::void(0)">Certificate</a></h2>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                    <div class="services-one__single text-center">
                        <div class="services-one__single-img">
                            <div class="inner">
                                <img src="{{ asset('data/004.jpg') }}" alt="#"
                                    style="width: 100%; height: 190px; background-size: center; object-fit: cover;">
                            </div>
                            <div class="icon-box">
                                <span class="fa fa-users"></span>
                            </div>
                        </div>

                        <div class="services-one__single-title">
                            <h2><a href="javascript::void(0)">Interview</a></h2>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1000ms">
                    <div class="services-one__single text-center">
                        <div class="services-one__single-img">
                            <div class="inner">
                                <img src="{{ asset('data/3.jpg') }}" alt="#"
                                    style="width: 100%; height: 190px; background-size: center; object-fit: cover;">
                            </div>
                            <div class="icon-box">
                                <span class="icon-factory"></span>
                            </div>
                        </div>

                        <div class="services-one__single-title">
                            <h2><a href="javascript::void(0)">Work in Japan</a></h2>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="about-one about-one--about">
        <div class="about-one__bg" style="background-image: url({{ asset('data/bg1.jpg') }});">
        </div>
        <div class="shape1 float-bob-y">
            <img src="{{ asset('assets/images/shapes/about-v1-shape2.png') }}" alt="#">
        </div>
        <div class="shape4 float-bob-y">
            <img src="{{ asset('assets/images/shapes/about-v1-shape1.png') }}" alt="#">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-one__img">
                        <div class="inner">
                            <div class="shape2" hidden></div>
                            <div class="shape3">
                                <img src="{{ asset('assets/images/shapes/about-v1-shape3.png') }}" alt="#">
                            </div>
                            <img src="{{ asset('data/4.jpg') }}" alt="#"
                                style="width: 100%; height: 500px; background-size: center; object-fit: cover;">
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="about-one__content">
                        <div class="sec-title">
                            <h2>
                                About of Japanese Language School
                            </h2>
                        </div>

                        <div class="about-one__content-text">
                            <p style="text-align: justify; color: black;">
                                In cooperation with KATSUKI COMPANY LIMITED in Myanmar, young technicians in the field of
                                engineering, agricultural and computer can concentrate while working in Japan, they are
                                introduced Japanese Culture starting from “Trash”, to Japanese food, how to interact in
                                working environment etc., by Japanese Native Speakers.In addition, preparation course for
                                students who intend to take specific skilled exam in the field of Caring, Food Industry,
                                Restaurant Services and Agricultural Sector.
                            </p>
                        </div>

                        <div class="about-one__content-text2">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12">
                                    <div class="about-one__content-text2-single">
                                        <ul>
                                            <li>
                                                <div class="icon-box">
                                                    <span class="icon-checkmark"></span>
                                                </div>
                                                <div class="text-box">
                                                    <p>Characteristics</p>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="text">
                                            <p style="color: black">
                                                Aside from basic Japanese language courses, Japanese language schools
                                                provide university
                                                preparation courses, business Japanese courses, and others.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="feature-three">
        <div class="shape1 float-bob-y">
            <img src="{{ asset('assets/images/shapes/feature-v3-shape2.png') }}" alt="#">
        </div>
        <div class="shape2 float-bob-y">
            <img src="{{ asset('assets/images/shapes/feature-v3-shape2.png') }}" alt="#">
        </div>
        <div class="feature-three__bg"
            style="background-image: url({{ asset('data/bg2.png') }});">
        </div>
        <div class="feature-three__pattern"
            style="background-image: url({{ asset('assets/images/pattern/thm-pattern.png') }});">
        </div>
        <div class="container">
            <div class="feature-three__inner">
                <ul class="feature-three__box">
                    <li class="feature-three__single text-center">
                        <div class="icon-box">
                            <span class="icon-checking"></span>
                        </div>
                        <div class="title-box">
                            <h2>
                                <a href="bridge-costruction.html">
                                    N5
                                    <br>
                                    Basic Level
                                </a>
                            </h2>
                        </div>
                    </li>

                    <li class="feature-three__single text-center">
                        <div class="icon-box">
                            <span class="fa fa-check-double"></span>
                        </div>
                        <div class="title-box">
                            <h2>
                                <a href="bridge-costruction.html">
                                    N4 <br> "able to understand basic Japanese"
                                </a>
                            </h2>
                        </div>
                    </li>

                    <li class="feature-three__single text-center">
                        <div class="icon-box">
                            <span class="icon-programmer"></span>
                        </div>
                        <div class="title-box">
                            <h2>
                                <a href="">
                                    N3
                                    <br>
                                    Intermediate Level
                                </a>
                            </h2>
                        </div>
                    </li>

                    <li class="feature-three__single text-center">
                        <div class="icon-box">
                            <span class="icon-wallpaper"></span>
                        </div>
                        <div class="title-box">
                            <h2>
                                <a href="bridge-costruction.html">
                                    N2 <br> Pre-Advanced Level
                                </a>
                            </h2>
                        </div>
                    </li>

                    <li class="feature-three__single text-center">
                        <div class="icon-box">
                            <span class="icon-like"></span>
                        </div>
                        <div class="title-box">
                            <h2>
                                <a href="">
                                    N1
                                    <br>
                                    Advanced Level
                                </a>
                            </h2>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <br><br>
@endsection
