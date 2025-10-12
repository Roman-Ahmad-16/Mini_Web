@extends('front.home.layouts.master')
@section('title', 'Home')

@section('content')

    <body class="color-blue-demo">



        <div class="banner-service-wrapper-bg">
            <!-- rts banner area start -->
            <div class="rts-banner-hr rts-section-gap bg_image">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="banner-hr-content-wrapper">
                                <span class="pre-title" data-animation="fadeInUp" data-delay="0.1" data-duration="1.2">
                                    <img src="assets/images/banner/icon/03.svg" alt="icon">
                                    Business Success Starts Here
                                </span>
                                <h1 class="title" data-animation="fadeInUp" data-delay="0.4" data-duration="1.2">HR
                                    Soulation</h1>
                                <p class="disc" data-animation="fadeInUp" data-delay="0.7" data-duration="1.2">
                                    Porttitor ornare fertum aliquam pharetra facilisis gravida risus suscipit Dui feugiat
                                    fusce
                                    conubia ridiculus tristique parturient
                                </p>
                                <a href="#" class="rts-btn btn-primary btn-white" data-animation="fadeInUp" data-delay="0.9"
                                    data-duration="1.2">Get In Touch</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- rts banner area end -->


            <!-- rts service area start -->
            <div class="rts-service-area rts-section-gap">
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
                        <div class="col-xl-4 col-lg-6 col-sm-12" data-animation="fadeInUp" data-delay="0.1"
                            data-duration="1.2">
                            <div class="single-service-hr">
                                <a href="#" class="thumbnail">
                                    <img src="assets/images/service/14.webp" alt="service">
                                </a>
                                <div class="inner">
                                    <div class="icon-area">
                                        <img src="assets/images/service/icon/03.svg" alt="">
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
                        <div class="col-xl-4 col-lg-6 col-sm-12" data-animation="fadeInUp" data-delay="0.4"
                            data-duration="1.2">
                            <div class="single-service-hr">
                                <a href="#" class="thumbnail">
                                    <img src="assets/images/service/15.webp" alt="service">
                                </a>
                                <div class="inner">
                                    <div class="icon-area">
                                        <img src="assets/images/service/icon/04.svg" alt="">
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
                        <div class="col-xl-4 col-lg-6 col-sm-12" data-animation="fadeInUp" data-delay="0.7"
                            data-duration="1.2">
                            <div class="single-service-hr">
                                <a href="#" class="thumbnail">
                                    <img src="assets/images/service/16.webp" alt="service">
                                </a>
                                <div class="inner">
                                    <div class="icon-area">
                                        <img src="assets/images/service/icon/05.svg" alt="">
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
                                    <img src="assets/images/brand/01.webp" alt="Business_client">
                                </div>
                                <div class="single">
                                    <img src="assets/images/brand/02.webp" alt="Business_client">
                                </div>
                                <div class="single">
                                    <img src="assets/images/brand/03.webp" alt="Business_client">
                                </div>
                                <div class="single">
                                    <img src="assets/images/brand/04.webp" alt="Business_client">
                                </div>
                                <div class="single">
                                    <img src="assets/images/brand/05.webp" alt="Business_client">
                                </div>
                                <div class="single">
                                    <img src="assets/images/brand/06.webp" alt="Business_client">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>


      @include('front.home.partials.about_5')


        <!-- rts c;ients review area start -->
        <div class="rts-client-review-area-start rts-section-gapBottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="swiper mySwiper-testimnials-hr" dir="ltr">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="single-testimonials-hr">
                                        <div class="brand">
                                            <img src="assets/images/testimonials/icons/04.svg" alt="avatar">
                                        </div>
                                        <p class="disc">
                                            4.88 out of 5 star from 1,645 reviews
                                        </p>
                                        <div class="stars-wrapper">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-testimonials-hr">
                                        <div class="brand">
                                            <img src="assets/images/testimonials/icons/04.svg" alt="avatar">
                                        </div>
                                        <p class="disc">
                                            4.88 out of 5 star from 1,645 reviews
                                        </p>
                                        <div class="stars-wrapper">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-testimonials-hr">
                                        <div class="brand">
                                            <img src="assets/images/testimonials/icons/04.svg" alt="avatar">
                                        </div>
                                        <p class="disc">
                                            4.88 out of 5 star from 1,645 reviews
                                        </p>
                                        <div class="stars-wrapper">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-testimonials-hr">
                                        <div class="brand">
                                            <img src="assets/images/testimonials/icons/04.svg" alt="avatar">
                                        </div>
                                        <p class="disc">
                                            4.88 out of 5 star from 1,645 reviews
                                        </p>
                                        <div class="stars-wrapper">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-next"><i class="fa-solid fa-arrow-right"></i></div>
                            <div class="swiper-button-prev"><i class="fa-solid fa-arrow-left"></i></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- rts c;ients review area end -->

        <!-- start vedio area start -->
        <div class="rts-vedio-area-home-6 rts-section-gapBottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="thumbnail-image-gallery">
                            <img src="assets/images/gallery/16.webp" alt="thumbnail-image">
                            <div class="vedio-icone">
                                <a class="video-play-button play-video popup-video"
                                    href="https://www.youtube.com/watch?v=vZE0j_WCRvI">
                                    <span></span>
                                </a>
                                <div class="video-overlay">
                                    <a href="#section1" class="video-overlay-close">×</a>
                                </div>
                            </div>
                            <div class="vedio-title-area">
                                <h2 class="title" data-animation="fadeInUp" data-delay="0.1" data-duration="1.2">
                                    Watch Video Here
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="bg-shape-vedio-section">
                <img src="assets/images/gallery/bg-vedio.png" alt="bg">
            </div> -->
        </div>
        <!-- start vedio area end -->


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
            <div class="container mt--20">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="flowating-right">

                            <div class="case-studies-wrapper-main-5">
                                <div class="swiper mySwiper-case-studies-5 pb--0">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="single-case-studies-four">
                                                <a href="project-details.html" class="thumbnail">
                                                    <img src="assets/images/project/07.webp" alt="project">
                                                </a>
                                                <div class="inner">
                                                    <a href="project-details.html">
                                                        <h3 class="title">Digital Business Solution</h3>
                                                        <span>Business Strategy</span>
                                                    </a>
                                                </div>
                                                <div class="eye">
                                                    <img src="assets/images/project/eye.svg" alt="project">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="single-case-studies-four">
                                                <a href="project-details.html" class="thumbnail">
                                                    <img src="assets/images/project/08.webp" alt="project">
                                                </a>
                                                <div class="inner">
                                                    <a href="project-details.html">
                                                        <h3 class="title">Marketing Business Solution</h3>
                                                        <span>Business Strategy</span>
                                                    </a>
                                                </div>
                                                <div class="eye">
                                                    <img src="assets/images/project/eye.svg" alt="project">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="single-case-studies-four">
                                                <a href="project-details.html" class="thumbnail">
                                                    <img src="assets/images/project/09.webp" alt="project">
                                                </a>
                                                <div class="inner">
                                                    <a href="project-details.html">
                                                        <h3 class="title">Best Business Solution</h3>
                                                        <span>Business Strategy</span>
                                                    </a>
                                                </div>
                                                <div class="eye">
                                                    <img src="assets/images/project/eye.svg" alt="project">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="single-case-studies-four">
                                                <a href="project-details.html" class="thumbnail">
                                                    <img src="assets/images/project/08.webp" alt="project">
                                                </a>
                                                <div class="inner">
                                                    <a href="project-details.html">
                                                        <h3 class="title">Website Business Solution</h3>
                                                        <span>Business Strategy</span>
                                                    </a>
                                                </div>
                                                <div class="eye">
                                                    <img src="assets/images/project/eye.svg" alt="project">
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

        <!-- rts team area start -->
        <div class="rts-team-area rts-section-gap">
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
                <div class="row mt--20 g-5 g-sm-30 mt_sm--0">
                    <div class="col-lg-4 col-md-6 col-sm-12 mt_sm--50" data-animation="fadeInUp" data-delay="0.2"
                        data-duration="1.2">
                        <div class="single-team-area-one-start">
                            <a href="team-details.html" class="thumbnail">
                                <img src="assets/images/team/01.webp" alt="team">
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
                                <img src="assets/images/team/02.webp" alt="team">
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
                                <img src="assets/images/team/03.webp" alt="team">
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

      @include('front.home.partials.testimonial_5')

        <!-- rts business process area start -->
        <div class="rts-business-process-area rts-section-gap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="business-process-hr-left-thumbnail">
                            <img src="assets/images/process/04.webp" alt="process">
                            <div class="right-top">
                                <img src="assets/images/process/icon/04.svg" alt="process">
                                <div class="information-area">
                                    <h5 class="title">98%</h5>
                                    <span>Company Growth</span>
                                </div>
                            </div>
                            <div class="right-top bottom">
                                <img src="assets/images/process/icon/04.svg" alt="process">
                                <div class="information-area">
                                    <h5 class="title">98%</h5>
                                    <span>Company Growth</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="business-process-hr-content">
                            <div class="title-area-between-hr">
                                <div class="title-area-hr-left">
                                    <span class="pre">
                                        Business Progress
                                    </span>
                                    <h2 class="title d-block rts-text-anime-style-1">
                                        We’re Solve Revolutionary for your Company
                                    </h2>
                                    <p class="disc">
                                        Vehicula euismod ante dis ullamcorper quam orci facilisis, condimentum cursus mattis
                                        tincidunt vitae porta litora, dui ridiculus enim lacinia blandit curabitur. Dui
                                        dapibus praesent magna tempor metus facilisis proin imperdiet
                                    </p>
                                </div>
                            </div>
                            <a href="#" class="rts-btn btn-primary">Let’s Work Togather</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- rts business process area end -->

       @include('front.home.partials.blogs_5')

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