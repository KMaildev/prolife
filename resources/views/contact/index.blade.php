@extends('layouts.main')
@section('title', 'Contact Us')
@section('content')
    <div class="page-title__area pt-110"
        style="background-image: url({{ asset('data/1.jpg') }});">
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
                    <a href="{{ route('contact.index') }}">
                        Contact Us
                    </a>
                </li>
            </ul>
        </nav>
    </div>


    <div class="contact__area">

        <div class="contact__vmap">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3818.755618420014!2d96.1253925708384!3d16.83847544850388!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1955f747fb2d9%3A0xa1cc5c939c845403!2sAZAMI%20TRAINING%20CENTER!5e0!3m2!1sen!2smm!4v1693998789948!5m2!1sen!2smm"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-6"></div>
                <div class="col-xl-6 col-xl-6 col-lg-6">
                    <div class="contact__form pt-110">
                        <h2 class="contact-form__title">
                            Get in <span>Touch </span>
                        </h2>
                        <p>
                            Alternatively, you may contact us by filling up the contact form. Our team will response
                            you shortly.
                        </p>

                        <form class="comment-one__form contact-form-validated" method="post"
                            action="{{ route('contact.store') }}" autocomplete="off">
                            @csrf
                            <div class="row">

                                <div class="col-lg-12">
                                    <div class="form-group comment-form__input-box">
                                        <input name="name" type="text" class="contact__input" placeholder="Name">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group comment-form__input-box">
                                        <input name="email" type="text" class="contact__input" placeholder="Email">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group comment-form__input-box">
                                        <input name="phone" type="text" class="contact__input" placeholder="Phone">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group comment-form__input-box">
                                        <input name="subject" type="text" class="contact__input" placeholder="Subject">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group comment-form__input-box">
                                        <textarea name="message" class="contact__input" rows="2" placeholder="Message"></textarea>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <button class="theme-btn" type="submit">Submit Now</button>
                                </div>
                            </div>
                        </form>
                        <p class="ajax-response"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact  area end -->

    <div class="contact-group-area pb-70 pt-145">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12 col-xl-12 col-lg-12">
                    <div class="contact__gpinfo grey-soft2-bg">
                        <div class="contact__gpinfo-icon text-center">
                            <i class="flaticon-pin"></i>
                        </div>
                        <div class="contact__gpinfo-content">
                            <h3 class="contact__gpinfo-content-title text-center mb-25">
                                Head Office
                            </h3>
                            <ul>
                                <li>
                                    <a href="javascript::void(0)">
                                        <span>Address</span>:
                                        <p>
                                            No.11-B, Tharaphy Street, Saw Yan Paing West Quarter, Ahlone Township,
                                            Yangon, Myanmar.
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto:info@prolife-mm.com">
                                        <span>Email</span>:
                                        <p>
                                            info@prolife-mm.com
                                        </p>
                                    </a>
                                </li>

                                <li>
                                    <a href="tel:+1980589360">
                                        <span>Phone</span>:
                                        <p>+95 9 430 240 39</p>
                                    </a>
                                </li>

                                <li>
                                    <a href="">
                                        <span>Opening</span>:
                                        <p>Sun - Thu : 10 AM - 10 PM</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
