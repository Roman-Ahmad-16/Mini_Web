@extends('front.home.layouts.master')
@section('title', 'Home')

@section('content')
    <!-- banner three area start -->
    <div class="banner-four-area-main-wrapper">
        <div class="swiper mySwiper-banner-four" dir="ltr">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="swiper-area-banner-four-wrapper">
                        <div class="banner-four-bg bg_image">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="inner-content-wrapper-four-banner">
                                            <span class="pre">Make Your Strategy Strong</span>
                                            <h1 class="title">
                                                Strengthen Your <br> <span class="in">Market</span> Presence
                                            </h1>
                                            <p class="disc">
                                                Our team of dedicated professionals brings expertise, passion, and a
                                                customer-first
                                                approach to every project, ensuring you receive the highest level of
                                                service.
                                            </p>
                                            <div class="button-wrapper">
                                                <a href="contact.html" class="rts-btn btn-primary btn-white">Get Started</a>
                                                <a href="contact.html" class="rts-btn btn-primary btn-border">Get
                                                    Started</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-area-banner-four-wrapper">
                        <div class="banner-four-bg bg_image two">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="inner-content-wrapper-four-banner">
                                            <span class="pre">Make Your Strategy Strong</span>
                                            <h1 class="title">
                                                Best Sell <br> <span class="in">Market</span> Presence
                                            </h1>
                                            <p class="disc">
                                                Our team of dedicated professionals brings expertise, passion, and a
                                                customer-first
                                                approach to every project, ensuring you receive the highest level of
                                                service.
                                            </p>
                                            <div class="button-wrapper">
                                                <a href="#" class="rts-btn btn-primary btn-white">Get Started</a>
                                                <a href="#" class="rts-btn btn-primary btn-border">Get Started</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-area-banner-four-wrapper">
                        <div class="banner-four-bg bg_image three">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="inner-content-wrapper-four-banner">
                                            <span class="pre">Make Your Strategy Strong</span>
                                            <h1 class="title">
                                                Grow Your <br> <span class="in">Market</span> Sell
                                            </h1>
                                            <p class="disc">
                                                Our team of dedicated professionals brings expertise, passion, and a
                                                customer-first
                                                approach to every project, ensuring you receive the highest level of
                                                service.
                                            </p>
                                            <div class="button-wrapper">
                                                <a href="#" class="rts-btn btn-primary btn-white">Get Started</a>
                                                <a href="#" class="rts-btn btn-primary btn-border">Get Started</a>
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
        <div class="swiper-pagination"></div>
        <div class="banner-shape-left-right">
            <div class="left">
                <img src="{{asset('front/assets/images/banner/shape/left.svg')}}" alt="left">
            </div>
            <div class="right">
                <img src="{{asset('front/assets/images/banner/shape/right.svg')}}" alt="left">
            </div>
        </div>
    </div>
    <!-- banner three area end -->
   @include('front.partials.about.about_4')
    <!-- rts brand area start -->
    <div class="rts-brand-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="brand-style-two-wrapper">
                        <div class="swiper mySwiper-brand-2">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="single-brand">
                                        <img src="{{asset('front/assets/images/brand/01.webp')}}" alt="brand">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-brand">
                                        <img src="{{asset('front/assets/images/brand/02.webp')}}" alt="brand">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-brand">
                                        <img src="{{asset('front/assets/images/brand/03.webp')}}" alt="brand">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-brand">
                                        <img src="{{asset('front/assets/images/brand/04.webp')}}" alt="brand">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-brand">
                                        <img src="{{asset('front/assets/images/brand/05.webp')}}" alt="brand">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-brand">
                                        <img src="{{asset('front/assets/images/brand/03.webp')}}" alt="brand">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts brand area end -->
     @include('front.partials.why_choose_us.why_us_4')
    @include('front.partials.cta.cta')
    <!-- business solution area start -->
    <div class="business-solution-area rts-section-gap">
        <div class="container">
            <div class="row  align-items-center">
                <div class="col-lg-6">
                    <div class="business-solution-area-left-thumbnail">
                        <div class="iamge-large">
                            <img src="{{asset('front/assets/images/why-choose/07.webp')}}" alt="choose">
                        </div>
                        <div class="small-mobile">
                            <img src="{{asset('front/assets/images/why-choose/08.webp')}}" alt="choose">
                        </div>
                        <div class="success-rate-area">
                            <div class="inner">
                                <h2 class="counter title"><span class="odometer" data-count="85">00</span>%
                                </h2>
                                <span>Success Rate</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt_md--80 mt_sm--100">
                    <div class="business-solution-area-right-content">
                        <div class="title-style-four left">
                            <span class="pre">Leading Business SOlution</span>
                            <h2 class="title rts-text-anime-style-1">Building Better <br>
                                <span>Driving Success </span>
                            </h2>
                        </div>
                        <p class="disc">
                            Nisi aenean mu suscipit ni phasellus gravida primis massa, rutrum duis semper posuere
                            pharetra magnis porta diam, bibendum molestie d cursus ante mattis habitasse. Egestas
                            sagittis curabitur quam business solution
                        </p>
                        <div class="featuremain-wrapper">
                            <div class="single-feature-wrapper">
                                <img src="{{asset('front/assets/images/why-choose/icons/06.svg')}}" alt="icon">
                                <h5 class="title">Strategic Vision Work</h5>
                                <p class="disc">
                                    Dorem ipsum dolor sit amet, consectetu mod tempor incididunt business phasellus
                                    gravida
                                </p>
                            </div>
                            <div class="single-feature-wrapper">
                                <img src="{{asset('front/assets/images/why-choose/icons/07.svg')}}" alt="icon">
                                <h5 class="title">Ultimate Business Goal</h5>
                                <p class="disc">
                                    Dorem ipsum dolor sit amet, consectetu mod tempor incididunt business phasellus
                                    gravida
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- business solution area end -->
    <!-- rts fun facts area start -->
    <div class="rts-fun-facts-area rts-section-gapBottom">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 col-sm-12" data-animation="fadeInUp" data-delay="0.2" data-duration="1.2">
                    <div class="signle-fun-facts-one">
                        <div class="icon">
                            <img src="{{asset('front/assets/images/fun-facts/01.svg')}}" alt="fun-facts">
                        </div>
                        <h2 class="counter title"><span class="odometer" data-count="1200">00</span>+
                        </h2>
                        <span class="bototm">Business Solution</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12" data-animation="fadeInUp" data-delay="0.4" data-duration="1.2">
                    <div class="signle-fun-facts-one">
                        <div class="icon">
                            <img src="{{asset('front/assets/images/fun-facts/02.svg')}}" alt="fun-facts">
                        </div>
                        <h2 class="counter title"><span class="odometer" data-count="2.2">00</span>k
                        </h2>
                        <span class="bototm">Solution Experts</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12" data-animation="fadeInUp" data-delay="0.6" data-duration="1.2">
                    <div class="signle-fun-facts-one">
                        <div class="icon">
                            <img src="{{asset('front/assets/images/fun-facts/03.svg')}}" alt="fun-facts">
                        </div>
                        <h2 class="counter title"><span class="odometer" data-count="196">00</span>k
                        </h2>
                        <span class="bototm">Worldwide Partner</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts fun facts area end -->
    <!-- rts business case area start -->
    <div class="rts-business-case-area rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-style-four center">
                        <span class="pre">RECENT CASE STUDIES</span>
                        <h2 class="title rts-text-anime-style-1">
                            Our Business <span> Cases</span>
                        </h2>
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
                                            <img src="{{asset('front/assets/images/project/07.webp')}}" alt="project">
                                        </a>
                                        <div class="inner">
                                            <a href="project-details.html">
                                                <h3 class="title">Digital Business Solution</h3>
                                                <span>Business Strategy</span>
                                            </a>
                                        </div>
                                        <div class="eye">
                                            <img src="{{asset('front/assets/images/project/eye.svg')}}" alt="project">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-case-studies-four">
                                        <a href="project-details.html" class="thumbnail">
                                            <img src="{{asset('front/assets/images/project/08.webp')}}" alt="project">
                                        </a>
                                        <div class="inner">
                                            <a href="project-details.html">
                                                <h3 class="title">Smart Business Solution</h3>
                                                <span>Business Smart</span>
                                            </a>
                                        </div>
                                        <div class="eye">
                                            <img src="{{asset('front/assets/images/project/eye.svg')}}" alt="project">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-case-studies-four">
                                        <a href="project-details.html" class="thumbnail">
                                            <img src="{{asset('front/assets/images/project/09.webp')}}" alt="project">
                                        </a>
                                        <div class="inner">
                                            <a href="project-details.html">
                                                <h3 class="title">Business Marketing</h3>
                                                <span>Business Marketing</span>
                                            </a>
                                        </div>
                                        <div class="eye">
                                            <img src="{{asset('front/assets/images/project/eye.svg')}}" alt="project">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-case-studies-four">
                                        <a href="project-details.html" class="thumbnail">
                                            <img src="{{asset('front/assets/images/project/08.webp')}}" alt="project">
                                        </a>
                                        <div class="inner">
                                            <a href="project-details.html">
                                                <h3 class="title">Business Top Goal</h3>
                                                <span>Business Goal</span>
                                            </a>
                                        </div>
                                        <div class="eye">
                                            <img src="{{asset('front/assets/images/project/eye.svg')}}" alt="project">
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
    <!-- rts business case area end -->
   @include('front.partials.faq.faq_2')

    <!-- rts team area start -->
    <div class="rts-team-area-start-four rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-style-four center">
                        <span class="pre">Our Experts</span>
                        <h2 class="title rts-text-anime-style-1">
                            Our Team <span>Mates</span>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row mt--30 g-sm-30 g-5">
                <div class="col-lg-4 col-md-6 col-sm-12" data-animation="fadeInUp" data-delay="0.2" data-duration="1.2">
                    <div class="single-team-area-one-start wide-space">
                        <a href="team-details.html" class="thumbnail">
                            <img src="{{asset('front/assets/images/team/01.webp')}}" alt="team">
                        </a>
                        <div class="inner-content">
                            <div class="inner">
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
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12" data-animation="fadeInUp" data-delay="0.4" data-duration="1.2">
                    <div class="single-team-area-one-start wide-space">
                        <a href="team-details.html" class="thumbnail">
                            <img src="{{asset('front/assets/images/team/02.webp')}}" alt="team">
                        </a>
                        <div class="inner-content">
                            <div class="inner">
                                <div class="text-top">
                                    <a href="team-details.html">
                                        <h5 class="title">John Dion</h5>
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
                <div class="col-lg-4 col-md-6 col-sm-12" data-animation="fadeInUp" data-delay="0.6" data-duration="1.2">
                    <div class="single-team-area-one-start wide-space">
                        <a href="team-details.html" class="thumbnail">
                            <img src="{{asset('front/assets/images/team/03.webp')}}" alt="team">
                        </a>
                        <div class="inner-content">
                            <div class="inner">
                                <div class="text-top">
                                    <a href="team-details.html">
                                        <h5 class="title">Kavin Tina</h5>
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
    </div>
    <!-- rts team area end -->

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
                                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                                        type="button" role="tab" aria-controls="profile" aria-selected="false">Yearly
                                        Plan</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt--100">
                <div class="col-12">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row g-5">
                                <!-- single pricing plane -->
                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="pricing-wrapper-one">
                                        <div class="plane-process">
                                            <span>/month</span>
                                            <h3 class="title">$160</h3>
                                        </div>
                                        <!-- pricing header -->
                                        <div class="pricing-header-start">
                                            <span class="pre-title">Starter Package</span>
                                            <h4 class="title">
                                                Basic Plan
                                            </h4>
                                        </div>
                                        <!-- pricing header End -->
                                        <!-- pricing body start -->
                                        <div class="pricing-body">
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Business Solution</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">24/7 Consultant Service</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Great Customer Support</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing ">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Market Growth Solution</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">24/7 Consultant Service</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <a class="rts-btn btn-primary btn-white" href="contact.html">Buy This</a>
                                        </div>
                                        <!-- pricing body end -->
                                    </div>
                                </div>
                                <!-- single pricing plane -->
                                <!-- single pricing plane -->
                                <div class="col-lg-4 col-md-6 col-sm-12 col-12 mt_sm--80">
                                    <div class="pricing-wrapper-one">
                                        <div class="plane-process">
                                            <span>/month</span>
                                            <h3 class="title">$180</h3>
                                        </div>
                                        <!-- pricing header -->
                                        <div class="pricing-header-start">
                                            <span class="pre-title">Starter Package</span>
                                            <h4 class="title">
                                                Standard Plan
                                            </h4>
                                        </div>
                                        <!-- pricing header End -->
                                        <!-- pricing body start -->
                                        <div class="pricing-body">
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Business Solution</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">24/7 Consultant Service</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Great Customer Support</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing ">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Market Growth Solution</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">24/7 Consultant Service</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <a class="rts-btn btn-primary" href="contact.html">Buy This</a>
                                        </div>
                                        <!-- pricing body end -->
                                    </div>
                                </div>
                                <!-- single pricing plane -->
                                <!-- single pricing plane -->
                                <div class="col-lg-4 col-md-6 col-sm-12 col-12 mt_md--80 mt_sm--80">
                                    <div class="pricing-wrapper-one">
                                        <div class="plane-process">
                                            <span>/month</span>
                                            <h3 class="title">$260</h3>
                                        </div>
                                        <!-- pricing header -->
                                        <div class="pricing-header-start">
                                            <span class="pre-title">Starter Package</span>
                                            <h4 class="title">
                                                Premium Plan
                                            </h4>
                                        </div>
                                        <!-- pricing header End -->
                                        <!-- pricing body start -->
                                        <div class="pricing-body">
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Business Solution</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">24/7 Consultant Service</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Great Customer Support</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing ">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Market Growth Solution</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">24/7 Consultant Service</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <a class="rts-btn btn-primary btn-white" href="contact.html">Buy This</a>
                                        </div>
                                        <!-- pricing body end -->
                                    </div>
                                </div>
                                <!-- single pricing plane -->
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row g-5">
                                <!-- single pricing plane -->
                                <div class="col-lg-4">
                                    <div class="pricing-wrapper-one">
                                        <div class="plane-process">
                                            <span>/year</span>
                                            <h3 class="title">$1800</h3>
                                        </div>
                                        <!-- pricing header -->
                                        <div class="pricing-header-start">
                                            <span class="pre-title">Starter Package</span>
                                            <h4 class="title">
                                                Basic Plan
                                            </h4>
                                        </div>
                                        <!-- pricing header End -->
                                        <!-- pricing body start -->
                                        <div class="pricing-body">
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Business Solution</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">24/7 Consultant Service</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Great Customer Support</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing ">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Market Growth Solution</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">24/7 Consultant Service</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <a class="rts-btn btn-primary" href="contact.html">Buy This</a>
                                        </div>
                                        <!-- pricing body end -->
                                    </div>
                                </div>
                                <!-- single pricing plane -->
                                <!-- single pricing plane -->
                                <div class="col-lg-4">
                                    <div class="pricing-wrapper-one">
                                        <div class="plane-process">
                                            <span>/year</span>
                                            <h3 class="title">$2000</h3>
                                        </div>
                                        <!-- pricing header -->
                                        <div class="pricing-header-start">
                                            <span class="pre-title">Standard Plan</span>
                                            <h4 class="title">
                                                Standard Plan
                                            </h4>
                                        </div>
                                        <!-- pricing header End -->
                                        <!-- pricing body start -->
                                        <div class="pricing-body">
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Business Solution</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">24/7 Consultant Service</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Great Customer Support</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing ">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Market Growth Solution</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">24/7 Consultant Service</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <a class="rts-btn btn-primary" href="contact.html">Buy This</a>
                                        </div>
                                        <!-- pricing body end -->
                                    </div>
                                </div>
                                <!-- single pricing plane -->
                                <!-- single pricing plane -->
                                <div class="col-lg-4">
                                    <div class="pricing-wrapper-one">
                                        <div class="plane-process">
                                            <span>/year</span>
                                            <h3 class="title">$2300</h3>
                                        </div>
                                        <!-- pricing header -->
                                        <div class="pricing-header-start">
                                            <span class="pre-title">Premium Plan</span>
                                            <h4 class="title">
                                                Premium Plan
                                            </h4>
                                        </div>
                                        <!-- pricing header End -->
                                        <!-- pricing body start -->
                                        <div class="pricing-body">
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Business Solution</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">24/7 Consultant Service</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Great Customer Support</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing ">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Market Growth Solution</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">24/7 Consultant Service</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <a class="rts-btn btn-primary" href="contact.html">Buy This</a>
                                        </div>
                                        <!-- pricing body end -->
                                    </div>
                                </div>
                                <!-- single pricing plane -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts pricing area end -->

    <!-- rts appoinment area start -->
    <div class="rts-appoinment-area rts-section-gapBottom">
        <div class="container-full">
            <div class="row g-0">
                <div class="col-lg-5">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52818154.48591499!2d-161.49965884503166!3d36.099232962699986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2sbd!4v1739340038194!5m2!1sen!2sbd"
                        width="600" height="778" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-lg-7">
                    <div class="appoinment-area-four-wrapper bg_image">
                        <div class="inner">
                            <div class="title-style-four left">
                                <span class="pre">Make An Appointment</span>
                                <h2 class="title rts-text-anime-style-1">START PROJECT <br>
                                    <span>WITH US!</span>
                                </h2>
                            </div>
                            <form action="#">
                                <div class="input-group">
                                    <div class="single-input">
                                        <input type="text" placeholder="Your Name">
                                    </div>
                                    <div class="single-input">
                                        <input type="email" placeholder="Your Email">
                                    </div>
                                </div>
                                <div class="single-input">
                                    <input type="text" placeholder="Your Website">
                                </div>
                                <div class="single-input">
                                    <textarea placeholder="Your Comment"></textarea>
                                </div>
                                <button class="rts-btn btn-primary btn-white">Get in Touch</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts appoinment area end -->

   @include('front.partials.blog.blogs_4')

    <!-- rts galllery area start -->
    <div class="rts-gallery-area">
        <div class="container-full">
            <div class="row">
                <div class="col-lg-12">
                    <div class="gallery-area-main-wrapper-4">
                        <div class="single-gallery">
                            <a href="{{asset('front/assets/images/gallery/01.webp')}}" class="thumbnail gallery-image">
                                <img src="{{asset('front/assets/images/gallery/01.webp')}}" alt="gallery">
                            </a>
                            <div class="instagram">
                                <img src="{{asset('front/assets/images/gallery/instagram.svg')}}" alt="instagram.svg">
                            </div>
                        </div>
                        <div class="single-gallery">
                            <a href="{{asset('front/assets/images/gallery/03.webp')}}" class="thumbnail gallery-image">
                                <img src="{{asset('front/assets/images/gallery/03.webp')}}" alt="gallery">
                            </a>
                            <div class="instagram">
                                <img src="{{asset('front/assets/images/gallery/instagram.svg')}}" alt="instagram.svg">
                            </div>
                        </div>
                        <div class="single-gallery">
                            <a href="{{asset('front/assets/images/gallery/04.webp')}}" class="thumbnail gallery-image">
                                <img src="{{asset('front/assets/images/gallery/04.webp')}}" alt="gallery">
                            </a>
                            <div class="instagram">
                                <img src="{{asset('front/assets/images/gallery/instagram.svg')}}" alt="instagram.svg">
                            </div>
                        </div>
                        <div class="single-gallery">
                            <a href="{{asset('front/assets/images/gallery/05.webp')}}" class="thumbnail gallery-image">
                                <img src="{{asset('front/assets/images/gallery/05.webp')}}" alt="gallery">
                            </a>
                            <div class="instagram">
                                <img src="{{asset('front/assets/images/gallery/instagram.svg')}}" alt="instagram.svg">
                            </div>
                        </div>
                        <div class="single-gallery">
                            <a href="{{asset('front/assets/images/gallery/02.webp')}}" class="thumbnail gallery-image">
                                <img src="{{asset('front/assets/images/gallery/02.webp')}}" alt="gallery">
                            </a>
                            <div class="instagram">
                                <img src="{{asset('front/assets/images/gallery/instagram.svg')}}" alt="instagram.svg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts galllery area end -->



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
        <div id="close" class="search-close-icon"><i class="far fa-times"></i>
        </div>
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


@endsection