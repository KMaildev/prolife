@extends('layouts.main')
@section('title', 'Activities')
@section('content')
    <div class="page-title__area pt-110" style="background-image: url({{ asset('data/2.jpg') }});">
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
                        Gallery & Activities
                    </a>
                </li>
            </ul>
        </nav>
    </div>

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
                    #2E3094 20%,
                    #ED1B24 30%,
                    #000000 70%,
                    #FEF200 80%);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            text-fill-color: transparent;
            background-size: 500% auto;
            animation: textShine 5s ease-in-out infinite alternate;
        }
    </style>

    <div class="courses-area pt-120 wow fadeInUp" data-wow-delay="0.3s"
        style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12 col-xl-12 col-lg-12 mb-45 box">
                    <h2 class="section-title text-center font-design1">
                        Our Gallery & Activities
                    </h2>
                </div>
            </div>
            <div class="row project-grid">
                @foreach ($activities as $activity)
                    @php
                        $images = explode(',', $activity->images);
                    @endphp
                    @foreach ($images as $image)
                        <div class="col-xxl-4 col-xl-4 col-lg-6  col-md-6 training courses mb-40">
                            <div class="courses">
                                <div class="courses__thumb">
                                    <div class="courses__thumb-img">
                                        <img data-enlargeable="" src="{{ $image }}" alt=""
                                            style="width: 100%; height: 260px; background-size: center; object-fit: cover;">
                                    </div>
                                    <div class="courses__thumb-logo mr-15">
                                        <img src="{{ asset('data/logo.jpg') }}" alt=""
                                            style="width: 80px; border-radius: 3px;">
                                    </div>
                                </div>
                                <div class="courses-content">
                                    <h3 class="courses-content__title mt-15 mb-25">
                                        <a href="javascript::void(0)">
                                            {{ $activity->title ?? '' }}
                                        </a>
                                    </h3>
                                </div>
                                <div class="courses__meta">
                                    <ul>
                                        <li style="width: 50%;">
                                            <a class="border-none" href="#">
                                                <i class="flaticon-clock"></i>
                                                {{ $activity->submit_date ?? '' }}
                                            </a>
                                        </li>

                                        <li style="width: 50%; max-width: 100%;">
                                            <a class="border-none" href="#">
                                                Prolife Co., Ltd
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </div>
@endsection
