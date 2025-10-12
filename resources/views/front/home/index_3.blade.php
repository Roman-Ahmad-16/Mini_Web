@extends('front.home.layouts.master')
@section('title', 'Home')

@section('content')
    <div class="banner-three-box-clip-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="banner-inner-conten">
                        <span class="pre">20+ Years In Business</span>
                        <h1 class="title rts-text-anime-style-1">
                            Empowering Your <span>Success</span> at a Time
                        </h1>
                        <a href="appoinment.html" class="rts-btn btn-primary">View Solutions</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="right-thumbnail rts-reveal-one">
            <img class="rts-reveal-image-one" src="{{ asset('front/assets/images/banner/04.webp') }}" alt="banner-area">
        </div>
        <div class="all-shape">
            <img src="{{ asset('front/assets/images/banner/shape/01.png') }}" alt="banner" class="one">
            <img src="{{ asset('front/assets/images/banner/shape/02.png') }}" alt="banner" class="two">
            <img src="{{ asset('front/assets/images/banner/shape/03.png') }}" alt="banner" class="three">
        </div>
    </div>

    <!-- service area start -->
    <div class="rts-service-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-style-three center">
                        <span class="pre">Our Latest Services</span>
                        <div class="bg-title">01</div>
                        <h2 class="title rts-text-anime-style-1">Service We Pro de</h2>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--10">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6" data-animation="fadeInUp" data-delay="0.2"
                    data-duration="1.2">
                    <div class="single-service-style-three">
                        <div class="inner">
                            <div class="icon">
                                <img src="{{ asset('front/assets/images/service/icons/04.svg') }}" alt="icon">
                            </div>
                            <a href="service-details.html">
                                <h4 class="title">Business Solution</h4>
                            </a>
                            <p class="disc">
                                Fusce dignissim erat dis proin ornare class sem nibh
                            </p>
                            <a class="read-more" href="service-details.html">Learn More <i
                                    class="fa-light fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6" data-animation="fadeInUp" data-delay="0.4"
                    data-duration="1.2">
                    <div class="single-service-style-three">
                        <div class="inner">
                            <div class="icon">
                                <img src="{{ asset('front/assets/images/service/icons/05.svg') }}" alt="icon">
                            </div>
                            <a href="service-details.html">
                                <h4 class="title">Creative Ideas</h4>
                            </a>
                            <p class="disc">
                                Fusce dignissim erat dis proin ornare class sem nibh
                            </p>
                            <a class="read-more" href="service-details.html">Learn More <i
                                    class="fa-light fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6" data-animation="fadeInUp" data-delay="0.6"
                    data-duration="1.2">
                    <div class="single-service-style-three">
                        <div class="inner">
                            <div class="icon">
                                <img src="{{ asset('front/assets/images/service/icons/06.svg') }}" alt="icon">
                            </div>
                            <a href="service-details.html">
                                <h4 class="title">Market Research</h4>
                            </a>
                            <p class="disc">
                                Fusce dignissim erat dis proin ornare class sem nibh
                            </p>
                            <a class="read-more" href="service-details.html">Learn More <i
                                    class="fa-light fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6" data-animation="fadeInUp" data-delay="0.8"
                    data-duration="1.2">
                    <div class="single-service-style-three">
                        <div class="inner">
                            <div class="icon">
                                <img src="{{ asset('front/assets/images/service/icons/07.svg') }}" alt="icon">
                            </div>
                            <a href="service-details.html">
                                <h4 class="title">Business Solution</h4>
                            </a>
                            <p class="disc">
                                Fusce dignissim erat dis proin ornare class sem nibh
                            </p>
                            <a class="read-more" href="service-details.html">Learn More <i
                                    class="fa-light fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service area end -->

    <!-- rs call to action area three -->
    <div class="rts-call-to-action-area-three bg_image">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-main-wrapper-inner">
                        <h2 class="title rts-text-anime-style-1">
                            Contact Our Agent For Any kind off <br> Business Help
                            <span>(24/7 Available)</span>
                        </h2>
                        <div class="call-area">
                            <div class="icon">
                                <i class="fa-solid fa-phone-flip"></i>
                            </div>
                            <a href="#">+215 2153.2159</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rs call to action area three end -->

    <!-- rts about area start -->
    <div class="rts-about-area rts-section-gap">
        <div class="container pt--40">
            <div class="row align-items-center">
                <div class="col-lg-5">

                    <div class="main-thumnal-inner-about-three">
                        <div class="about-thumbnail-style-three">
                            <div class="thumbnail">
                                <img src="{{ asset('front/assets/images/about/06.webp') }}" alt="about">
                            </div>
                        </div>

                        <div class="shape">
                            <img src="{{ asset('front/assets/images/about/shape/04.svg') }}" alt="about">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 pl--100 pl_md--0 mt_md--80 pl_sm--0 mt_sm--80">
                    <div class="about-content-right-three">
                        <div class="title-style-three left">
                            <span class="pre">About Our Company</span>
                            <div class="bg-title">02</div>
                            <h2 class="title rts-text-anime-style-1">Delivering Excellence, Every <br> Step of the Way
                            </h2>
                        </div>
                        <p class="disc">
                            We are licensed and insured with over 14 years of experience in providing United States with
                            top-rated USA business services
                        </p>
                        <div class="about-feature">
                            <div class="single-feature-wrap">
                                <div class="single">01. The Great Mission</div>
                                <div class="single">04. Start Mission</div>
                            </div>
                            <div class="single-feature-wrap">
                                <div class="single">02. Working with you</div>
                                <div class="single">05. Great Partners</div>
                            </div>
                            <div class="single-feature-wrap">
                                <div class="single">03. Best solution</div>
                            </div>
                        </div>
                        <a href="contact.html" class="rts-btn btn-primary">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts about area end -->

    <div class="working-process-area-three rts-section-gap working-process-bg">
        <div class="container">
            <div class="row mt--40">
                <div class="title-style-three center">
                    <span class="pre">Working Steps</span>
                    <div class="bg-title">03</div>
                    <h2 class="title rts-text-anime-style-1">Our Basic Work Process</h2>
                </div>
            </div>
            <div class="row g-5 mt--20 align-items-center rts_jump_animation-wrapper">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 rts-jump__item">
                    <!-- single wirking process -->
                    <div class="rts-working-process-1 text-center">
                        <div class="inner">
                            <div class="icon">
                                <img src="{{ asset('front/assets/images/wokring-process/icon/01.svg') }}" alt="Working_process">
                            </div>
                        </div>
                        <div class="content">
                            <h6 class="title">Make a Plan</h6>
                            <p class="disc">
                                Nostra proin fusce hendrerit <br> viverra nisl torquent.
                            </p>
                        </div>
                    </div>
                    <!-- single wirking process End -->
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 rts-jump__item">
                    <!-- single wirking process -->
                    <div class="rts-working-process-1 process-lg text-center">
                        <div class="inner two">
                            <div class="icon">
                                <img src="{{ asset('front/assets/images/wokring-process/icon/02.svg') }}" alt="Working_process">
                            </div>
                        </div>
                        <div class="content">
                            <h6 class="title">Cost Calculating</h6>
                            <p class="disc">
                                Nostra proin fusce hendrerit <br> viverra nisl torquent.
                            </p>
                        </div>
                    </div>
                    <!-- single wirking process End -->
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 rts-jump__item">
                    <!-- single wirking process -->
                    <div class="rts-working-process-1 text-center">
                        <div class="inner three">
                            <div class="icon">
                                <img src="{{ asset('front/assets/images/wokring-process/icon/03.svg') }}" alt="Working_process">
                            </div>
                        </div>
                        <div class="content">
                            <h6 class="title">Business Growth</h6>
                            <p class="disc">
                                Nostra proin fusce hendrerit <br> viverra nisl torquent.
                            </p>
                        </div>
                    </div>
                    <!-- single wirking process End -->
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 rts-jump__item">
                    <!-- single wirking process -->
                    <div class="rts-working-process-1 process-lg text-center">
                        <div class="inner four">
                            <div class="icon">
                                <img src="{{ asset('front/assets/images/wokring-process/icon/04.svg') }}" alt="Working_process">
                            </div>
                        </div>
                        <div class="content">
                            <h6 class="title">Success Mission</h6>
                            <p class="disc">
                                Nostra proin fusce hendrerit <br> viverra nisl torquent.
                            </p>
                        </div>
                    </div>
                    <!-- single wirking process End -->
                </div>
            </div>
        </div>
    </div>

    <!-- why choose us area start -->
    <div class="why-choose-us-area rts-section-gap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="why-choose-us-three-content-left">

                        <div class="title-style-three left">
                            <span class="pre">Why Choose Us</span>
                            <div class="bg-title">04</div>
                            <h2 class="title rts-text-anime-style-1">Seamless Solutions for <br> Your Digital Journey
                            </h2>
                        </div>
                        <p class="disc">
                            Aliquet porta est cras proin donec odio curabitur convallis, penatibus vulputate facilisi
                            montes blandit condimentum quisque platea, sociosqu ut nec nam cursus magnis leo nullam
                        </p>

                        <div class="why-choose-feature">
                            <div class="single">
                                <div class="icon">
                                    <img src="{{ asset('front/assets/images/why-choose/01.svg') }}" alt="">
                                </div>
                                <p>Fast Growing Sells</p>
                            </div>
                            <div class="single">
                                <div class="icon">
                                    <img src="{{ asset('front/assets/images/why-choose/02.svg') }}" alt="">
                                </div>
                                <p>24/7 Quality Services</p>
                            </div>
                        </div>
                        <div class="call-area">
                            <div class="thumb">
                                <img src="{{ asset('front/assets/images/why-choose/01.webp') }}" alt="why">
                            </div>
                            <div class="inner">
                                <span>24/7 Support Team</span>
                                <a href="#">
                                    <h5 class="title">(+214) 4576. 76589</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-image-inner-why-choose-three">
                        <div class="thumbnail-large">
                            <img src="{{ asset('front/assets/images/why-choose/03.webp') }}" alt="why">
                        </div>
                        <div class="small">
                            <img src="{{ asset('front/assets/images/why-choose/02.webp') }}" alt="">
                        </div>
                        <div class="black-shape">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- why choose us area end -->

    <!-- case studies area start -->
    <div class="rts-case-studies-area rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-style-three center">
                        <span class="pre">Case Studies</span>
                        <div class="bg-title">05</div>
                        <h2 class="title rts-text-anime-style-1">Specialist Business Cases</h2>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--10 rts_jump_animation-wrapper">
                <div class="col-lg-6 rts-jump__item">
                    <div class="single-project-style-three">
                        <a href="project-details.html" class="thumbnail">
                            <img src="{{ asset('front/assets/images/project/03.webp') }}" alt="project">
                        </a>
                        <div class="inner-content">
                            <a href="project-details.html">
                                <h4 class="title">Business Growth</h4>
                            </a>
                            <span>Business Strategy</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 rts-jump__item">
                    <div class="single-project-style-three">
                        <a href="project-details.html" class="thumbnail">
                            <img src="{{ asset('front/assets/images/project/04.webp') }}" alt="project">
                        </a>
                        <div class="inner-content">
                            <a href="project-details.html">
                                <h4 class="title">Startup Solution</h4>
                            </a>
                            <span>Business Strategy</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 rts-jump__item">
                    <div class="single-project-style-three">
                        <a href="project-details.html" class="thumbnail">
                            <img src="{{ asset('front/assets/images/project/05.webp') }}" alt="project">
                        </a>
                        <div class="inner-content">
                            <a href="project-details.html">
                                <h4 class="title">Growth Manage</h4>
                            </a>
                            <span>Business Strategy</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 rts-jump__item">
                    <div class="single-project-style-three">
                        <a href="project-details.html" class="thumbnail">
                            <img src="{{ asset('front/assets/images/project/06.webp') }}" alt="project">
                        </a>
                        <div class="inner-content">
                            <a href="project-details.html">
                                <h4 class="title">Company Skills</h4>
                            </a>
                            <span>Business Strategy</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- case studies area end -->

    <!-- start client review area start -->
    <div class="rts-client-review-two bg-black-content rts-section-gapTop bg-client-r-h2">
        <div class="container">
            <div class="row mt--30">
                <div class="title-style-three-between">
                    <div class="title-style-three left">
                        <span class="pre">Our Testimonial</span>
                        <div class="bg-title">04</div>
                        <h2 class="title rts-text-anime-style-1">Our Client Reviews
                        </h2>
                    </div>
                    <div class="button-area">
                        <a href="#" class="rts-btn btn-primary btn-white">See All Reviews</a>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--20">
                <div class="col-12">
                    <div class="swiper mySwiperh2_clients" dir="ltr">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <!-- single client reviews -->
                                <div class="rts-client-reviews-h2">
                                    <div class="review-header">
                                        <a href="#" class="thumbnail">
                                            <img src="{{ asset('front/assets/images/testimonials/avatar/01.webp') }}" alt="testimonials_area">
                                        </a>
                                        <div class="discription">
                                            <a href="#">
                                                <h6 class="title">David Smith</h6>
                                            </a>
                                            <span>Finance</span>
                                        </div>
                                    </div>
                                    <div class="review-body">
                                        <p class="disc">
                                            “Dabus nisl aliquet congue tellus nascetur lectus sagpien mattis arcu
                                            dictums augue
                                            volutpat felis etiam suspendisse rhoncus mauris dignissim ante”
                                        </p>
                                        <div class="body-end">
                                            <a href="#"><img src="{{ asset('front/assets/images/testimonials/icons/01.webp') }}"
                                                    alt="Client_logo"></a>
                                            <div class="star-icon">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single client reviews End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- single client reviews -->
                                <div class="rts-client-reviews-h2">
                                    <div class="review-header">
                                        <a href="#" class="thumbnail">
                                            <img src="{{ asset('front/assets/images/testimonials/avatar/02.webp') }}" alt="testimonials_area">
                                        </a>
                                        <div class="discription">
                                            <a href="#">
                                                <h6 class="title">Mark Jone</h6>
                                            </a>
                                            <span>Finance</span>
                                        </div>
                                    </div>
                                    <div class="review-body">
                                        <p class="disc">
                                            “Dabus nisl aliquet congue tellus nascetur lectus sagpien mattis arcu
                                            dictums augue
                                            volutpat felis etiam suspendisse rhoncus mauris dignissim ante”
                                        </p>
                                        <div class="body-end">
                                            <a href="#"><img src="{{ asset('front/assets/images/testimonials/icons/02.webp') }}"
                                                    alt="Client_logo"></a>
                                            <div class="star-icon">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single client reviews End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- single client reviews -->
                                <div class="rts-client-reviews-h2">
                                    <div class="review-header">
                                        <a href="#" class="thumbnail">
                                            <img src="{{ asset('front/assets/images/testimonials/avatar/03.webp') }}" alt="testimonials_area">
                                        </a>
                                        <div class="discription">
                                            <a href="#">
                                                <h6 class="title">Lord Korn</h6>
                                            </a>
                                            <span>Finance</span>
                                        </div>
                                    </div>
                                    <div class="review-body">
                                        <p class="disc">
                                            “Dabus nisl aliquet congue tellus nascetur lectus sagpien mattis arcu
                                            dictums augue
                                            volutpat felis etiam suspendisse rhoncus mauris dignissim ante”
                                        </p>
                                        <div class="body-end">
                                            <a href="#"><img src="{{ asset('front/assets/images/testimonials/icons/03.webp') }}"
                                                    alt="Client_logo"></a>
                                            <div class="star-icon">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single client reviews End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- single client reviews -->
                                <div class="rts-client-reviews-h2">
                                    <div class="review-header">
                                        <a href="#" class="thumbnail">
                                            <img src="{{ asset('front/assets/images/testimonials/avatar/01.webp') }}" alt="testimonials_area">
                                        </a>
                                        <div class="discription">
                                            <a href="#">
                                                <h6 class="title">David Smith</h6>
                                            </a>
                                            <span>Finance</span>
                                        </div>
                                    </div>
                                    <div class="review-body">
                                        <p class="disc">
                                            “Dabus nisl aliquet congue tellus nascetur lectus sagpien mattis arcu
                                            dictums augue
                                            volutpat felis etiam suspendisse rhoncus mauris dignissim ante”
                                        </p>
                                        <div class="body-end">
                                            <a href="#"><img src="{{ asset('front/assets/images/testimonials/icons/01.webp') }}"
                                                    alt="Client_logo"></a>
                                            <div class="star-icon">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single client reviews End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- single client reviews -->
                                <div class="rts-client-reviews-h2">
                                    <div class="review-header">
                                        <a href="#" class="thumbnail">
                                            <img src="{{ asset('front/assets/images/testimonials/avatar/02.webp') }}" alt="testimonials_area">
                                        </a>
                                        <div class="discription">
                                            <a href="#">
                                                <h6 class="title">Mark Jone</h6>
                                            </a>
                                            <span>Finance</span>
                                        </div>
                                    </div>
                                    <div class="review-body">
                                        <p class="disc">
                                            “Dabus nisl aliquet congue tellus nascetur lectus sagpien mattis arcu
                                            dictums augue
                                            volutpat felis etiam suspendisse rhoncus mauris dignissim ante”
                                        </p>
                                        <div class="body-end">
                                            <a href="#"><img src="{{ asset('front/assets/images/testimonials/icons/02.webp') }}"
                                                    alt="Client_logo"></a>
                                            <div class="star-icon">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single client reviews End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- single client reviews -->
                                <div class="rts-client-reviews-h2">
                                    <div class="review-header">
                                        <a href="#" class="thumbnail">
                                            <img src="{{ asset('front/assets/images/testimonials/avatar/03.webp') }}" alt="testimonials_area">
                                        </a>
                                        <div class="discription">
                                            <a href="#">
                                                <h6 class="title">Lord Korn</h6>
                                            </a>
                                            <span>Finance</span>
                                        </div>
                                    </div>
                                    <div class="review-body">
                                        <p class="disc">
                                            “Dabus nisl aliquet congue tellus nascetur lectus sagpien mattis arcu
                                            dictums augue
                                            volutpat felis etiam suspendisse rhoncus mauris dignissim ante”
                                        </p>
                                        <div class="body-end">
                                            <a href="#"><img src="{{ asset('front/assets/images/testimonials/icons/03.webp') }}"
                                                    alt="Client_logo"></a>
                                            <div class="star-icon">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single client reviews End -->
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- start client review area end -->

    <!-- rts-pricing plane arae -->
    <div class="rts-pricing-plane rts-section-gap bg-pricing-bg-h2 margin-dec-padding-con">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pricing-tab-button-area title-area pricing-h2">
                        <div class="title-style-three center">
                            <span class="pre">Price Plans</span>
                            <div class="bg-title">08</div>
                            <h2 class="title rts-text-anime-style-1">Pricing & Plans</h2>
                        </div>
                        <ul class="nav nav-tabs pricing-2-tab mt--50" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                                    type="button" role="tab" aria-controls="home" aria-selected="true">Monthly PLan</button>
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
            <div class="row mt--80">
                <div class="col-12">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row g-5">
                                <!-- single pricing plane -->
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="pricing-wrapper-one home-two">
                                        <!-- pricing header -->
                                        <div class="pricing-header-start">
                                            <h5 class="title">
                                                Basic Plan
                                            </h5>
                                            <div class="pric-area">
                                                <h2 class="title">$250</h2>
                                                <span>/Month</span>
                                            </div>
                                            <div class="discription">
                                                <p class="disc">
                                                    Curabitur nullam dis nibh nisi nascetur vestibulum proin mi morbi
                                                </p>
                                            </div>
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
                                            <a class="rts-btn btn-primary btn-white" href="#">Buy This</a>
                                        </div>
                                        <!-- pricing body end -->
                                    </div>
                                </div>
                                <!-- single pricing plane -->
                                <!-- single pricing plane -->
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="pricing-wrapper-one home-two active">
                                        <!-- pricing header -->
                                        <div class="pricing-header-start">
                                            <h5 class="title">
                                                Standard Plan
                                            </h5>
                                            <div class="pric-area">
                                                <h2 class="title">$450</h2>
                                                <span>/Month</span>
                                            </div>
                                            <div class="discription">
                                                <p class="disc">
                                                    Curabitur nullam dis nibh nisi nascetur vestibulum proin mi morbi
                                                </p>
                                            </div>
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
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Market Growth Solution</span>
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
                                            <a class="rts-btn btn-primary active" href="#">Buy This</a>
                                        </div>
                                        <!-- pricing body end -->
                                    </div>
                                </div>
                                <!-- single pricing plane -->
                                <!-- single pricing plane -->
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="pricing-wrapper-one home-two">
                                        <!-- pricing header -->
                                        <div class="pricing-header-start">
                                            <h5 class="title">
                                                Premium Plan
                                            </h5>
                                            <div class="pric-area">
                                                <h2 class="title">$650</h2>
                                                <span>/Month</span>
                                            </div>
                                            <div class="discription">
                                                <p class="disc">
                                                    Curabitur nullam dis nibh nisi nascetur vestibulum proin mi morbi
                                                </p>
                                            </div>
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
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Market Growth Solution</span>
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
                                            <a class="rts-btn btn-primary btn-white" href="#">Buy This</a>
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
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="pricing-wrapper-one home-two">
                                        <!-- pricing header -->
                                        <div class="pricing-header-start">
                                            <h5 class="title">
                                                Basic Plan
                                            </h5>
                                            <div class="pric-area">
                                                <h2 class="title">$2500</h2>
                                                <span>/Year</span>
                                            </div>
                                            <div class="discription">
                                                <p class="disc">
                                                    Curabitur nullam dis nibh nisi nascetur vestibulum proin mi morbi
                                                </p>
                                            </div>
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
                                            <a class="rts-btn btn-primary btn-white" href="#">Buy This</a>
                                        </div>
                                        <!-- pricing body end -->
                                    </div>
                                </div>
                                <!-- single pricing plane -->
                                <!-- single pricing plane -->
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="pricing-wrapper-one home-two active">
                                        <!-- pricing header -->
                                        <div class="pricing-header-start">
                                            <h5 class="title">
                                                Standard Plan
                                            </h5>
                                            <div class="pric-area">
                                                <h2 class="title">$4500</h2>
                                                <span>/Year</span>
                                            </div>
                                            <div class="discription">
                                                <p class="disc">
                                                    Curabitur nullam dis nibh nisi nascetur vestibulum proin mi morbi
                                                </p>
                                            </div>
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
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Market Growth Solution</span>
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
                                            <a class="rts-btn btn-primary active" href="#">Buy This</a>
                                        </div>
                                        <!-- pricing body end -->
                                    </div>
                                </div>
                                <!-- single pricing plane -->
                                <!-- single pricing plane -->
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="pricing-wrapper-one home-two">
                                        <!-- pricing header -->
                                        <div class="pricing-header-start">
                                            <h5 class="title">
                                                Premium Plan
                                            </h5>
                                            <div class="pric-area">
                                                <h2 class="title">$6500</h2>
                                                <span>/Year</span>
                                            </div>
                                            <div class="discription">
                                                <p class="disc">
                                                    Curabitur nullam dis nibh nisi nascetur vestibulum proin mi morbi
                                                </p>
                                            </div>
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
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Market Growth Solution</span>
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
                                            <a class="rts-btn btn-primary btn-white" href="#">Buy This</a>
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
    <!-- rts-pricing plane arae End -->

    <div class="rts-client-area ptb--100 brand-bg-three bg_image">
        <div class="container">
            <div class="row">
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

    <div class="rts-blog-area rts-section-gapTop">
        <div class="container pt--40">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-style-three center">
                        <span class="pre">Blog & Article</span>
                        <div class="bg-title">09</div>
                        <h2 class="title rts-text-anime-style-1">Recent blog post</h2>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--20">
                <!-- single Post Start -->
                <div class="col-lg-4 col-md-6" data-animation="fadeInUp" data-delay="0.0" data-duration="1.2">
                    <!-- single Post blog large -->
                    <div class="rts-blog-h-2-wrapper">
                        <a href="blog-details.html" class="thumbnail">
                            <img src="{{ asset('front/assets/images/blog/04.webp') }}" alt="Business_blog">
                        </a>
                        <div class="body">
                            <span>Business Solution / by David Dolean</span>
                            <a href="blog-details.html">
                                <h4 class="title">Building a Brand That from Market Leaders</h4>
                            </a>
                            <a class="rts-read-more btn-primary" href="blog-details.html"><i
                                    class="far fa-arrow-right"></i>Read
                                More</a>
                        </div>
                    </div>
                    <!-- single Post blog large End -->
                </div>
                <!-- single Post End -->
                <!-- single Post Start -->
                <div class="col-lg-4 col-md-6" data-animation="fadeInUp" data-delay="0.2" data-duration="1.2">
                    <!-- single Post blog large -->
                    <div class="rts-blog-h-2-wrapper">
                        <a href="blog-details.html" class="thumbnail">
                            <img src="{{ asset('front/assets/images/blog/05.webp') }}" alt="Business_blog">
                        </a>
                        <div class="body">
                            <span>Business Solution / by David Dolean</span>
                            <a href="blog-details.html">
                                <h4 class="title">Transforming Your Approach to Business</h4>
                            </a>
                            <a class="rts-read-more btn-primary" href="blog-details.html"><i
                                    class="far fa-arrow-right"></i>Read
                                More</a>
                        </div>
                    </div>
                    <!-- single Post blog large End -->
                </div>
                <!-- single Post End -->
                <!-- single Post Start -->
                <div class="col-lg-4 col-md-6" data-animation="fadeInUp" data-delay="0.4" data-duration="1.2">
                    <!-- single Post blog large -->
                    <div class="rts-blog-h-2-wrapper">
                        <a href="blog-details.html" class="thumbnail">
                            <img src="{{ asset('front/assets/images/blog/06.webp') }}" alt="Business_blog">
                        </a>
                        <div class="body">
                            <span>Business Solution / by David Dolean</span>
                            <a href="blog-details.html">
                                <h4 class="title">The quick settle tips of the new ages exist </h4>
                            </a>
                            <a class="rts-read-more btn-primary" href="blog-details.html"><i
                                    class="far fa-arrow-right"></i>Read
                                More</a>
                        </div>
                    </div>
                    <!-- single Post blog large End -->
                </div>
                <!-- single Post End -->
            </div>
        </div>
    </div>





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
@endsection