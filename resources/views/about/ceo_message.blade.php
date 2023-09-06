@extends('layouts.main')
@section('title', "MD's Message")
@section('content')

    <section class="page-header">
        <div class="page-header__bg" style="background-image: url({{ asset('data/slider1.jpg') }});">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>
                    MD's Message
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

    <div class="container py-5">
        <div class="envelope">
            <div class="row">
                <div class="col-md-3">
                    <div class="team-details-top__client-info text-center">
                        <div class="img-box">
                            <img src="assets/images/resources/team-details-img1.jpg" alt="#">
                        </div>
                        <div class="content-box">
                            <h2>
                                ******
                            </h2>
                            <span>
                                Managing Director
                            </span>
                            <ul>
                                <li><a href="#"><span class="icon-facebook"></span></a></li>
                                <li><a href="#"><span class="icon-twitter"></span></a></li>
                                <li><a href="#"><span class="icon-linked-in-logo-of-two-letters"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="team-details-top__content py-3">
                        <div class="title-box font-design1">
                            <center>
                                <span style="font-size: 37px; color: black; font-weight: bold;">
                                    Greetings from Director
                                </span>
                                <br>
                                <span style="font-size: 27px; color: black; font-weight: bold;">
                                    Katsuki Co.,Ltd
                                </span>
                            </center>
                        </div>

                        <p class="shine-me" style="text-align: justify">
                            Dear Valued Clients and Students,
                            <br>
                            As the Managing Director of Katsuki Co.,Ltd, I'm thrilled to share our
                            commitment to your aspirations and the exciting journey ahead.
                            <br>
                            Our mission is twofold: to open doors to international careers and to empower you with the
                            Japanese language.
                            <br>
                            Overseas Employment Opportunities: Our dedicated overseas employment agency specializes in
                            connecting talented individuals like you with promising career prospects across borders. Whether
                            you're seeking professional growth or embarking on a new adventure, we provide personalized
                            guidance, job placements, and comprehensive support to ensure a smooth transition into your
                            dream job abroad.
                            <br>
                            Japanese Language Proficiency: On the language front, our Japanese Language School offers a
                            dynamic learning experience led by experienced instructors. Mastering Japanese not only enhances
                            your communication skills but also deepens your understanding of Japan's rich culture. We offer
                            courses tailored to various proficiency levels, ensuring you can confidently engage in both work
                            and daily life in Japan.
                            <br>
                            The Power of Synergy: What sets us apart is the seamless synergy between our employment agency
                            and language school. We provide a holistic approach, offering language classes specifically
                            designed to align with your career goals. This unique combination equips you with the language
                            fluency required to excel in your chosen field in Japan.
                            <br>
                            As we look to the future, we're excited to enhance our services, expand our global network, and
                            create more opportunities for your success. Your dreams are our motivation, and we're dedicated
                            to making them a reality.
                            <br>
                            Thank you for choosing Katsuki Co.,Ltd. Together, we'll navigate the
                            ever-evolving landscape of international careers and language proficiency.
                            <br>
                            Your journey begins with us, and we're honored to be your trusted guides.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .envelope {
            max-width: 100%;
            height: atuo;
            padding: 1em;
            line-height: 1.8em;
            border: 1em solid transparent;
            background: linear-gradient(#d3d3d3, #FFFFFF) padding-box,
                repeating-linear-gradient(-45deg,
                    #C8102E 0, #C8102E 12.5%,
                    #ffffff 0, #ffffff 25%,
                    #3492b8 0, #3492b8 37.5%,
                    #ffffff 0, #ffffff 50%) 0 / 5em 5em;
            box-shadow: 0px 5px 5px rgba(0, 0, 0, 0.6);
        }

        .rubber {
            box-shadow: 0 0 0 1px #dc143c, 0 0 0 1px #dc143c inset;
            border: 2px solid transparent;
            border-radius: 0px;
            display: inline-block;
            padding: 3px 0px;
            line-height: 22px;
            color: #dc143c;
            font-size: 14px;
            text-transform: uppercase;
            text-align: center;
            opacity: 0.8;
            transform: rotate(-20deg);
            width: 120px;
        }

        .shine-me,
        .shine::after {

            -webkit-animation-name: ShineAnimation;
            -webkit-animation-duration: 5s;
            -webkit-animation-iteration-count: infinite;
            -webkit-animation-timing-function: cubic-bezier(.12, .89, .98, .47);
        }

        @-webkit-keyframes ShineAnimation {
            from {
                background-repeat: no-repeat;
                background-image: -webkit-linear-gradient(top left,
                        rgba(255, 255, 255, 0.0) 0%,
                        rgba(255, 255, 255, 0.0) 45%,
                        rgba(255, 255, 255, 0.5) 48%,
                        rgba(255, 255, 255, 0.8) 50%,
                        rgba(255, 255, 255, 0.5) 52%,
                        rgba(255, 255, 255, 0.0) 57%,
                        rgba(255, 255, 255, 0.0) 100%);
                background-position: -250px -250px;
                background-size: 600px 600px
            }

            to {
                background-repeat: no-repeat;
                background-position: 250px 250px;
            }
        }
    </style>


    <br><br><br>
@endsection
