@extends('layouts.main')
@section('title', 'Welcome')
@section('content')
    <section class="visa-area ">
        <div class="container">
            <div class="row g-0 theme-bg visa-top">
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6">
                    <div class="visa__items br-none">
                        <div class="visa__items-single d-flex align-items-center">
                            <div class="visa__items-single-icon">
                                <i class="flaticon-passport"></i>
                            </div>
                            <h4 class="visa__items-single-title">
                                <a href="{{ route('about.index') }}">
                                    About Our Company
                                </a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6">
                    <div class="visa__items">
                        <div class="visa__items-single d-flex align-items-center">
                            <div class="visa__items-single-icon">
                                <i class="flaticon-content"></i>
                            </div>
                            <h4 class="visa__items-single-title">
                                <a href="{{ route('technical') }}">
                                    Technical Intern Training
                                </a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6">
                    <div class="visa__items">
                        <div class="visa__items-single d-flex align-items-center">
                            <div class="visa__items-single-icon">
                                <i class="flaticon-customer"></i>
                            </div>
                            <h4 class="visa__items-single-title">
                                <a href="{{ route('skilled_worker.index') }}">
                                    Special Skilled Worker
                                </a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6">
                    <div class="visa__items">
                        <div class="visa__items-single d-flex align-items-center">
                            <div class="visa__items-single-icon">
                                <i class="flaticon-passport-1"></i>
                            </div>
                            <h4 class="visa__items-single-title">
                                <a href="{{ route('contact.index') }}">
                                    Inquiry
                                </a>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="united-stats-area pt-120">
        <div class="container">
            <div class="row">
                <div class="col-xxl-4 col-xl-4 col-lg-4">
                    <div class="sidebar-left__wrapper">

                        <div class="sidebar__widget mb-30">
                            <div class="sidebar__widget-content">
                                <div class="cat-link">
                                    <ul>
                                        <li>
                                            <a class="vrbg" href="{{ route('home') }}"
                                                style="background-image: url({{ asset('data/mm/12.jpg') }});">
                                                Myanmar
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ route('about.index') }}">
                                                Our Company
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ route('team') }}">
                                                Team
                                            </a>
                                        </li>


                                        <li>
                                            <a href="{{ route('technical') }}">
                                                Technicians
                                            </a>
                                        </li>


                                        <li>
                                            <a href="{{ route('skilled_worker.index') }}">
                                                Skilled Workers
                                            </a>
                                        </li>

                                        @foreach ($categories as $category)
                                            <li>
                                                <a href="{{ route('activities.show', $category->id) }}">
                                                    {{ $category->title ?? '' }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="sidebar__widget mb-30 theme-bg pd-30">
                            <div class="sidebar__widget-title title-white mb-40">
                                <h4>HEAD OFFICE</h4>
                            </div>
                            <div class="sidebar__widget-content">
                                <ul>
                                    <li class="d-flex align-items-center mb-20 pdf-btm-border">
                                        <div class="docu__thumb mr-15">
                                            <a href="javascript::void(0)">
                                                <i class="fa fa-envelope"></i>
                                            </a>
                                        </div>
                                        <div class="docu__text">
                                            <h6>
                                                Email
                                            </h6>
                                            <p>
                                                <a href="mailto:info@prolife-mm.com">
                                                    info@prolife-mm.com
                                                </a>
                                            </p>
                                        </div>
                                    </li>


                                    <li class="d-flex align-items-center mb-20 pdf-btm-border">
                                        <div class="docu__thumb mr-15">
                                            <a href="javascript::void(0)">
                                                <i class="fa fa-phone"></i>
                                            </a>
                                        </div>
                                        <div class="docu__text">
                                            <h6>
                                                Phone
                                            </h6>
                                            <p>
                                                <a href="tel:+95 9 430 240 39">
                                                    +95 9 430 240 39
                                                </a>
                                            </p>
                                        </div>
                                    </li>

                                    <li class="d-flex align-items-center mb-20 pdf-btm-border">
                                        <div class="docu__thumb mr-15">
                                            <a href="javascript::void(0)">
                                                <i class="fa fa-map"></i>
                                            </a>
                                        </div>
                                        <div class="docu__text">
                                            <p>
                                                No.11-B, Tharaphy Street, Saw Yan Paing West Quarter, Ahlone Township,
                                                Yangon, Myanmar.
                                            </p>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>

                        <div class="faqfrm__visa mb-30">
                            <div class="sidebar-title mb-40">
                                <h3>Ask Us Custom</h3>
                            </div>
                            <div class="faqfrm__visa-form">
                                <form class="comment-one__form contact-form-validated" method="post"
                                    action="{{ route('contact.store') }}" autocomplete="off">
                                    @csrf
                                    <div class="row">

                                        <div class="col-lg-12">
                                            <input name="name" type="text" placeholder="Name">
                                        </div>

                                        <div class="col-lg-12">
                                            <input name="email" type="text" placeholder="Email">
                                        </div>

                                        <div class="col-lg-12">
                                            <input name="phone" type="text" placeholder="Phone">
                                        </div>

                                        <div class="col-lg-12">
                                            <input name="subject" type="text" placeholder="Subject">
                                        </div>

                                        <div class="col-lg-12">
                                            <textarea name="message" rows="2" placeholder="Message"></textarea>
                                        </div>

                                        <div class="col-md-12">
                                            <button class="theme-btn" type="submit">Submit Now</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-8 col-xl-8 col-lg-8">
                    <div class="sidebar__deatils">

                        <div class="united-states">
                            <div class="united-states__thumb mb-40">
                                <img style="width: 100%" src="{{ asset('data/shwedagon.jpg') }}" alt="">
                            </div>
                            <h3 class="united-states__title mb-15">
                                Myanmar
                            </h3>
                            <p class="mb-30" style="text-align: justify">
                                The Shwedagon Pagoda and also known as the Great Dagon Pagoda and the Golden
                                Pagoda is a gilded stupa located in Yangon, Myanmar.
                            </p>
                            <p class="mb-25" style="text-align: justify">
                                The Shwedagon is the most sacred Buddhist pagoda in Myanmar, as it is believed to contain
                                relics of the four previous Buddhas of the present kalpa. These relics include the staff of
                                Kakusandha, the water filter of Koṇāgamana, a piece of the robe of Kassapa, and eight
                                strands of hair from the head of Gautama.
                                <br><br>
                                Built on the 51-metre (167 ft) high Singuttara Hill, the 112 m (367 ft) tall pagoda stands
                                170 m (560 ft) above sea level,[note 1] and dominates the Yangon skyline. Yangon's zoning
                                regulations, which cap the maximum height of buildings to 127 metres (417 feet) above sea
                                level (75% of the pagoda's sea level height), ensure the Shwedagon's prominence in the
                                city's skyline.
                            </p>
                        </div>

                        <div class="united-information pb-30">
                            <div class="row align-items-center">
                                <div class="col-xxl-7 col-xl-7 col-lg-7">
                                    <div class="united-info">
                                        <ul>
                                            <li><span>Country Name</span>: <span>Myanmar</span></li>
                                            <li><span>Population</span>: <span>53.8 million (2021)</span></li>
                                            <li><span>Capital</span>: <span>Naypyidaw</span></li>
                                            <li><span>Largest city</span>: <span>Yangon</span></li>
                                            <li><span>Currency</span>: <span>MMK(Kyat)</span></li>
                                            <li><span>Area</span>: <span>676,578 km²</span></li>
                                            <li><span>Major Language</span>: <span>Burmese</span></li>
                                            <li><span>Major Religion</span>: <span>Buddhism</span></li>
                                            <li><span>Life Style & Culture</span>: <span>Burmese</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xxl-5 col-xl-5 col-lg-5">
                                    <div class="united-thumb">
                                        <img src="{{ asset('data/Myanmar-Map.jpg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h3 class="united-states__title2 mb-25">
                            MYANMAR HIGHLIGHTS
                        </h3>
                        <ul>
                            <li>
                                <i class="fa fa-check-double"></i>
                                Enjoy the villages on the water at Inle Lake.
                            </li>
                            <li>
                                <i class="fa fa-check-double"></i>
                                Explore historic Mandalay and its surrounding ancient capitals.
                            </li>
                            <li>
                                <i class="fa fa-check-double"></i>
                                Discover the bustling colonial-era streets and growing cultural scene of Yangon.
                            </li>
                            <li>
                                <i class="fa fa-check-double"></i>
                                Discover Mandalay, with its strong Buddhist monastic influences and atmospheric side
                                streets.
                            </li>
                            <li>
                                <i class="fa fa-check-double"></i>
                                Witness one of the world's most breathtaking views over the thousands of ancient stupas of
                                Bagan.
                            </li>
                            <li>
                                <i class="fa fa-check-double"></i>
                                Discover the bustling colonial-era streets and growing cultural scene of Yangon.
                            </li>
                        </ul>

                        <br>
                        <div class="row">

                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 mb-30 wow fadeInUp" data-wow-delay="0.3s"
                                style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                <div class="features">
                                    <div class="features__thumb">
                                        <img src="{{ asset('data/mm/1.jpg') }}" alt="">
                                    </div>
                                    <div class="features__content">
                                        <h3 class="features__content-title">
                                            <a href="business-visa.html">
                                                Inle Lake
                                            </a>
                                        </h3>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 mb-30 wow fadeInUp" data-wow-delay="0.3s"
                                style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                <div class="features">
                                    <div class="features__thumb">
                                        <img src="{{ asset('data/mm/mdy.jpg') }}" alt="">
                                    </div>
                                    <div class="features__content">
                                        <h3 class="features__content-title">
                                            <a href="business-visa.html">
                                                Mandalay
                                            </a>
                                        </h3>
                                    </div>
                                </div>
                            </div>


                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 mb-30 wow fadeInUp" data-wow-delay="0.3s"
                                style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                <div class="features">
                                    <div class="features__thumb">
                                        <img src="{{ asset('data/mm/ygn.jpg') }}" alt="">
                                    </div>
                                    <div class="features__content">
                                        <h3 class="features__content-title">
                                            <a href="business-visa.html">
                                                Shwedagon Pagoda
                                            </a>
                                        </h3>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="most-countries  pb-90">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                    <div class="section_title_wrapper mb-25">
                        <h2 class="section-title">
                            <center>
                                Historical Places
                            </center>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 mb-30">
                    <div class="countries-item img-top">
                        <div class="countries-item__top">
                            <div class="countries-item__top-img">
                                <img src="{{ asset('data/mm/shwedagon.jpg') }}" alt=""
                                    style="width: 100%; height: 180px; background-size: center; object-fit: cover;">
                                <div class="countries-item__top-img-link">
                                    <a href="javascript::void(0)">
                                        <i class="fal fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="countries-item__bottom d-flex align-items-center">
                            <div class="countries-item__bottom-img mr-20">
                                <img src="{{ asset('data/myanmar.png') }}" alt="" style="width: 70px;">
                            </div>
                            <div class="countries-item__bottom-content">
                                <h5 class="countries-item__bottom-content-title">
                                    <a href="javascript::void(0)">
                                        Shwedagon
                                    </a>
                                </h5>
                                <p>
                                    Yangon
                                </p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 mb-30">
                    <div class="countries-item img-top">
                        <div class="countries-item__top">
                            <div class="countries-item__top-img">
                                <img src="{{ asset('data/mm/11.jpg') }}" alt=""
                                    style="width: 100%; height: 180px; background-size: center; object-fit: cover;">
                                <div class="countries-item__top-img-link">
                                    <a href="javascript::void(0)">
                                        <i class="fal fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="countries-item__bottom d-flex align-items-center">
                            <div class="countries-item__bottom-img mr-20">
                                <img src="{{ asset('data/myanmar.png') }}" alt="" style="width: 70px;">
                            </div>
                            <div class="countries-item__bottom-content">
                                <h5 class="countries-item__bottom-content-title">
                                    <a href="javascript::void(0)">
                                        Kyaiktiyo
                                    </a>
                                </h5>
                                <p>
                                    Mon State
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 mb-30">
                    <div class="countries-item img-top">
                        <div class="countries-item__top">
                            <div class="countries-item__top-img">
                                <img src="{{ asset('data/mm/Inle-lake-Myanmar.jpg') }}" alt=""
                                    style="width: 100%; height: 180px; background-size: center; object-fit: cover;">
                                <div class="countries-item__top-img-link">
                                    <a href="javascript::void(0)">
                                        <i class="fal fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="countries-item__bottom d-flex align-items-center">
                            <div class="countries-item__bottom-img mr-20">
                                <img src="{{ asset('data/myanmar.png') }}" alt="" style="width: 70px;">
                            </div>
                            <div class="countries-item__bottom-content">
                                <h5 class="countries-item__bottom-content-title">
                                    <a href="javascript::void(0)">
                                        Inle Lake
                                    </a>
                                </h5>
                                <p>
                                    Shan State
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 mb-30">
                    <div class="countries-item img-top">
                        <div class="countries-item__top">
                            <div class="countries-item__top-img">
                                <img src="{{ asset('data/mm/mdy1.png') }}" alt=""
                                    style="width: 100%; height: 180px; background-size: center; object-fit: cover;">
                                <div class="countries-item__top-img-link">
                                    <a href="javascript::void(0)">
                                        <i class="fal fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="countries-item__bottom d-flex align-items-center">
                            <div class="countries-item__bottom-img mr-20">
                                <img src="{{ asset('data/myanmar.png') }}" alt="" style="width: 70px;">
                            </div>
                            <div class="countries-item__bottom-content">
                                <h5 class="countries-item__bottom-content-title">
                                    <a href="javascript::void(0)">
                                        Kyauk Taw Gyi
                                    </a>
                                </h5>
                                <p>
                                    Mandalay
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 mb-30">
                    <div class="countries-item img-top">
                        <div class="countries-item__top">
                            <div class="countries-item__top-img">
                                <img src="{{ asset('data/mm/upain.png') }}" alt=""
                                    style="width: 100%; height: 180px; background-size: center; object-fit: cover;">
                                <div class="countries-item__top-img-link">
                                    <a href="javascript::void(0)">
                                        <i class="fal fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="countries-item__bottom d-flex align-items-center">
                            <div class="countries-item__bottom-img mr-20">
                                <img src="{{ asset('data/myanmar.png') }}" alt="" style="width: 70px;">
                            </div>
                            <div class="countries-item__bottom-content">
                                <h5 class="countries-item__bottom-content-title">
                                    <a href="javascript::void(0)">
                                        U Bein Bridge
                                    </a>
                                </h5>
                                <p>
                                    Mandalay
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 mb-30">
                    <div class="countries-item img-top">
                        <div class="countries-item__top">
                            <div class="countries-item__top-img">
                                <img src="{{ asset('data/mm/zwe.jpg') }}" alt=""
                                    style="width: 100%; height: 180px; background-size: center; object-fit: cover;">
                                <div class="countries-item__top-img-link">
                                    <a href="javascript::void(0)">
                                        <i class="fal fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="countries-item__bottom d-flex align-items-center">
                            <div class="countries-item__bottom-img mr-20">
                                <img src="{{ asset('data/myanmar.png') }}" alt="" style="width: 70px;">
                            </div>
                            <div class="countries-item__bottom-content">
                                <h5 class="countries-item__bottom-content-title">
                                    <a href="javascript::void(0)">
                                        Zwegabin Mount
                                    </a>
                                </h5>
                                <p>
                                    Kayin State
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 mb-30">
                    <div class="countries-item img-top">
                        <div class="countries-item__top">
                            <div class="countries-item__top-img">
                                <img src="{{ asset('data/mm/sagain.jpeg') }}" alt=""
                                    style="width: 100%; height: 180px; background-size: center; object-fit: cover;">
                                <div class="countries-item__top-img-link">
                                    <a href="javascript::void(0)">
                                        <i class="fal fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="countries-item__bottom d-flex align-items-center">
                            <div class="countries-item__bottom-img mr-20">
                                <img src="{{ asset('data/myanmar.png') }}" alt="" style="width: 70px;">
                            </div>
                            <div class="countries-item__bottom-content">
                                <h5 class="countries-item__bottom-content-title">
                                    <a href="javascript::void(0)">
                                        Sagaing
                                    </a>
                                </h5>
                                <p>
                                    Sagaing Region
                                </p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 mb-30">
                    <div class="countries-item img-top">
                        <div class="countries-item__top">
                            <div class="countries-item__top-img">
                                <img src="{{ asset('data/mm/bagan.jpg') }}" alt=""
                                    style="width: 100%; height: 180px; background-size: center; object-fit: cover;">
                                <div class="countries-item__top-img-link">
                                    <a href="javascript::void(0)">
                                        <i class="fal fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="countries-item__bottom d-flex align-items-center">
                            <div class="countries-item__bottom-img mr-20">
                                <img src="{{ asset('data/myanmar.png') }}" alt="" style="width: 70px;">
                            </div>
                            <div class="countries-item__bottom-content">
                                <h5 class="countries-item__bottom-content-title">
                                    <a href="javascript::void(0)">
                                        Bagan
                                    </a>
                                </h5>
                                <p>
                                    Mandalay Region
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
