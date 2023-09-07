@extends('layouts.main')
@section('title', 'Meet Professional Team')
@section('content')
    <div class="page-title__area pt-110" style="background-image: url({{ asset('data/9.jpg') }});">
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
                        Meet Professional Team
                    </a>
                </li>
            </ul>
        </nav>
    </div>


    <section class="tagent__area mb-90 grey-bg-3 pt-110 pb-40">
        <div class="tagent__bg" style="background-image: url({{ asset('data/11.jpg') }});"></div>
        <div class="container">
            <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-6 d-flex align-items-center">
                    <div class="section_title_wrapper pr-70">
                        <span class="subtitle">
                            Who we are
                        </span>
                        <h2 class="section-title">
                            Our powerful team members
                        </h2>
                        <p class="pt-30 mb-40" style="text-align: justify">
                            "We are a skilled overseas employment agency, connecting talented individuals with
                            international job opportunities. Our deep understanding of global markets, immigration
                            laws, and visa processes enables us to offer a wide range of employment options in
                            various sectors. Emphasizing transparency, ethical practices, and open communication, we
                            provide personalized guidance and support to job seekers, ensuring successful placements
                            and fostering long-term client relationships."
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="team-area">
        <div class="container">
            <div class="row white-color inner-team">

                @foreach ($teams as $team)
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6">
                        <div class="team text-center mb-35">
                            <div class="team__thumb team__thumb-2 mb-25">
                                <img src="{{ $team->photo }}" alt="#"
                                    style="width: 100%; height: 290px; background-size: center; object-fit: cover;">
                                <div class="team__thumb-info">
                                    <div class="team-social">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team__text">
                                <h3 class="team__text-title">
                                    <a href="javascript::void(0)">
                                        {{ $team->name ?? '' }}
                                    </a>
                                </h3>
                                <span>
                                    {{ $team->position ?? '' }}
                                </span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
