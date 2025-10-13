@extends('front.home.layouts.master')
@section('title', 'Home')

@section('content')

    <body class="color-yellow-demo">

        <div class="rts-banner-accountent-two rts-section-gap bg_image">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="banner-accountent-content">
                            <span class="pre-title">
                                <img src="{{ asset('front/assets/images/banner/icon/03') }}.svg" alt="">
                                Accounting & Tax Services
                            </span>
                            <h1 class="title">Charlotte Emma</h1>
                            <p class="disc">
                                Porttitor ornare fertum aliquam pharetra facilisis gravida risus suscipit Dui feugiat fusce
                                conubia ridiculus tristique parturient
                            </p>
                            <div class="button-wrapper">
                                <a href="#" class="rts-btn btn-primary">Get A Free Quote</a>
                                <a href="#" class="rts-btn btn-primary btn-border">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


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


        @include('front.partials.why_choose_us.why_us_3')


        @include('front.partials.testimonials.testimonial_7')


        <!-- appoinment contact area start -->
        <div class="contactform-accountentarea rts-section-gap bg_image">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="appoinment-area-accountent">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="appoinment-left">
                                        <div class="easy-contact-left-funfacts-8 mr--0">

                                            <span class="pre">Get In Touch</span>
                                            <h3 class="title">Get a Dedicated <br> Account Manager</h3>
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
                                                    <a href="#">XYZ Hilton Street, 125 Town <br>
                                                        United State</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <form action="#" class="form-area-right">
                                        <div class="input-wrapper">
                                            <div class="single-input">
                                                <label for="name">Your Name</label>
                                                <input id="name" type="text" value="Jonathon Doe">
                                            </div>
                                            <div class="single-input">
                                                <label for="phone">Your Phone</label>
                                                <input id="phone" type="text" value="+657890887567">
                                            </div>
                                        </div>
                                        <div class="input-wrapper">
                                            <div class="single-input">
                                                <label for="email">Email Address</label>
                                                <input id="email" type="email" placeholder="Email Address" required>
                                            </div>
                                            <div class="single-input">
                                                <label for="">Service interested in</label>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Open this select menu</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="single-input">
                                            <label for="subject">subject Address</label>
                                            <input id="subject" type="text" placeholder="Personal Tex Planning">
                                        </div>
                                        <div class="single-input">
                                            <label for="message">How can we help?</label>
                                            <textarea id="message" placeholder="How can we help?"></textarea>
                                        </div>
                                        <button class="rts-btn btn-primary mt--25">Submit Message</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- appoinment contact area end -->



        @include('front.home.partials.blogs_3')

        @include('front.home.partials.cta_2')


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