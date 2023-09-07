@extends('layouts.main')
@section('title', 'Technical Intern Training')
@section('content')
    <div class="page-title__area pt-110" style="background-image: url({{ asset('data/4.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12" style="height: 300px;">

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
                        Technical Intern Training
                    </a>
                </li>
            </ul>
        </nav>
    </div>


    <div class="courses-area py-5 wow fadeInUp" data-wow-delay="0.3s"
        style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-xxl-10">
                    <div class="section_title_wrapper text-center mb-50 wow fadeInUp" data-wow-delay="0.3s"
                        style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                        <span class="subtitle">
                            Prolife Co., Ltd
                        </span>
                        <h2 class="section-title" style="font-size: 23px;">
                            Technical Intern Training
                        </h2>
                        <br>
                        <p style="color: black; text-align: justify">
                            The Technical Intern Training System (TITP) in Japan is a program designed to provide technical
                            training and skills development to foreign workers who come to Japan to work in specific
                            industries. The program was established to address labor shortages in various industries while
                            allowing foreign workers to acquire technical skills and knowledge that they can use in their
                            home countries upon returning.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row project-grid">
                @foreach ($images as $image)
                    <div class="col-xxl-4 col-xl-4 col-lg-6  col-md-6 training courses mb-40">
                        <div class="courses">
                            <div class="courses__thumb">
                                <div class="courses__thumb-img">
                                    <img src="{{ asset('data/technical/' . $image) }}" alt=""
                                        style="width: 100%; height: 260px; background-size: center; object-fit: cover; ">
                                </div>
                                <div class="courses__thumb-logo mr-15">
                                    <img src="{{ asset('data/logo_bg.png') }}" alt="" style="width: 150px; ">
                                </div>
                            </div>
                            <div class="courses-content">
                                <h3 class="courses-content__title mt-15 mb-25">
                                    <a href="javascript::void(0)">
                                        Prolife Co., Ltd
                                    </a>
                                </h3>
                                <p>
                                    Azami Training Center
                                </p>
                            </div>
                            <div class="courses__meta">
                                <ul>
                                    <li>
                                        <a class="border-none" href="javascript::void(0)">
                                            <i class="flaticon-clock"></i>
                                            September
                                        </a>
                                    </li>

                                    <li>
                                        <a href="javascript::void(0)">
                                            <i class="fa fa-clock"></i>
                                            2023
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('contact.index') }}" class="course-link-btn">
                                            Contact
                                            <i class="far fa-arrow-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
