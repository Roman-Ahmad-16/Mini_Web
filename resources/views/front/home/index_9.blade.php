@extends('front.home.layouts.master')
@section('title', 'Home')

@section('content')


        <!-- rts banner area nine -->
        <div class="rts-banner-area-9 rts-section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="insurance-banner-inner">
                            <span class="pre rts-text-anime-style-1">Start Growing Your Business Today</span>
                            <h1 class="title rts-text-anime-style-1">Your Best Trusted <br> Insurance Solutions</h1>
                            <p class="disc">
                                Porttitor ornare fermentum aliquam pharetra facilisis gravida risus suscipit Dui feugiat
                                fusce conubia ridiculus tristique parturient
                            </p>
                            <a href="service.html" class="rts-btn btn-primary">Discover More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="image-right-absolute">
                <img class="" src="{{ asset('front/assets/images/banner/12.webp') }}" alt="banner">
            </div>
            <div class="circle-text-main">
                <div class="circle">
                    <div class="logo">
                        <img src="{{ asset('front/assets/images/banner/icon/video') }}.svg" alt="">
                    </div>
                    <div class="text">
                        <p>
                            Watch Now * Watch Now * Watch Now *
                        </p>
                    </div>
                </div>
                <div class="vedio-icone">
                    <a class="video-play-button play-video popup-video" href="https://www.youtube.com/watch?v=vZE0j_WCRvI">
                        <span></span>
                    </a>
                    <div class="video-overlay">
                        <a href="#section1" class="video-overlay-close">×</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- rts banner area nine end -->



        <!-- rts service area start -->
        <div class="rts-service-area rts-section-gap">
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
                                Home Insurance
                            </h3>
                            <a href="service-details.html" class="icon">
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6" data-animation="fadeInUp" data-delay="0.2" data-duration="1.2">
                        <div class="single-service-nine two bg_image">
                            <h3 class="title">
                                Personal Insurance
                            </h3>
                            <a href="service-details.html" class="icon">
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6" data-animation="fadeInUp" data-delay="0.4" data-duration="1.2">
                        <div class="single-service-nine three bg_image">
                            <h3 class="title">
                                Financial Insurance
                            </h3>
                            <a href="service-details.html" class="icon">
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6" data-animation="fadeInUp" data-delay="0.6" data-duration="1.2">
                        <div class="single-service-nine four bg_image">
                            <h3 class="title">
                                Health Insurance
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
        <div class="rts-brand-area rts-section-gapBottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="brand-list-area-wrapper">
                            <div class="left-paragraph">
                                <p>Our Trusted Clients</p>
                            </div>
                            <div class="right-brand-area-wrapper">
                                <div class="single-image">
                                    <img src="{{ asset('front/assets/images/brand/01.webp') }}" alt="brand">
                                </div>
                                <div class="single-image">
                                    <img src="{{ asset('front/assets/images/brand/02.webp') }}" alt="brand">
                                </div>
                                <div class="single-image">
                                    <img src="{{ asset('front/assets/images/brand/03.webp') }}" alt="brand">
                                </div>
                                <div class="single-image">
                                    <img src="{{ asset('front/assets/images/brand/04.webp') }}" alt="brand">
                                </div>
                                <div class="single-image">
                                    <img src="{{ asset('front/assets/images/brand/05.webp') }}" alt="brand">
                                </div>
                                <div class="single-image">
                                    <img src="{{ asset('front/assets/images/brand/06.webp') }}" alt="brand">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- rts brand area end -->



        <!-- rts service bottom area start -->
        <div class="rts-service-bottom-area rts-section-gapBottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="service-bottom-cta">
                            <h5 class="title">Do You Need Any Kind Of Work?</h5>
                            <div class="right">
                                <p>Call Us Anytime! <a href="#">+(125) 2153-2158</a></p>
                            </div>
                            <div class="mid-image">
                                <img src="{{ asset('front/assets/images/service/01.png') }}" alt="service_image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- rts service bottom area end -->



        @include('front.partials.why_choose_us.why_us_4')


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
                        <div class="swiper mySwiperh1_team pt--10 pb--80" dir="ltr">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="team-single-one-start">
                                        <div class="team-image-area">
                                            <a href="team-details.html">
                                                <img src="{{ asset('front/assets/images/team/12.webp') }}" alt="Business_Team_single">
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
                                                <img src="{{ asset('front/assets/images/team/13.webp') }}" alt="Business_Team_single">
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
                                                <img src="{{ asset('front/assets/images/team/14.webp') }}" alt="Business_Team_single">
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
                                                <img src="{{ asset('front/assets/images/team/15.webp') }}" alt="Business_Team_single">
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
                                                <img src="{{ asset('front/assets/images/team/07.webp') }}" alt="Business_Team_single">
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


        <!-- rts fun facts area start -->
        <div class="rts-fun-facts-area-8 rts-section-gapBottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-area-between-9">
                            <div class="title-style-five mb--40">
                                <span class="pre">Get In Touch</span>
                                <h2 class="title">Reach Out for Personalized <br>
                                    Insurance Solutions</h2>
                            </div>
                            <p class="disc">
                                we believe in the power of collaboration and personalized solutions. By understanding our
                                clients' unique needs and goals, we tailor our approach to deliver strategic insights,
                                creative solutions.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row g-0 align-items-center">
                    <div class="col-lg-4">
                        <div class="easy-contact-left-funfacts-8">
                            <div class="signle-contact">
                                <div class="icon">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <div class="main-contact">
                                    <span>Call Us 24/7</span>
                                    <a href="#">(+256) 2145.2156</a>
                                </div>
                            </div>
                            <div class="signle-contact">
                                <div class="icon">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                                <div class="main-contact">
                                    <span>Work with us</span>
                                    <a href="#">info@Invena.com</a>
                                </div>
                            </div>
                            <div class="signle-contact">
                                <div class="icon">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div class="main-contact">
                                    <span>Our Location</span>
                                    <a href="#">125 Town, United State</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="modern-funfacts-area-wrapper">
                            <div class="thumbnail">
                                <img src="{{ asset('front/assets/images/fun-facts/01') }}.webp" alt="funfacts">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="counter-modern-lfun-facts-wrapper">
                            <div class="single-counter-wrapper-8">
                                <h2 class="counter title"><span class="odometer" data-count="567">00</span>+
                                </h2>
                                <p>Insurance Policies</p>
                            </div>
                            <div class="single-counter-wrapper-8">
                                <h2 class="counter title"><span class="odometer" data-count="28">00</span>+
                                </h2>
                                <p>Awards WON</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- rts fun facts area end -->



       @include('front.partials.testimonials.testimonial_7')


        <!-- rts appoinment area start -->
        <div class="rts-appoinment-area-9 bg_image rts-section-gap">
            <div class="container">
                <div class="row g-0">
                    <div class="col-lg-6">
                        <div class="thumbnail-appoinment-9">
                            <img src="{{ asset('front/assets/images/appoinment/05.webp') }}" alt="appoinment">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <form action="#" class="appoinment-area-9">
                            <div class="inner">
                                <div class="title-style-five mb--40">
                                    <span class="pre">Get In Touch</span>
                                    <h2 class="title">Let’s Discuss Of Your <br> Insurance Needs</h2>
                                </div>
                                <div class="half-input-wrapper">
                                    <div class="single-input">
                                        <input type="text" placeholder="Your Name">
                                    </div>
                                    <div class="single-input">
                                        <input type="email" placeholder="Email Address">
                                    </div>
                                </div>
                                <div class="half-input-wrapper">
                                    <div class="single-input">
                                        <input type="text" placeholder="Your Name">
                                    </div>
                                    <div class="single-input">
                                        <input type="email" placeholder="Contact Number">
                                    </div>
                                </div>
                                <textarea placeholder="Type Your Message"></textarea>
                                <a href="#" class="rts-btn btn-primary">Submit Message</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- rts appoinment area end -->

@include('front.partials.blog.blogs_4')
@include('front.partials.cta.cta_2')
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

        <script>
            const text = document.querySelector(".text");
            text.innerHTML = text.innerText
                .split("")
                .map(
                    (char, i) => `<span style="transform:rotate(${i * 10.3}deg)">${char}</span>`
                )
                .join("");
        </script>
@endsection