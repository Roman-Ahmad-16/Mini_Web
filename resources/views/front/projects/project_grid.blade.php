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
                            Project Grid
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- partners area breadcrumb area end -->



    <!-- case studies area start -->
    <div class="rts-case-studies-area rts-section-gapTop">
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
            <div class="row g-5 mt--10">
                <div class="col-lg-6">
                    <div class="single-project-style-three">
                        <a href="#" class="thumbnail">
                            <img src="assets/images/project/03.webp" alt="project">
                        </a>
                        <div class="inner-content">
                            <a href="#">
                                <h4 class="title">Business Growth</h4>
                            </a>
                            <span>Business Strategy</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-project-style-three">
                        <a href="#" class="thumbnail">
                            <img src="assets/images/project/04.webp" alt="project">
                        </a>
                        <div class="inner-content">
                            <a href="#">
                                <h4 class="title">Startup Solution</h4>
                            </a>
                            <span>Business Strategy</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-project-style-three">
                        <a href="#" class="thumbnail">
                            <img src="assets/images/project/05.webp" alt="project">
                        </a>
                        <div class="inner-content">
                            <a href="#">
                                <h4 class="title">Growth Manage</h4>
                            </a>
                            <span>Business Strategy</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-project-style-three">
                        <a href="#" class="thumbnail">
                            <img src="assets/images/project/06.webp" alt="project">
                        </a>
                        <div class="inner-content">
                            <a href="#">
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