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


    <section class="featurs-services pt-110 pb-90">
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

            <div class="row">
                @foreach ($images as $image)
                    <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 mb-30 wow fadeInUp" data-wow-delay="0.3s"
                        style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                        <div class="features"
                            style="box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;">
                            <div class="features__thumb" style="box-shadow: rgba(3, 102, 214, 0.3) 0px 0px 0px 3px;">
                                <img src="{{ asset('data/technical/' . $image) }}" alt=""
                                    style="width: 100%; height: 260px; background-size: center; object-fit: cover; ">
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
