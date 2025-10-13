@extends('front.home.layouts.master')
@section('title', 'Home')

@section('content')

    <body class="investment-home">


        <div class="rts-banner-area investment">
            <div class="container">
                <div class="banner-inner">
                    <div class="row justify-content-center">
                        <div class="col-lg-9">
                            <div class="banner-one-inner text-center">
                                <p class="pre-title">
                                    <img src="{{ asset('front/assets/images/banner/icon/star') }}.svg" alt="">
                                    Think. Improve. Expand. Repeat.
                                </p>
                                <h1 class="title rts-text-anime-style-1">The Future of Investing Starts Here</h1>
                                <p class="disc banner-para">
                                    Porttitor ornare fermentum aliquam pharetra facilisis gravida risus suscipit <br> Dui
                                    feugiat
                                    fusce conubia ridiculus tristique parturient
                                </p>
                                <a href="#" class="rts-btn btn-primary color-h-black">Explore Opportunities</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape">
                <img src="{{ asset('front/assets/images/banner/line-shape') }}.svg" alt="">
            </div>
        </div>
        <div class="image-slider-area">
            <div class="swiper imageSlider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="image">
                            <img src="{{ asset('front/assets/images/banner/35.webp') }}" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="image">
                            <img src="{{ asset('front/assets/images/banner/36.webp') }}" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="image">
                            <img src="{{ asset('front/assets/images/banner/37.webp') }}" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="image">
                            <img src="{{ asset('front/assets/images/banner/38.webp') }}" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="image">
                            <img src="{{ asset('front/assets/images/banner/35.webp') }}" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="image">
                            <img src="{{ asset('front/assets/images/banner/36.webp') }}" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="image">
                            <img src="{{ asset('front/assets/images/banner/37.webp') }}" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="image">
                            <img src="{{ asset('front/assets/images/banner/38.webp') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="rts-counter-area investment rts-section-gap">
            <div class="container">
                <div class="section-inner">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="counter-area">
                                <div class="counter-inner">
                                    <h2 class="counter title"><span class="odometer" data-count="2022">00</span>
                                    </h2>
                                    <p>Founded</p>
                                </div>
                                <div class="counter-inner">
                                    <h2 class="counter title">$<span class="odometer" data-count="40">00</span>B
                                    </h2>
                                    <p>Valuation</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-content">
                                <p class="desc">
                                    We are the leading agency dedicated to enhancing your deals, driving growth, and
                                    delivering exceptional results. Trust us to maximize your potential and take your
                                    business to the next level
                                </p>
                                <div class="bottom">
                                    <img src="{{ asset('front/assets/images/banner/small-img') }}/01.png" alt="user">
                                    <span class="info">
                                        2.5k Client Connect with our Company
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('front.partials.about.about_1')

        <!-- rts service area start -->
        <div class="rts-service-area rts-section-gapBottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-style-five center">
                            <span class="pre">Popular Insurance</span>
                            <h2 class="title">Our Latest Insurance</h2>
                        </div>
                    </div>
                </div>
                <div class="row g-5 mt--10">
                    <div class="col-lg-6" data-animation="fadeInUp" data-delay="0.0" data-duration="1.2">
                        <div class="single-service-nine bg_image">
                            <h3 class="title">
                                Financial Planning
                            </h3>
                            <a href="service-details.html" class="icon">
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6" data-animation="fadeInUp" data-delay="0.2" data-duration="1.2">
                        <div class="single-service-nine two bg_image">
                            <h3 class="title">
                                Accounting Services
                            </h3>
                            <a href="service-details.html" class="icon">
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6" data-animation="fadeInUp" data-delay="0.4" data-duration="1.2">
                        <div class="single-service-nine three bg_image">
                            <h3 class="title">
                                Tax Services
                            </h3>
                            <a href="service-details.html" class="icon">
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6" data-animation="fadeInUp" data-delay="0.6" data-duration="1.2">
                        <div class="single-service-nine four bg_image">
                            <h3 class="title">
                                Legal Advice
                            </h3>
                            <a href="service-details.html" class="icon">
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- rts service area end -->

        <!-- rts business case area start -->
        <div class="rts-business-case-area rts-section-gap investment">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-between-area">
                            <div class="title-style-five">
                                <span class="pre"><img src="{{ asset('front/assets/images/banner/icon/star') }}.svg" alt="">
                                    RECENT CASE STUDIES</span>
                                <h2 class="title rts-text-anime-style-1">Our Business Cases
                                </h2>
                            </div>
                            <div class="pagination-wrapper">
                                <div class="swiper-button-prev"><i class="fa-sharp fa-regular fa-arrow-left"></i></div>
                                <div class="swiper-pagination-fraction"></div>
                                <div class="swiper-button-next"><i class="fa-sharp fa-regular fa-arrow-right"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-1680 mt--40">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="case-studies-wrapper-main-5">
                            <div class="swiper mySwiper-case-studies-5 p-0" dir="ltr">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="single-case-studies-four">
                                            <a href="project-details.html" class="thumbnail">
                                                <img src="{{ asset('front/assets/images/project/07.webp') }}" alt="project">
                                            </a>
                                            <div class="inner">
                                                <a href="project-details.html">
                                                    <h3 class="title">Digital Business Solution</h3>
                                                    <span>Business Strategy</span>
                                                </a>
                                            </div>
                                            <div class="eye">
                                                <img src="{{ asset('front/assets/images/project/eye.svg') }}" alt="project">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-case-studies-four">
                                            <a href="project-details.html" class="thumbnail">
                                                <img src="{{ asset('front/assets/images/project/08.webp') }}" alt="project">
                                            </a>
                                            <div class="inner">
                                                <a href="project-details.html">
                                                    <h3 class="title">Smart Business Solution</h3>
                                                    <span>Business Smart</span>
                                                </a>
                                            </div>
                                            <div class="eye">
                                                <img src="{{ asset('front/assets/images/project/eye.svg') }}" alt="project">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-case-studies-four">
                                            <a href="project-details.html" class="thumbnail">
                                                <img src="{{ asset('front/assets/images/project/09.webp') }}" alt="project">
                                            </a>
                                            <div class="inner">
                                                <a href="project-details.html">
                                                    <h3 class="title">Business Marketing</h3>
                                                    <span>Business Marketing</span>
                                                </a>
                                            </div>
                                            <div class="eye">
                                                <img src="{{ asset('front/assets/images/project/eye.svg') }}" alt="project">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-case-studies-four">
                                            <a href="project-details.html" class="thumbnail">
                                                <img src="{{ asset('front/assets/images/project/08.webp') }}" alt="project">
                                            </a>
                                            <div class="inner">
                                                <a href="project-details.html">
                                                    <h3 class="title">Business Top Goal</h3>
                                                    <span>Business Goal</span>
                                                </a>
                                            </div>
                                            <div class="eye">
                                                <img src="{{ asset('front/assets/images/project/eye.svg') }}" alt="project">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- rts business case area end -->

        @include('front.partials.blog.blogs_3')

        <div class="rts-trusted-client rts-section-gapBottom">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="title-area-client-client text-center">
                            <p class="client-title">Our Trusted Clients</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="client-wrapper-one">
                        <a href="#" data-animation="fadeInUp" data-delay="0.1" data-duration="1.2"><img
                                src="{{ asset('front/assets/images/client/1.webp') }}" alt="business_invena"></a>
                        <a href="#" data-animation="fadeInUp" data-delay="0.2" data-duration="1.2"><img
                                src="{{ asset('front/assets/images/client/2.webp') }}" alt="business_invena"></a>
                        <a href="#" data-animation="fadeInUp" data-delay="0.3" data-duration="1.2"><img
                                src="{{ asset('front/assets/images/client/3.webp') }}" alt="business_invena"></a>
                        <a href="#" data-animation="fadeInUp" data-delay="0.4" data-duration="1.2"><img
                                src="{{ asset('front/assets/images/client/4.webp') }}" alt="business_invena"></a>
                        <a href="#" data-animation="fadeInUp" data-delay="0.5" data-duration="1.2"><img
                                src="{{ asset('front/assets/images/client/5.webp') }}" alt="business_invena"></a>
                        <a href="#" data-animation="fadeInUp" data-delay="0.6" data-duration="1.2"><img
                                src="{{ asset('front/assets/images/client/6.webp') }}" alt="business_invena"></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- rts team area start -->
        <div class="rts-team-area rts-section-gapBottom pt--40">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-style-four center">
                            <span class="pre"><img src="{{ asset('front/assets/images/banner/icon/star') }}.svg" alt="">
                                TEAM LEADER</span>
                            <h2 class="title rts-text-anime-style-1">Advisory Leaders
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="swiper mySwiperh1_team pt--50 pb--80" dir="ltr">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="team-single-one-start bg-none shadow-0">
                                        <div class="team-image-area">
                                            <a href="team-details.html">
                                                <img loading="lazy" src="{{ asset('front/assets/images/team/17.webp') }}"
                                                    alt="Business_Team_single">
                                            </a>
                                        </div>
                                        <div class="single-details text-center" dir="rtl">
                                            <a href="team-details.html">
                                                <h5 class="title">Archer Graham</h5>
                                            </a>
                                            <p>Founder</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="team-single-one-start bg-none shadow-0">
                                        <div class="team-image-area">
                                            <a href="team-details.html">
                                                <img loading="lazy" src="{{ asset('front/assets/images/team/18.webp') }}"
                                                    alt="Business_Team_single">
                                            </a>
                                        </div>
                                        <div class="single-details text-center" dir="rtl">
                                            <a href="team-details.html">
                                                <h5 class="title">Amelia Clover</h5>
                                            </a>
                                            <p>Co-Founder</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="team-single-one-start bg-none shadow-0">
                                        <div class="team-image-area">
                                            <a href="team-details.html">
                                                <img loading="lazy" src="{{ asset('front/assets/images/team/19.webp') }}"
                                                    alt="Business_Team_single">
                                            </a>
                                        </div>
                                        <div class="single-details text-center" dir="rtl">
                                            <a href="team-details.html">
                                                <h5 class="title">Beckett Hayden</h5>
                                            </a>
                                            <p>Deputy Manager</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="team-single-one-start bg-none shadow-0">
                                        <div class="team-image-area">
                                            <a href="team-details.html">
                                                <img loading="lazy" src="{{ asset('front/assets/images/team/20.webp') }}"
                                                    alt="Business_Team_single">
                                            </a>
                                        </div>
                                        <div class="single-details text-center" dir="rtl">
                                            <a href="team-details.html">
                                                <h5 class="title">Julian Wyat</h5>
                                            </a>
                                            <p>Finance Manager</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="team-single-one-start bg-none shadow-0">
                                        <div class="team-image-area">
                                            <a href="team-details.html">
                                                <img loading="lazy" src="{{ asset('front/assets/images/team/18.webp') }}"
                                                    alt="Business_Team_single">
                                            </a>
                                        </div>
                                        <div class="single-details text-center" dir="rtl">
                                            <a href="team-details.html">
                                                <h5 class="title">Julian Wyat</h5>
                                            </a>
                                            <p>Finance Manager</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- rts team area end -->

        <!-- rts business case area start -->
        <div class="rts-business-case-area rts-section-gap investment">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-between-area">
                            <div class="title-style-five">
                                <span class="pre"><img src="{{ asset('front/assets/images/banner/icon/star') }}.svg" alt="">
                                    TESTIMONIAL</span>
                                <h2 class="title rts-text-anime-style-1">Our Customers Say
                                </h2>
                            </div>
                            <div class="pagination-wrapper">
                                <div class="swiper-button-prevs"><i class="fa-sharp fa-regular fa-arrow-left"></i></div>
                                <div class="swiper-pagination-fractions"></div>
                                <div class="swiper-button-nexts"><i class="fa-sharp fa-regular fa-arrow-right"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt--40">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="case-studies-wrapper-main-5">
                            <div class="swiper mySwiper-testimonials-10 p-0" dir="ltr">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="testimonials-wrapper-investment">
                                            <div class="thumbnail">
                                                <img src="{{ asset('front/assets/images/testimonials/10.webp') }}"
                                                    alt="project">
                                            </div>
                                            <div class="content">
                                                <h4 class="title">Liam Nguyen</h4>
                                                <p class="designation">
                                                    Customer Success
                                                </p>
                                                <p class="desc">
                                                    “Dabus nisl aliquet congue tellus nascetur lectus sagpien mattis arcu
                                                    dictums augue volutpat felis etiam mauris dignissim ante”
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonials-wrapper-investment">
                                            <div class="thumbnail">
                                                <img src="{{ asset('front/assets/images/testimonials/11.webp') }}"
                                                    alt="project">
                                            </div>
                                            <div class="content">
                                                <h4 class="title">Alex Morgan</h4>
                                                <p class="designation">
                                                    Business Analyst
                                                </p>
                                                <p class="desc">
                                                    “Dabus nisl aliquet congue tellus nascetur lectus sagpien mattis arcu
                                                    dictums augue volutpat felis etiam mauris dignissim ante”
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonials-wrapper-investment">
                                            <div class="thumbnail">
                                                <img src="{{ asset('front/assets/images/testimonials/10.webp') }}"
                                                    alt="project">
                                            </div>
                                            <div class="content">
                                                <h4 class="title">Liam Nguyen</h4>
                                                <p class="designation">
                                                    Customer Success
                                                </p>
                                                <p class="desc">
                                                    “Dabus nisl aliquet congue tellus nascetur lectus sagpien mattis arcu
                                                    dictums augue volutpat felis etiam mauris dignissim ante”
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonials-wrapper-investment">
                                            <div class="thumbnail">
                                                <img src="{{ asset('front/assets/images/testimonials/11.webp') }}"
                                                    alt="project">
                                            </div>
                                            <div class="content">
                                                <h4 class="title">Liam Nguyen</h4>
                                                <p class="designation">
                                                    Customer Success
                                                </p>
                                                <p class="desc">
                                                    “Dabus nisl aliquet congue tellus nascetur lectus sagpien mattis arcu
                                                    dictums augue volutpat felis etiam mauris dignissim ante”
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- rts business case area end -->

        @include('front.partials.cta.cta')



        <!-- offcanvase search -->
        <div class="search-input-area">
            <div class="container">
                <div class="search-input-inner">
                    <div class="input-div">
                        <input class="search-input autocomplete" type="text" placeholder="Search by keyword or #">
                        <button><i class="far fa-search"></i></button>
                    </div>
                </div>
            </div>
            <div id="close" class="search-close-icon"><i class="far fa-times"></i></div>
        </div>
        <div id="anywhere-home" class="">
        </div>

        <!-- rtl btn area start -->
        <div class="rtl-ltr-switcher-btn">
            <span class="rtl show">View RTL</span>
            <span class="ltr">View LTR</span>
        </div>
        <!-- rtl btn area end -->

        <!-- progress area start -->
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                    style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
                </path>
            </svg>
        </div>
        <!-- progress area end -->
         
    </body>
@endsection