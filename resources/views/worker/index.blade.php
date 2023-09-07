@extends('layouts.main')
@section('title', 'Special Skilled Worker')
@section('content')
    <div class="page-title__area pt-110" style="background-image: url({{ asset('data/3.jpg') }});">
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
                        Special Skilled Worker
                    </a>
                </li>
            </ul>
        </nav>
    </div>


    <section class="blog-area py-5 pb-90 wow fadeInUp" data-wow-delay="0.3s"
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
                            Special Skilled Worker
                        </h2>
                        <br>
                        <p style="color: black; text-align: justify">
                            A foreigner's internship visa means advanced business technology from Japan. Learn advanced
                            studies and return to the motherland's development activities It is intended to participate. The
                            period of time that you can learn and work is 3 to 5 years It is inside.
                        </p>
                        <br>
                        <h2 class="section-title" style="font-size: 23px;">
                            Type of work available
                        </h2>
                        <br>
                        <p style="color: black; text-align: justify">
                            Agriculture, A fish is a business, construction industry Elderly care industry , food
                            manufacturing industry; Cotton weaving business garment industry pit industry iron industry
                            furniture business printing industry book manufacturing industry plastic industry paint industry
                            Packaging business paper industry Cardboard box manufacturing industry Clean fish Business 76
                            types of business such as hotel business • 135 types of jobs You can go to work.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach ($images as $image)
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                        <article class="blog mb-30">
                            <div class="blog__thumb">
                                <img src="{{ asset('data/skill/' . $image) }}" alt=""
                                    style="width: 100%; height: 260px; background-size: center; object-fit: cover; ">
                            </div>
                            <div class="blog__content">
                                <div class="blog-meta">
                                    <span>
                                        <i class="far fa-user"></i>
                                        Special Skilled Worker Training
                                    </span>
                                </div>
                                <div class="blog-text">
                                    <h3 class="blog__content__title">
                                        <a href="javascript::void(0)">
                                            Prolife Co., Ltd
                                        </a>
                                    </h3>
                                    <p>
                                        Azami Training Center
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
