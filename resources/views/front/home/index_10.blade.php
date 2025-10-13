@extends('front.home.layouts.master')
@section('title', 'Home')

@section('content')

    <body>


        <!-- rts banner ten area start -->
        <div class="rts-banner-ten-area banner-bg_12 bg_image rts-section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner-inner-content-12">
                            <p class="pre">
                                <img src="{{ asset('front/assets/images/banner/icon/01') }}.svg" alt="">
                                Business Success Starts Here
                            </p>
                            <h1 class="title rts-text-anime-style-1">Innovative Solutions <br>
                                Exceptional Results</h1>
                            <p class="disc">
                                Porttitor ornare fertum aliquam pharetra facilisis gravida risus suscipit Dui feugiat fusce
                                conubia ridiculus tristique parturient
                            </p>
                            <div class="button-wrapper">
                                <a href="contact.html" class="rts-btn btn-primary btn-white">Get In Touch</a>
                                <a href="about.html" class="rts-btn btn-primary btn-border">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="chart-image">
                <img src="{{ asset('front/assets/images/banner/small-img') }}/01.webp" alt="" class="one">
                <img src="{{ asset('front/assets/images/banner/small-img') }}/02.webp" alt="" class="two">
            </div>
        </div>
        <!-- rts banner ten area end -->

        <!-- service area start -->
        <div class="our-service-area-start rts-section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-style-10">
                            <span class="pre">Our Latest Services</span>
                            <h2 class="title rts-text-anime-style-1">Service We Provide</h2>
                        </div>
                    </div>
                </div>
                <div class="row mt--50">
                    <div class="col-lg-12">
                        <div class="rts-service-main-wrapper-10">
                            <div class="signle-service-style-10">
                                <div class="content-area-wrapper">
                                    <div class="icon">
                                        <img src="{{ asset('front/assets/images/service/icons/11') }}.svg" alt="service">
                                    </div>
                                    <h5 class="title">Business Solution</h5>
                                    <p class="disc">
                                        Fusce dignissim erat dis proin ornare class sem nibh
                                    </p>
                                    <a href="service-details.html" class="arrow-right-btn">Learn More <i
                                            class="fa-solid fa-arrow-right"></i></a>
                                </div>
                                <div class="thumbnail">
                                    <img src="{{ asset('front/assets/images/service/07.webp') }}" alt="service">
                                </div>
                            </div>
                            <div class="signle-service-style-10">
                                <div class="content-area-wrapper">
                                    <div class="icon">
                                        <img src="{{ asset('front/assets/images/service/icons/12') }}.svg" alt="service">
                                    </div>
                                    <h5 class="title">Marketing Solution</h5>
                                    <p class="disc">
                                        Fusce dignissim erat dis proin ornare class sem nibh
                                    </p>
                                    <a href="service-details.html" class="arrow-right-btn">Learn More <i
                                            class="fa-solid fa-arrow-right"></i></a>
                                </div>
                                <div class="thumbnail">
                                    <img src="{{ asset('front/assets/images/service/08.webp') }}" alt="service">
                                </div>
                            </div>
                            <div class="signle-service-style-10 order-control-sm-device">
                                <div class="thumbnail">
                                    <img src="{{ asset('front/assets/images/service/09.webp') }}" alt="service">
                                </div>
                                <div class="content-area-wrapper">
                                    <div class="icon">
                                        <img src="{{ asset('front/assets/images/service/icons/13') }}.svg" alt="service">
                                    </div>
                                    <h5 class="title">Agency Marketing</h5>
                                    <p class="disc">
                                        Fusce dignissim erat dis proin ornare class sem nibh
                                    </p>
                                    <a href="service-details.html" class="arrow-right-btn">Learn More <i
                                            class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="signle-service-style-10 order-control-sm-device">

                                <div class="thumbnail">
                                    <img src="{{ asset('front/assets/images/service/10.webp') }}" alt="service">
                                </div>
                                <div class="content-area-wrapper">
                                    <div class="icon">
                                        <img src="{{ asset('front/assets/images/service/icons/14') }}.svg" alt="service">
                                    </div>
                                    <h5 class="title">Startup Paskages</h5>
                                    <p class="disc">
                                        Fusce dignissim erat dis proin ornare class sem nibh
                                    </p>
                                    <a href="service-details.html" class="arrow-right-btn">Learn More <i
                                            class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- service area end -->

        <div class="rts-trusted-client rts-section-gapBottom">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="title-area-client-client text-center">
                            <p class="client-title">Our Trusted Clients</p>
                        </div>
                    </div>
                </div>
                <div class="row mt--65">
                    <div class="col-lg-12">
                        <div class="client-three-wrapper">
                            <div class="single">
                                <img src="{{ asset('front/assets/images/brand/01.webp') }}" alt="Business_client">
                            </div>
                            <div class="single">
                                <img src="{{ asset('front/assets/images/brand/02.webp') }}" alt="Business_client">
                            </div>
                            <div class="single">
                                <img src="{{ asset('front/assets/images/brand/03.webp') }}" alt="Business_client">
                            </div>
                            <div class="single">
                                <img src="{{ asset('front/assets/images/brand/04.webp') }}" alt="Business_client">
                            </div>
                            <div class="single">
                                <img src="{{ asset('front/assets/images/brand/05.webp') }}" alt="Business_client">
                            </div>
                            <div class="single">
                                <img src="{{ asset('front/assets/images/brand/06.webp') }}" alt="Business_client">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('front.home.partials.about_4')

        <!-- rts progress area start -->
        <div class="rts-progress-area-main-wrapper rts-section-gapBottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="progress-circle-main-wrapper">
                            <div class="single-progress-area">
                                <div class="single-progress-circle">
                                    <svg class="radial-progress" data-countervalue="76" viewBox="0 0 80 80">
                                        <circle class="bar-static" cx="40" cy="40" r="35"></circle>
                                        <circle class="bar--animated" cx="40" cy="40" r="35"
                                            style="stroke-dashoffset: 217.8;"></circle>
                                        <text class="countervalue start" x="50%" y="50%"
                                            transform="matrix(0, 1, -1, 0, 80, 0)"></text>
                                    </svg>
                                    <img src="{{ asset('front/assets/images/fun/01.svg') }}" alt="fun">
                                </div>
                                <div class="right-counter">
                                    <h2 class="counter title"><span class="odometer" data-count="76">00</span>%
                                    </h2>
                                    <p>Trusted Clients</p>
                                </div>
                            </div>
                            <div class="single-progress-area">
                                <div class="single-progress-circle">
                                    <svg class="radial-progress" data-countervalue="89" viewBox="0 0 80 80">
                                        <circle class="bar-static" cx="40" cy="40" r="35"></circle>
                                        <circle class="bar--animated" cx="40" cy="40" r="35"
                                            style="stroke-dashoffset: 217.8;"></circle>
                                        <text class="countervalue start" x="50%" y="50%"
                                            transform="matrix(0, 1, -1, 0, 80, 0)"></text>
                                    </svg>
                                    <img src="{{ asset('front/assets/images/fun/02.svg') }}" alt="fun">
                                </div>
                                <div class="right-counter">
                                    <h2 class="counter title"><span class="odometer" data-count="89">00</span>%
                                    </h2>
                                    <p>Project Completed</p>
                                </div>
                            </div>
                            <div class="single-progress-area">
                                <div class="single-progress-circle">
                                    <svg class="radial-progress" data-countervalue="70" viewBox="0 0 80 80">
                                        <circle class="bar-static" cx="40" cy="40" r="35"></circle>
                                        <circle class="bar--animated" cx="40" cy="40" r="35"
                                            style="stroke-dashoffset: 217.8;"></circle>
                                        <text class="countervalue start" x="50%" y="50%"
                                            transform="matrix(0, 1, -1, 0, 80, 0)"></text>
                                    </svg>
                                    <img src="{{ asset('front/assets/images/fun/03.svg') }}" alt="fun">
                                </div>
                                <div class="right-counter">
                                    <h2 class="counter title"><span class="odometer" data-count="70">00</span>%
                                    </h2>
                                    <p>Business Awards</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- rts progress area end -->

        <!-- rts projects area start -->
        <div class="rts-projects-area-start-10 bg_images rts-section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-style-10">
                            <span class="pre">Recent Case Studies</span>
                            <h2 class="title rts-text-anime-style-1">Our Business Cases</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-1680 mt--40">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="case-studies-wrapper-main-5">
                            <div class="swiper mySwiper-case-studies-5" dir="ltr">
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
                                                <img src="{{ asset('front/assets/images/project/09.webp') }}" alt="project">
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
                                                    <h3 class="title">Digital Business Solution</h3>
                                                    <span>Business Strategy</span>
                                                </a>
                                            </div>
                                            <div class="eye">
                                                <img src="{{ asset('front/assets/images/project/eye.svg') }}" alt="project">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination-fraction"></div>
                                <div class="swiper-button-next"><i class="fa-sharp fa-regular fa-arrow-right"></i></div>
                                <div class="swiper-button-prev"><i class="fa-sharp fa-regular fa-arrow-left"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- rts projects area end -->


        <!-- rts pricing area start -->
        <div class="rts-pricing-area-one rts-section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="pricing-three-title-area">
                            <div class="title-style-one left">
                                <span class="pre">Price Table</span>
                                <h2 class="title rts-text-anime-style-1">Pricing & Plans
                                </h2>
                            </div>
                            <div class="pricing-tab-button-area">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                            data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                            aria-selected="true">Monthly PLan</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                            data-bs-target="#profile" type="button" role="tab" aria-controls="profile"
                                            aria-selected="false">Yearly
                                            Plan</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt--60">
                    <div class="col-12">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row g-5">
                                    <div class="col-lg-12">
                                        <div class="pricing-list-style-wrapper">
                                            <div class="single-list-pricing-area" data-animation="fadeInUp" data-delay="0.0"
                                                data-duration=".4">
                                                <!-- pricing area -->
                                                <div class="pricing-area">
                                                    <div class="head">
                                                        <span>Starter Package</span>
                                                        <h3 class="title">Basic Plan</h3>
                                                    </div>
                                                    <div class="pricing">
                                                        <h3 class="pricing">$260
                                                            <span>/month</span>
                                                        </h3>
                                                    </div>
                                                </div>
                                                <!-- pricing area -->
                                                <div class="feature-button-wrapper">

                                                    <div class="feature-area-wrapper">
                                                        <div class="feature-row-wrapper">
                                                            <div class="signle">
                                                                <i class="fa-sharp fa-light fa-circle-check"></i>
                                                                <p>Business Solution</p>
                                                            </div>
                                                            <div class="signle">
                                                                <i class="fa-sharp fa-light fa-circle-check"></i>
                                                                <p>24/7 Consultant Service</p>
                                                            </div>
                                                            <div class="signle">
                                                                <i class="fa-sharp fa-light fa-circle-check"></i>
                                                                <p>Great Customer Support</p>
                                                            </div>
                                                        </div>
                                                        <div class="feature-row-wrapper light">
                                                            <div class="signle">
                                                                <i class="fa-sharp fa-light fa-circle-check"></i>
                                                                <p>Market Growth Solution</p>
                                                            </div>
                                                            <div class="signle">
                                                                <i class="fa-sharp fa-light fa-circle-check"></i>
                                                                <p>24/7 Consultant Service</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="contact.html" class="rts-btn btn-primary btn-white">Buy
                                                        This</a>
                                                </div>
                                            </div>
                                            <div class="single-list-pricing-area" data-animation="fadeInUp" data-delay="0.0"
                                                data-duration=".4">
                                                <!-- pricing area -->
                                                <div class="pricing-area">
                                                    <div class="head">
                                                        <span>Starter Package</span>
                                                        <h3 class="title">Strandard Plan</h3>
                                                    </div>
                                                    <div class="pricing">
                                                        <h3 class="pricing">$260
                                                            <span>/month</span>
                                                        </h3>
                                                    </div>
                                                </div>
                                                <!-- pricing area -->
                                                <div class="feature-button-wrapper">

                                                    <div class="feature-area-wrapper">
                                                        <div class="feature-row-wrapper">
                                                            <div class="signle">
                                                                <i class="fa-sharp fa-light fa-circle-check"></i>
                                                                <p>Business Solution</p>
                                                            </div>
                                                            <div class="signle">
                                                                <i class="fa-sharp fa-light fa-circle-check"></i>
                                                                <p>24/7 Consultant Service</p>
                                                            </div>
                                                            <div class="signle">
                                                                <i class="fa-sharp fa-light fa-circle-check"></i>
                                                                <p>Great Customer Support</p>
                                                            </div>
                                                        </div>
                                                        <div class="feature-row-wrapper light">
                                                            <div class="signle">
                                                                <i class="fa-sharp fa-light fa-circle-check"></i>
                                                                <p>Market Growth Solution</p>
                                                            </div>
                                                            <div class="signle">
                                                                <i class="fa-sharp fa-light fa-circle-check"></i>
                                                                <p>24/7 Consultant Service</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="contact.html" class="rts-btn btn-primary btn-white">Buy
                                                        This</a>
                                                </div>
                                            </div>
                                            <div class="single-list-pricing-area" data-animation="fadeInUp" data-delay="0.0"
                                                data-duration=".4">
                                                <!-- pricing area -->
                                                <div class="pricing-area">
                                                    <div class="head">
                                                        <span>Starter Package</span>
                                                        <h3 class="title">Premium Plan</h3>
                                                    </div>
                                                    <div class="pricing">
                                                        <h3 class="pricing">$340
                                                            <span>/month</span>
                                                        </h3>
                                                    </div>
                                                </div>
                                                <!-- pricing area -->
                                                <div class="feature-button-wrapper">

                                                    <div class="feature-area-wrapper">
                                                        <div class="feature-row-wrapper">
                                                            <div class="signle">
                                                                <i class="fa-sharp fa-light fa-circle-check"></i>
                                                                <p>Business Solution</p>
                                                            </div>
                                                            <div class="signle">
                                                                <i class="fa-sharp fa-light fa-circle-check"></i>
                                                                <p>24/7 Consultant Service</p>
                                                            </div>
                                                            <div class="signle">
                                                                <i class="fa-sharp fa-light fa-circle-check"></i>
                                                                <p>Great Customer Support</p>
                                                            </div>
                                                        </div>
                                                        <div class="feature-row-wrapper light">
                                                            <div class="signle">
                                                                <i class="fa-sharp fa-light fa-circle-check"></i>
                                                                <p>Market Growth Solution</p>
                                                            </div>
                                                            <div class="signle">
                                                                <i class="fa-sharp fa-light fa-circle-check"></i>
                                                                <p>24/7 Consultant Service</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="contact.html" class="rts-btn btn-primary btn-white">Buy
                                                        This</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="row g-5">
                                    <div class="col-lg-12">
                                        <div class="pricing-list-style-wrapper">
                                            <div class="single-list-pricing-area" data-animation="fadeInUp" data-delay="0.0"
                                                data-duration=".4">
                                                <!-- pricing area -->
                                                <div class="pricing-area">
                                                    <div class="head">
                                                        <span>Starter Package</span>
                                                        <h3 class="title">Basic Plan</h3>
                                                    </div>
                                                    <div class="pricing">
                                                        <h3 class="pricing">$260
                                                            <span>/month</span>
                                                        </h3>
                                                    </div>
                                                </div>
                                                <!-- pricing area -->
                                                <div class="feature-button-wrapper">

                                                    <div class="feature-area-wrapper">
                                                        <div class="feature-row-wrapper">
                                                            <div class="signle">
                                                                <i class="fa-sharp fa-light fa-circle-check"></i>
                                                                <p>Business Solution</p>
                                                            </div>
                                                            <div class="signle">
                                                                <i class="fa-sharp fa-light fa-circle-check"></i>
                                                                <p>24/7 Consultant Service</p>
                                                            </div>
                                                            <div class="signle">
                                                                <i class="fa-sharp fa-light fa-circle-check"></i>
                                                                <p>Great Customer Support</p>
                                                            </div>
                                                        </div>
                                                        <div class="feature-row-wrapper light">
                                                            <div class="signle">
                                                                <i class="fa-sharp fa-light fa-circle-check"></i>
                                                                <p>Market Growth Solution</p>
                                                            </div>
                                                            <div class="signle">
                                                                <i class="fa-sharp fa-light fa-circle-check"></i>
                                                                <p>24/7 Consultant Service</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="rts-btn btn-primary btn-white">Buy This</a>
                                                </div>
                                            </div>
                                            <div class="single-list-pricing-area" data-animation="fadeInUp" data-delay="0.0"
                                                data-duration=".4">
                                                <!-- pricing area -->
                                                <div class="pricing-area">
                                                    <div class="head">
                                                        <span>Starter Package</span>
                                                        <h3 class="title">Strandard Plan</h3>
                                                    </div>
                                                    <div class="pricing">
                                                        <h3 class="pricing">$260
                                                            <span>/month</span>
                                                        </h3>
                                                    </div>
                                                </div>
                                                <!-- pricing area -->
                                                <div class="feature-button-wrapper">

                                                    <div class="feature-area-wrapper">
                                                        <div class="feature-row-wrapper">
                                                            <div class="signle">
                                                                <i class="fa-sharp fa-light fa-circle-check"></i>
                                                                <p>Business Solution</p>
                                                            </div>
                                                            <div class="signle">
                                                                <i class="fa-sharp fa-light fa-circle-check"></i>
                                                                <p>24/7 Consultant Service</p>
                                                            </div>
                                                            <div class="signle">
                                                                <i class="fa-sharp fa-light fa-circle-check"></i>
                                                                <p>Great Customer Support</p>
                                                            </div>
                                                        </div>
                                                        <div class="feature-row-wrapper light">
                                                            <div class="signle">
                                                                <i class="fa-sharp fa-light fa-circle-check"></i>
                                                                <p>Market Growth Solution</p>
                                                            </div>
                                                            <div class="signle">
                                                                <i class="fa-sharp fa-light fa-circle-check"></i>
                                                                <p>24/7 Consultant Service</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="rts-btn btn-primary btn-white">Buy This</a>
                                                </div>
                                            </div>
                                            <div class="single-list-pricing-area" data-animation="fadeInUp" data-delay="0.0"
                                                data-duration=".4">
                                                <!-- pricing area -->
                                                <div class="pricing-area">
                                                    <div class="head">
                                                        <span>Starter Package</span>
                                                        <h3 class="title">Premium Plan</h3>
                                                    </div>
                                                    <div class="pricing">
                                                        <h3 class="pricing">$340
                                                            <span>/month</span>
                                                        </h3>
                                                    </div>
                                                </div>
                                                <!-- pricing area -->
                                                <div class="feature-button-wrapper">

                                                    <div class="feature-area-wrapper">
                                                        <div class="feature-row-wrapper">
                                                            <div class="signle">
                                                                <i class="fa-sharp fa-light fa-circle-check"></i>
                                                                <p>Business Solution</p>
                                                            </div>
                                                            <div class="signle">
                                                                <i class="fa-sharp fa-light fa-circle-check"></i>
                                                                <p>24/7 Consultant Service</p>
                                                            </div>
                                                            <div class="signle">
                                                                <i class="fa-sharp fa-light fa-circle-check"></i>
                                                                <p>Great Customer Support</p>
                                                            </div>
                                                        </div>
                                                        <div class="feature-row-wrapper light">
                                                            <div class="signle">
                                                                <i class="fa-sharp fa-light fa-circle-check"></i>
                                                                <p>Market Growth Solution</p>
                                                            </div>
                                                            <div class="signle">
                                                                <i class="fa-sharp fa-light fa-circle-check"></i>
                                                                <p>24/7 Consultant Service</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="rts-btn btn-primary btn-white">Buy This</a>
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
        </div>
        <!-- rts pricing area end -->

        <!-- rts team area start -->
        <div class="rts-team-area rts-section-gapBottom">
            <div class="container pb--80">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-style-10">
                            <span class="pre">Our Experts</span>
                            <h2 class="title rts-text-anime-style-1">Our Team Mates</h2>
                        </div>
                    </div>
                </div>
                <div class="row mt--30 g-5">
                    <div class="col-lg-4 col-md-6 col-sm-12" data-animation="fadeInUp" data-delay="0.2" data-duration="1.2">
                        <div class="single-team-area-one-start">
                            <a href="team-details.html" class="thumbnail">
                                <img src="{{ asset('front/assets/images/team/01.webp') }}" alt="team">
                            </a>
                            <div class="inner-content">
                                <div class="text-top">
                                    <a href="team-details.html">
                                        <h5 class="title">Kevin Martin</h5>
                                    </a>
                                    <span>Consultant</span>
                                </div>
                                <div class="social-one-wrapper">
                                    <ul>
                                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mt_sm--100" data-animation="fadeInUp" data-delay="0.4"
                        data-duration="1.2">
                        <div class="single-team-area-one-start">
                            <a href="team-details.html" class="thumbnail">
                                <img src="{{ asset('front/assets/images/team/02.webp') }}" alt="team">
                            </a>
                            <div class="inner-content">
                                <div class="text-top">
                                    <a href="team-details.html">
                                        <h5 class="title">Mark Martin</h5>
                                    </a>
                                    <span>Consultant</span>
                                </div>
                                <div class="social-one-wrapper">
                                    <ul>
                                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mt_sm--100 mt_md--100" data-animation="fadeInUp"
                        data-delay="0.6" data-duration="1.2">
                        <div class="single-team-area-one-start">
                            <a href="team-details.html" class="thumbnail">
                                <img src="{{ asset('front/assets/images/team/03.webp') }}" alt="team">
                            </a>
                            <div class="inner-content">
                                <div class="text-top">
                                    <a href="team-details.html">
                                        <h5 class="title">Willium Martin</h5>
                                    </a>
                                    <span>Consultant</span>
                                </div>
                                <div class="social-one-wrapper">
                                    <ul>
                                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- rts team area ends -->

        @include('front.home.partials.testimonial_5')

        @include('front.home.partials.blogs_6')
        @include('front.home.partials.cta_3')



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