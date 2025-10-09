@extends('front.home.layouts.master')
@section('content')

    <!-- rts banner area start -->
    <div class="rts-banner-area-start rts-banner-business-coach bg_image">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-busines-coatch-wrapper">
                        <div class="pre-title">
                            <img src="{{ asset('front/assets/images/banner/icon/04.svg') }}" alt="banner">
                            <span>I am A Coach</span>
                        </div>
                        <h1 class="title rts-text-anime-style-1">Your Partner in
                            Growth, Success,
                            and Leadership</h1>
                        <a href="#" class="rts-btn btn-primary btn-white">Get Your Free Guide Now</a>

                        <div class="button-image-lead">
                            <img src="{{ asset('front/assets/images/banner/small-img/01.png') }}" alt="small">
                            <span>2k industry leaders.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts banner area end -->

    <!-- rts service area start -->
    <div class="rts-service-area-start rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pr--30 pr_sm--10">
                    <section class="main-wrapper-sticky">
                        <div class="sticky-statement narrow">
                            <div class="left-side">
                                <div class="icon">
                                    <img src="{{ asset('front/assets/images/service/01.svg') }}" alt="service">
                                </div>
                                <h5 class="title">Business Solution</h5>
                            </div>
                            <div class="right">
                                <a href="service-details.html" class="arrow">
                                    <i class="fa-regular fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="sticky-statement narrow">
                            <div class="left-side">
                                <div class="icon">
                                    <img src="{{ asset('front/assets/images/service/02.svg') }}" alt="service">
                                </div>
                                <h5 class="title">Creative Ideas</h5>
                            </div>
                            <div class="right">
                                <a href="service-details.html" class="arrow">
                                    <i class="fa-regular fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="sticky-statement narrow">
                            <div class="left-side">
                                <div class="icon">
                                    <img src="{{ asset('front/assets/images/service/03.svg') }}" alt="service">
                                </div>
                                <h5 class="title">Market Research</h5>
                            </div>
                            <div class="right">
                                <a href="service-details.html" class="arrow">
                                    <i class="fa-regular fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="sticky-statement narrow">
                            <div class="left-side">
                                <div class="icon">
                                    <img src="{{ asset('front/assets/images/service/01.svg') }}" alt="service">
                                </div>
                                <h5 class="title">Technology Solution</h5>
                            </div>
                            <div class="right">
                                <a href="service-details.html" class="arrow">
                                    <i class="fa-regular fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-lg-6">
                    <div class="title-style-one left mb--0 position-sticky top--120 mt_sm--40">
                        <span class="pre">Our Services</span>
                        <h2 class="title rts-text-anime-style-1 uppercase">Effective Services
                        </h2>
                        <p class="disc">
                            we believe in the power of collaboration and personalized solutions. By understanding our
                            clients' unique needs and goals, we tailor our approach to deliver strategic insights,
                            creative solutions.
                        </p>
                        <a href="service.html" class="rts-btn btn-primary">View All Service</a>
                    </div>
                    <div class="service-arrow-bottom-main">
                        <img src="{{ asset('front/assets/images/banner/shape/08.png') }}" alt="service">
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
                            <span class="pre"><img src="{{ asset('front/assets/images/banner/icon/star.svg') }}" alt="">
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
    <!-- rts team area start -->
    <div class="rts-team-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="title-style-five center mb--40">
                    <span class="pre">Expert Members</span>
                    <h2 class="title rts-text-anime-style-1">Professionals Team</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="swiper mySwiperh1_team pt--10 pb--80">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="team-single-one-start">
                                    <div class="team-image-area">
                                        <a href="team-details.html">
                                            <img src="{{ asset('front/assets/images/team/12.webp') }}"
                                                alt="Business_Team_single">
                                            <div class="team-social">
                                                <div class="main">
                                                    <i class="fal fa-plus"></i>
                                                </div>
                                                <div class="team-social-one">
                                                    <i class="fab fa-youtube"></i>
                                                    <i class="fab fa-twitter"></i>
                                                    <i class="fab fa-instagram"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="single-details">
                                        <a href="team-details.html">
                                            <h5 class="title">Archer Graham</h5>
                                        </a>
                                        <p>Founder</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team-single-one-start">
                                    <div class="team-image-area">
                                        <a href="team-details.html">
                                            <img src="{{ asset('front/assets/images/team/13.webp') }}"
                                                alt="Business_Team_single">
                                            <div class="team-social">
                                                <div class="main">
                                                    <i class="fal fa-plus"></i>
                                                </div>
                                                <div class="team-social-one">
                                                    <i class="fab fa-youtube"></i>
                                                    <i class="fab fa-twitter"></i>
                                                    <i class="fab fa-instagram"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="single-details">
                                        <a href="team-details.html">
                                            <h5 class="title">Amelia Clover</h5>
                                        </a>
                                        <p>Co-Founder</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team-single-one-start">
                                    <div class="team-image-area">
                                        <a href="team-details.html">
                                            <img src="{{ asset('front/assets/images/team/14.webp') }}"
                                                alt="Business_Team_single">
                                            <div class="team-social">
                                                <div class="main">
                                                    <i class="fal fa-plus"></i>
                                                </div>
                                                <div class="team-social-one">
                                                    <i class="fab fa-youtube"></i>
                                                    <i class="fab fa-twitter"></i>
                                                    <i class="fab fa-instagram"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="single-details">
                                        <a href="team-details.html">
                                            <h5 class="title">Beckett Hayden</h5>
                                        </a>
                                        <p>Deputy Manager</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team-single-one-start">
                                    <div class="team-image-area">
                                        <a href="team-details.html">
                                            <img src="{{ asset('front/assets/images/team/15.webp') }}"
                                                alt="Business_Team_single">
                                            <div class="team-social">
                                                <div class="main">
                                                    <i class="fal fa-plus"></i>
                                                </div>
                                                <div class="team-social-one">
                                                    <i class="fab fa-youtube"></i>
                                                    <i class="fab fa-twitter"></i>
                                                    <i class="fab fa-instagram"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="single-details">
                                        <a href="team-details.html">
                                            <h5 class="title">Julian Wyat</h5>
                                        </a>
                                        <p>Finance Manager</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team-single-one-start">
                                    <div class="team-image-area">
                                        <a href="team-details.html">
                                            <img src="{{ asset('front/assets/images/team/07.webp') }}"
                                                alt="Business_Team_single">
                                            <div class="team-social">
                                                <div class="main">
                                                    <i class="fal fa-plus"></i>
                                                </div>
                                                <div class="team-social-one">
                                                    <i class="fab fa-youtube"></i>
                                                    <i class="fab fa-twitter"></i>
                                                    <i class="fab fa-instagram"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="single-details">
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

    <!-- rts about area start -->
    <div class="rts-about-area-two rts-section-gapBottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mt_sm--80 mt_md--80">
                    <div class="about-inner-content-two">
                        <div class="title-style-two left">
                            <span class="pre">More About Us</span>
                            <h2 class="title rts-text-anime-style-1">Meet the Experts Behind <br> Next Level of Success
                            </h2>
                        </div>
                        <div class="about-between-wrapper">
                            <p class="disc">
                                Porttitor ornare fermentum aliquam pharetra
                                ut facilisis gravida risus suscipit. dui feugiat
                                fusce conubia ridiculus tristique parturient
                                natoque vulputate risu.
                            </p>
                            <div class="check-wrapper-area">
                                <div class="single-check">
                                    <i class="fa-solid fa-circle-check"></i>
                                    <p>24/7 Call Services Avilable</p>
                                </div>
                                <div class="single-check">
                                    <i class="fa-solid fa-circle-check"></i>
                                    <p>Great Skilled Consultant</p>
                                </div>
                                <div class="single-check">
                                    <i class="fa-solid fa-circle-check"></i>
                                    <p>Expert Team Members</p>
                                </div>
                            </div>
                        </div>
                        <div class="call-and-sign-area two">
                            <div class="call-area">
                                <div class="icon">
                                    <i class="fa-sharp fa-regular fa-phone-volume"></i>
                                </div>
                                <div class="information">
                                    <span>Call us anytime</span>
                                    <a href="#">
                                        <h6 class="title">+256 56778.5678</h6>
                                    </a>
                                </div>
                            </div>
                            <div class="sign-area">
                                <img loading="lazy" src="{{ asset('front/assets/images/about/sign.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="left-thumbnail-about-area-two">
                        <img loading="lazy" src="{{ asset('front/assets/images/about/17.webp') }}" alt="about">
                        <div class="small-image">
                            <img loading="lazy" src="{{ asset('front/assets/images/about/05.webp') }}" alt="small">
                        </div>
                        <div class="counter-about-area">
                            <h2 class="counter title"><span class="odometer" data-count="25">00</span>+
                            </h2>
                            <span>Year of experience</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-area">
            <img loading="lazy" src="{{ asset('front/assets/images/about/shape/01.svg') }}" alt="shape" class="one">
            <img loading="lazy" src="{{ asset('front/assets/images/about/shape/02.svg') }}" alt="shape" class="two">
        </div>
    </div>
    <!-- rts about area end -->
    <!-- rts service area start -->
    <div class="rts-service-area rts-section-gap" id="service">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-between-hr">
                        <div class="title-area-hr-left">
                            <span class="pre">
                                Our Service
                            </span>
                            <h2 class="title rts-text-anime-style-1">
                                Comprehensive HR Solutions <br> for Every Stage of Growth
                            </h2>
                        </div>
                        <a href="#" class="rts-btn btn-primary btn-border">View All Service</a>
                    </div>
                </div>
            </div>

            <div class="row g-5 mt--40">
                <div class="col-xl-4 col-lg-6 col-sm-12" data-animation="fadeInUp" data-delay="0.1" data-duration="1.2">
                    <div class="single-service-hr">
                        <a href="#" class="thumbnail">
                            <img src="{{ asset('front/assets/images/service/14.webp') }}" alt="service">
                        </a>
                        <div class="inner">
                            <div class="icon-area">
                                <img src="{{ asset('front/assets/images/service/icon/03.svg') }}" alt="">
                            </div>
                            <a href="#">
                                <h3 class="title">Team Leadership</h3>
                            </a>
                            <p class="disc">
                                Purus dui eget sollicitudin curae leo proin platea cras, morbi torquent massa
                            </p>
                            <a href="#" class="rts-btn btn-primary btn-white">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-sm-12" data-animation="fadeInUp" data-delay="0.4" data-duration="1.2">
                    <div class="single-service-hr">
                        <a href="#" class="thumbnail">
                            <img src="{{ asset('front/assets/images/service/15.webp') }}" alt="service">
                        </a>
                        <div class="inner">
                            <div class="icon-area">
                                <img src="{{ asset('front/assets/images/service/icon/04.svg') }}" alt="">
                            </div>
                            <a href="#">
                                <h3 class="title">People Cohesion</h3>
                            </a>
                            <p class="disc">
                                Purus dui eget sollicitudin curae leo proin platea cras, morbi torquent massa
                            </p>
                            <a href="#" class="rts-btn btn-primary btn-white">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-sm-12" data-animation="fadeInUp" data-delay="0.7" data-duration="1.2">
                    <div class="single-service-hr">
                        <a href="#" class="thumbnail">
                            <img src="{{ asset('front/assets/images/service/16.webp') }}" alt="service">
                        </a>
                        <div class="inner">
                            <div class="icon-area">
                                <img src="{{ asset('front/assets/images/service/icon/05.svg') }}" alt="">
                            </div>
                            <a href="#">
                                <h3 class="title">Team Build Up</h3>
                            </a>
                            <p class="disc">
                                Purus dui eget sollicitudin curae leo proin platea cras, morbi torquent massa
                            </p>
                            <a href="#" class="rts-btn btn-primary btn-white">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts service area end -->

    <!-- rts team area start -->
    <div class="rts-team-area rts-section-gapBottom">
        <div class="container pb--70">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-style-one center">
                        <span class="pre">Our Experts</span>
                        <h2 class="title rts-text-anime-style-1">Our Team Mates
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row mt--30 g-5 g-sm-30 mt_sm--0">
                <div class="col-lg-4 col-md-6 col-sm-12 mt_sm--50" data-animation="fadeInUp" data-delay="0.2"
                    data-duration="1.2">
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
                <div class="col-lg-4 col-md-6 col-sm-12 mt_sm--120" data-animation="fadeInUp" data-delay="0.4"
                    data-duration="1.2">
                    <div class="single-team-area-one-start">
                        <a href="team-details.html" class="thumbnail">
                            <img src="{{ asset('front/assets/images/team/02.webp') }}" alt="team">
                        </a>
                        <div class="inner-content">
                            <div class="text-top">
                                <a href="team-details.html">
                                    <h5 class="title">Martin Chopra</h5>
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
                <div class="col-lg-4 col-md-6 col-sm-12 mt_sm--120 mt_md--80" data-animation="fadeInUp" data-delay="0.6"
                    data-duration="1.2">
                    <div class="single-team-area-one-start">
                        <a href="team-details.html" class="thumbnail">
                            <img src="{{ asset('front/assets/images/team/03.webp') }}" alt="team">
                        </a>
                        <div class="inner-content">
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
        </div>
    </div>
    <!-- rts team area ends -->
    <!-- why choose us area start -->
    <div class="why-choose-us-area rts-section-gapBottom rts_jump_animation-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-style-four center">
                        <span class="pre">Easy Business Solution</span>
                        <h2 class="title rts-text-anime-style-1">What We <span>Do</span></h2>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--10">
                <div class="col-lg-4 col-md-6 col-sm-12 rts-jump__item">
                    <div class="single-why-choose-four">
                        <a href="#" class="thumbnail">
                            <img src="{{ asset('front/assets/images/why-choose/04.webp') }}" alt="choose">
                        </a>
                        <div class="inner-content">
                            <div class="icon">
                                <img src="{{ asset('front/assets/images/why-choose/icons/01.svg') }}" alt="why-choose">
                            </div>
                            <a href="#">
                                <h5 class="title">Business Consultancy</h5>
                            </a>
                            <p class="disc">
                                Creativity, and a commitment to quality to deliver solutions meet your unique needs.
                            </p>
                            <a href="#" class="read-more">Read More <i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 rts-jump__item">
                    <div class="single-why-choose-four">
                        <a href="#" class="thumbnail">
                            <img src="{{ asset('front/assets/images/why-choose/05.webp') }}" alt="choose">
                        </a>
                        <div class="inner-content">
                            <div class="icon">
                                <img src="{{ asset('front/assets/images/why-choose/icons/02.svg') }}" alt="why-choose">
                            </div>
                            <a href="#">
                                <h5 class="title">Target Marketing</h5>
                            </a>
                            <p class="disc">
                                Creativity, and a commitment to quality to deliver solutions meet your unique needs.
                            </p>
                            <a href="#" class="read-more">Read More <i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 rts-jump__item">
                    <div class="single-why-choose-four">
                        <a href="#" class="thumbnail">
                            <img src="{{ asset('front/assets/images/why-choose/06.webp') }}" alt="choose">
                        </a>
                        <div class="inner-content">
                            <div class="icon">
                                <img src="{{ asset('front/assets/images/why-choose/icons/03.svg') }}" alt="why-choose">
                            </div>
                            <a href="#">
                                <h5 class="title">Investment Analysis</h5>
                            </a>
                            <p class="disc">
                                Creativity, and a commitment to quality to deliver solutions meet your unique needs.
                            </p>
                            <a href="#" class="read-more">Read More <i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- why choose us area end -->

    <!-- rts about us area start -->
    <div class="rts-about-area-6 rts-section-gap">
        <div class="container pb--40">
            <div class="row g-5 align-items-center">
                <div class="col-lg-7">
                    <div class="about-6-thumbnail-left-wrapper">
                        <div class="single-thumbnail">
                            <img src="{{ asset('front/assets/images/about/12.webp') }}" alt="about">
                        </div>
                        <div class="single-thumbnail mt--40">
                            <img src="{{ asset('front/assets/images/about/13.webp') }}" alt="about">
                        </div>
                        <div class="progress-circle-main-wrapper">
                            <div class="progress-area-wrapper images-r">
                                <div class="single-progress-circle">
                                    <svg class="radial-progress" data-countervalue="80" viewBox="0 0 80 80">
                                        <circle class="bar-static" cx="40" cy="40" r="35"></circle>
                                        <circle class="bar--animated" cx="40" cy="40" r="35"
                                            style="stroke-dashoffset: 217.8;"></circle>
                                        <text class="countervalue start" x="50%" y="55%"
                                            transform="matrix(0, 1, -1, 0, 80, 0)">80</text>
                                    </svg>
                                </div>
                                <h5 class="title">Business Progress</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 pl--30 mt_md--100 mt_sm--100">
                    <div class="about-6-inner-content-content">
                        <div class="title-style-one left mb--30">
                            <span class="pre">About Business</span>
                            <h2 class="title rts-text-anime-style-1">Smart and effective <br>
                                business agency.

                            </h2>
                        </div>
                        <p class="disc">
                            we believe in the power of collaboration and personalized solutions. By understanding
                            our clients' unique needs and goals, we tailor our approach to deliver strategic
                            insights, creative solutions.
                        </p>
                        <div class="call-and-sign-area">
                            <div class="call-area">
                                <div class="icon">
                                    <i class="fa-sharp fa-regular fa-phone-volume"></i>
                                </div>
                                <div class="information">
                                    <span>Call us anytime</span>
                                    <a href="#">
                                        <h6 class="title">+256 56778.5678</h6>
                                    </a>
                                </div>
                            </div>
                            <div class="sign-area">
                                <img src="{{ asset('front/assets/images/about/sign.svg') }}" alt="">
                            </div>
                        </div>
                        <a href="about.html" class="rts-btn btn-primary">About Us</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts about us area end -->
    @include('front.partials.blogs')

    @include('front.partials.progress')

    @include('front.partials.service3')

    @include('front.partials.reviews')

    @include('front.partials.clients')

    @include('front.partials.gallery')

    @include('front.partials.counter')

    @include('front.partials.team')

    @include('front.partials.why_us_2')

@endsection