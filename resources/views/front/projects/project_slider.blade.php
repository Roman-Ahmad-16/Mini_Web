@extends('front.home.layouts.master')
@section('title', 'Home')
 <!-- partners area breadcrumb area wrapper -->
    <div class="partner-breadcrumb bg_image">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-left center">
                        <span class="bg-title">Project</span>
                        <h1 class="title">
                            Project Slider
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- partners area breadcrumb area end -->




    <!-- start gallery section -->
    <div class="rts-gallery-area rts-section-gapTop">
        <div class="container pt--40">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-between-wrapper-gallery-project">
                        <div class="title-style-two mb--40 left">
                            <span class="bg-content">Projects</span>
                            <span class="pre">Popular Projects</span>
                            <h2 class="title rts-text-anime-style-1">Projects
                                Our Completed Projects
                            </h2>
                        </div>

                        <div class="swiper-paginations"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="project-style-one-wrapper">

                        <div class="swiper mySwiper-project-1">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="project-style-one">
                                        <a href="#" class="thumbnail">
                                            <img src="assets/images/project/01.webp" alt="project">
                                        </a>
                                        <div class="inner-content">
                                            <a href="#">
                                                <h5 class="title">Business Growth</h5>
                                            </a>
                                            <span>Business Strategy</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="project-style-one">
                                        <a href="#" class="thumbnail">
                                            <img src="assets/images/project/01.webp" alt="project">
                                        </a>
                                        <div class="inner-content">
                                            <a href="#">
                                                <h5 class="title">Startup Solution</h5>
                                            </a>
                                            <span>Business Strategy</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="project-style-one">
                                        <a href="#" class="thumbnail">
                                            <img src="assets/images/project/01.webp" alt="project">
                                        </a>
                                        <div class="inner-content">
                                            <a href="#">
                                                <h5 class="title">Marketing Growth</h5>
                                            </a>
                                            <span>Business Strategy</span>
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
    <!-- start gallery section -->




    <div class="rts-brand-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="brand-list-area-wrapper">
                        <div class="left-paragraph">
                            <p>Our Trusted Clients</p>
                        </div>
                        <div class="right-brand-area-wrapper">
                            <div class="single-image">
                                <img src="assets/images/brand/01.webp" alt="brand">
                            </div>
                            <div class="single-image">
                                <img src="assets/images/brand/02.webp" alt="brand">
                            </div>
                            <div class="single-image">
                                <img src="assets/images/brand/03.webp" alt="brand">
                            </div>
                            <div class="single-image">
                                <img src="assets/images/brand/04.webp" alt="brand">
                            </div>
                            <div class="single-image">
                                <img src="assets/images/brand/05.webp" alt="brand">
                            </div>
                            <div class="single-image">
                                <img src="assets/images/brand/06.webp" alt="brand">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rts-cta-area-inner bg_image ptb--100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-inner-content-inner-page">
                        <div class="left-side-content">
                            <span>Subscribe Newsletter</span>
                            <h3 class="title">Stay Updated with <br> the Latest News!</h3>
                        </div>
                        <form action="#">
                            <input type="text" placeholder="Enter Email Address">
                            <button class="rts-btn btn-primary btn-white">Subscribe Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection