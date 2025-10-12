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


    <!-- rts business case area start -->
    <div class="rts-business-case-area rts-section-gapTop" dir="ltr">
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
                                            <a href="#" class="thumbnail">
                                                <img src="assets/images/project/07.webp" alt="project">
                                            </a>
                                            <div class="inner">
                                                <a href="#">
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
                                            <a href="#" class="thumbnail">
                                                <img src="assets/images/project/08.webp" alt="project">
                                            </a>
                                            <div class="inner">
                                                <a href="#">
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
                                            <a href="#" class="thumbnail">
                                                <img src="assets/images/project/09.webp" alt="project">
                                            </a>
                                            <div class="inner">
                                                <a href="#">
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
                                            <a href="#" class="thumbnail">
                                                <img src="assets/images/project/08.webp" alt="project">
                                            </a>
                                            <div class="inner">
                                                <a href="#">
                                                    <h3 class="title">Digital Business Solution</h3>
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