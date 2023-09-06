@extends('layouts.main')
@section('title', 'Submit CV')
@section('content')
    <section class="breadcum-area breadcum-bg breadcum-bg2 section-padding"
        style="background-image:url({{ asset('data/class_room/1.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcum-title">
                        <h2 class="page-title">Job Application</h2>
                        <ul class="page-list">
                            <li>
                                <a href="{{ route('home') }}">
                                    Home
                                </a> /
                                <span>Apply for your job</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="feature-area feature-5 pt-50">
        <div class="container">
            <div class="featrue-content-row">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="single-feature-box">
                            <div class="icon-feature">
                                <i class="fab fa-dribbble"></i>
                            </div>
                            <h2>
                                Job Opportunities
                            </h2>
                            <p style="text-align: justify">
                                These agencies often have a wide network of employers and companies seeking international
                                candidates. They can connect you with job openings that may not be easily accessible through
                                other channels, increasing your chances of finding suitable employment.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="single-feature-box">
                            <div class="icon-feature">
                                <i class="far fa-sun"></i>
                            </div>
                            <h2>
                                Visa Assistance
                            </h2>
                            <p style="text-align: justify">
                                Navigating the visa application process can be complex and time-consuming. An overseas
                                employment agency can guide you through the visa application, ensuring that you have the
                                necessary documents and meet the requirements.
                            </p>
                            <br>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="single-feature-box">
                            <div class="icon-feature">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <h2>
                                Support Services
                            </h2>
                            <p style="text-align: justify">
                                Some agencies offer additional support services, such as arranging accommodation,
                                orientation programs, and ongoing support while you settle into your new job and country.
                            </p>
                            <br><br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="section-why section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="why-left-content section-title">
                        <h4 class="s-title">
                            Apply for your job!
                        </h4>
                        <h2>Submit CV</h2>
                        <p style="text-align: justify; color: black;">
                            To apply for the desired job, we recommend reading the job requirements carefuly then if you
                            found yourself qualified for it, simply fill in the below form and click APPLY NOW.
                        </p>
                        <br>
                        <div class="contact-form">
                            <form autocomplete="off" method="POST" action="{{ route('cv.store') }}"
                                enctype="multipart/form-data" id="create-form" novalidate="novalidate">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label style="color: black">Name</label>
                                            <input type="text" name="name" class="form-control " value="">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label style="color: black">Phone</label>
                                            <input type="text" name="phone" class="form-control " value="">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label style="color: black">Additional Note</label>
                                            <textarea class="form-control" rows="5" cols="2" name="additional_note" style="height: 100px;"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 py-3">
                                        <div class="form-group">
                                            <label for="img" style="color: black">
                                                Select your CV to
                                                upload
                                            </label>
                                            <br>
                                            <input type="file" name="attachment_file" accept=".doc, .docx, .pdf"
                                                class="form-control-file" required>
                                            <a href="{{ asset('data/form.pdf') }}" download="">
                                                Download Form
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <button type="submit" name="submit" class="button-2">
                                            <span>
                                                Apply Now
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="why-right-content">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-6">
                                <div class="single-wc-box box1">
                                    <i class="fas fa-globe"></i>
                                    <h2>
                                        Experience
                                    </h2>
                                    <p style="text-align: justify">
                                        Years of expertise in international recruitment, navigating complexities.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-6">
                                <div class="single-wc-box different box2">
                                    <i class="far fa-credit-card"></i>
                                    <h2>
                                        Skill Development
                                    </h2>
                                    <p>
                                        Tailored programs to enhance employability.
                                    </p>
                                    <br>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-6">
                                <div class="single-wc-box different box3">
                                    <i class="fas fa-chart-line"></i>
                                    <h2>
                                        Candidate Support
                                    </h2>
                                    <p>Comprehensive assistance from start to finish.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-6">
                                <div class="single-wc-box box4 ">
                                    <i class="fas fa-vote-yea"></i>
                                    <h2>
                                        Streamlined Process
                                    </h2>
                                    <p>Hassle-free documentation and logistics.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
