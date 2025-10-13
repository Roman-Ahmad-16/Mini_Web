@extends('front.home.layouts.master')
@section('title', 'Home')

@section('content')
<body>

    <!-- rts banner areas start -->
    <div class="rts-banner-area-eight banner-bg_eight bg_image">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-inner-content-eight">
                        <div class="pre-title-area">
                            <img src="{{ asset('front/assets/images/banner/icon/02.svg') }}" alt="banner">
                            <p>Business Success Starts Here</p>
                        </div>
                        <h1 class="title rts-text-anime-style-1"><span>Empowering </span>Leaders Performance</h1>
                        <p class="disc">
                            These names convey professionalism, expertise, and a focus on delivering effective
                            management solutions to businesses.
                        </p>
                        <a href="service.html" class="rts-btn btn-primary">View Services</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- counter up area start -->
        <div class="rts-counter-up-area-eight">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="counter-up-area-eight-banner-bottom">
                            <div class="single-counter-area-eight">
                                <h2 class="counter title"><span class="odometer" data-count="28">00</span>K+
                                </h2>
                                <span class="business">Business Revenue</span>
                                <div class="star-icon">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            <div class="single-counter-area-eight">
                                <h2 class="counter title"><span class="odometer" data-count="2">00</span>K+
                                </h2>
                                <span class="business">Corp Employed <br> <br>
                                    Worldwide</span>
                            </div>
                            <div class="absolute-image">
                                <img src="{{ asset('front/assets/images/banner/11.webp') }}" alt="bottom">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- counter up area end -->
        <div class="banner-shape-area">
            <div class="shape-area">
                <img src="{{ asset('front/assets/images/banner/shape/shape.svg') }}" alt="shape">
            </div>
        </div>
    </div>
    <!-- rts banner areas end -->

    <!-- rts service area start -->
    <div class="rts-service-area-start rts-sectiong-gap">
        <div class="container padding-extend-300">
            <div class="row">
                <div class="col-lg-6 pr--30 pr_sm--10">
                    <section class="main-wrapper-sticky">
                        <div class="sticky-statement narrow">
                            <div class="left-side">
                                <div class="icon">
                                    <img src="{{ asset('front/assets/images/service/01.svg"') }} alt="service">
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
                                    <img src="{{ asset('front/assets/images/service/02.svg"') }} alt="service">
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
                                    <img src="{{ asset('front/assets/images/service/03.svg"') }} alt="service">
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
                                    <img src="{{ asset('front/assets/images/service/01.svg"') }} alt="service">
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
            <div class="row rts-section-gap">
                <div class="col-lg-12">
                    <div class="service-bottom-cta">
                        <h5 class="title">Do You Need Any Kind Of Work?</h5>
                        <div class="right">
                            <p>Call Us Anytime! <a href="#">+(125) 2153-2158</a></p>
                        </div>
                        <div class="mid-image">
                            <img src="{{ asset('front/assets/images/service/01.png"') }} alt="service_image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts service area end -->

 @include('front.partials.about.about_3')

    <div class="our-experties-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-style-one eight center mb--30">
                        <span class="pre">What we are expert</span>
                        <h2 class="title rts-text-anime-style-1 uppercase">Expert
                            <span>business</span> <br>
                            management company
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row mt--40 g-5">
                <div class="col-lg-4">
                    <div class="progress-circle-main-wrapper">
                        <div class="progress-area-wrapper style-8">
                            <div class="single-progress-circle">
                                <svg class="radial-progress" data-countervalue="80" viewBox="0 0 80 80">
                                    <circle class="bar-static" cx="40" cy="40" r="35"></circle>
                                    <circle class="bar--animated" cx="40" cy="40" r="35"
                                        style="stroke-dashoffset: 217.8;"></circle>
                                    <text class="countervalue start" x="50%" y="55%"
                                        transform="matrix(0, 1, -1, 0, 80, 0)">80</text>
                                </svg>
                            </div>
                            <div class="inner-content">
                                <h5 class="title">Strategic Planning</h5>
                                <p class="disc">
                                    consecte tutempor incididunt
                                    business phasellus gravida
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="progress-circle-main-wrapper">
                        <div class="progress-area-wrapper style-8">
                            <div class="single-progress-circle">
                                <svg class="radial-progress" data-countervalue="80" viewBox="0 0 80 80">
                                    <circle class="bar-static" cx="40" cy="40" r="35"></circle>
                                    <circle class="bar--animated" cx="40" cy="40" r="35"
                                        style="stroke-dashoffset: 217.8;"></circle>
                                    <text class="countervalue start" x="50%" y="55%"
                                        transform="matrix(0, 1, -1, 0, 80, 0)">80</text>
                                </svg>
                            </div>
                            <div class="inner-content">
                                <h5 class="title">Business Growth Strategies</h5>
                                <p class="disc">
                                    consecte tutempor incididunt
                                    business phasellus gravida
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="progress-circle-main-wrapper">
                        <div class="progress-area-wrapper style-8">
                            <div class="single-progress-circle">
                                <svg class="radial-progress" data-countervalue="80" viewBox="0 0 80 80">
                                    <circle class="bar-static" cx="40" cy="40" r="35"></circle>
                                    <circle class="bar--animated" cx="40" cy="40" r="35"
                                        style="stroke-dashoffset: 217.8;"></circle>
                                    <text class="countervalue start" x="50%" y="55%"
                                        transform="matrix(0, 1, -1, 0, 80, 0)">80</text>
                                </svg>
                            </div>
                            <div class="inner-content">
                                <h5 class="title">Active Work Strategies</h5>
                                <p class="disc">
                                    consecte tutempor incididunt
                                    business phasellus gravida
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- rts business case area start -->
    <div class="rts-business-case-area rts-section-gapBottom" dir="ltr">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tite-between-area-8 position-relative">
                        <div class="title-style-one eight left mb--30">
                            <span class="pre">RECENT CASE STUDIES </span>
                            <h2 class="title rts-text-anime-style-1 uppercase">Our Business <span>Cases</span>
                            </h2>
                        </div>
                        <div class="next-prev-area">
                            <div class="swiper-button-next"><i class="fa-sharp fa-regular fa-arrow-right"></i></div>
                            <div class="swiper-button-prev"><i class="fa-sharp fa-regular fa-arrow-left"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt--40">
            <div class="row">
                <div class="col-lg-12">
                    <div class="flowating-right">

                        <div class="case-studies-wrapper-main-5">
                            <div class="swiper mySwiper-case-studies-5 pb--0">
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
                                                    <h3 class="title">Marketing Business Solution</h3>
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
                                                    <h3 class="title">Best Business Solution</h3>
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
                                                    <h3 class="title">Website Business Solution</h3>
                                                    <span>Business Strategy</span>
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
    </div>
    <!-- rts business case area end -->

    @include('front.partials.why_choose_us.why_us_2')
     @include('front.partials.testimonials.testimonial_7')

   @include('front.partials.blog.blogs_5')

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

    <!-- rts ubscribe area start -->
    <div class="rts-subscribe-area-8 rts-section-gap bg_image">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-style-one center">
                        <span class="pre">Subscribe Newsletter</span>
                        <h2 class="title">Your Connection to All Things <br> New <span>Subscribe
                                Now</span>
                        </h2>
                        <form action="#">
                            <input type="text" placeholder="Enter Email Address">
                            <button class="rts-btn btn-primary btn-white">Subscribe Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts ubscribe area end -->

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