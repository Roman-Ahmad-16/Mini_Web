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

    @include('front.home.partials.cta_3')

    @include('front.home.partials.about_3')

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

   @include('front.home.partials.why_us_3')

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

   @include('front.home.partials.testimonial')

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

  @include('front.home.partials.blogs_3')





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