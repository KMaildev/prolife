@extends('layouts.main')
@section('title', 'Team')
@section('content')
    <section class="breadcum-area breadcum-bg breadcum-bg2 section-padding"
        style="background-image:url({{ asset('data/class_room/2.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcum-title">
                        <h2 class="page-title">Team Member</h2>
                        <ul class="page-list">
                            <li>
                                <a href="{{ route('home') }}">
                                    Team
                                </a> /
                                <span>
                                    Meet Professional Team
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="estro-team-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 py-5">
                    <div class="section-title">
                        <center>
                            <h4 class="s-title">Who we are</h4>
                            <h2>Our powerful team members</h2>
                        </center>
                        <p style="text-align: justify">
                            "We are a skilled overseas employment agency, connecting talented individuals with
                            international job opportunities. Our deep understanding of global markets, immigration
                            laws, and visa processes enables us to offer a wide range of employment options in
                            various sectors. Emphasizing transparency, ethical practices, and open communication, we
                            provide personalized guidance and support to job seekers, ensuring successful placements
                            and fostering long-term client relationships."
                        </p>
                    </div>
                </div>

                @foreach ($teams as $team)
                    <div class="col-lg-3 col-md-3 mb-25">
                        <div class="team-item">
                            <div class="thumbnail">
                                <img src="{{ $team->photo }}" alt="#"
                                    style="width: 100%; height: 290px; background-size: center; object-fit: cover;">
                                <div class="team-plus-icon">
                                    <a href="tel:+95 9 44643 2352 ">
                                        <i class="icofont-phone"></i>
                                    </a>
                                </div>
                                <div class="team-social-icon">
                                    <ul>
                                        <li><a href="#"><i class="icofont-facebook"></i></a></li>
                                        <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                        <li><a href="#"><i class="icofont-vimeo"></i></a></li>
                                        <li><a href="#"><i class="icofont-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="content">
                                <h4>{{ $team->name ?? '' }}</h4>
                                <p>{{ $team->position ?? '' }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
