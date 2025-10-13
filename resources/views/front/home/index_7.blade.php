@extends('front.home.layouts.master')
@section('title', 'Home')

@section('content')

    <body>

       <div class="page-wrapper radious-none-button">

            <div class="banner-seven-swiper-wrapper">

                <!-- Swiper -->
                <div class="swiper mySwiper-banner-seven" dir="ltr">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <!-- index seven area start -->
                            <div class="index-seven-area rts-section-gap bg_banner-seven bg_image">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="banner-seven-inner-content">
                                                <span class="pre-title">
                                                    <img src="{{ asset('front/assets/images/banner/icon/01.svg') }}" alt="banner">
                                                    Business Success Starts Here
                                                </span>
                                                <h1 class="title">Business <br>
                                                    <span>Growth</span>
                                                </h1>
                                                <p class="disc">
                                                    Maecenas quis integer aenean nisl, viverra morbi magna amet, viverra.
                                                    Sollicitudin
                                                    posuere
                                                    scelerisque urna, urna. At vestibulum fringilla.
                                                </p>
                                                <a href="service.html" class="rts-btn btn-primary btn-white">View
                                                    Services</a>
                                                <div class="counter-area-banner-7">
                                                    <h2 class="counter title-counter"><span class="odometer"
                                                            data-count="28">00</span>K+
                                                    </h2>
                                                    <p>Business Revenue</p>
                                                    <div class="stars-area-main">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-regular fa-star"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- index seven area end -->
                        </div>
                        <div class="swiper-slide">
                            <!-- index seven area start -->
                            <div class="index-seven-area rts-section-gap bg_banner-seven two bg_image">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="banner-seven-inner-content">
                                                <span class="pre-title">
                                                    <img src="{{ asset('front/assets/images/banner/icon/01.svg') }}" alt="banner">
                                                    Business Success Starts Here
                                                </span>
                                                <h1 class="title">Business <br>
                                                    <span>Growth</span>
                                                </h1>
                                                <p class="disc">
                                                    Maecenas quis integer aenean nisl, viverra morbi magna amet, viverra.
                                                    Sollicitudin
                                                    posuere
                                                    scelerisque urna, urna. At vestibulum fringilla.
                                                </p>
                                                <a href="service.html" class="rts-btn btn-primary btn-white">View
                                                    Services</a>
                                                <div class="counter-area-banner-7">
                                                    <h2 class="counter title-counter"><span class="odometer"
                                                            data-count="28">00</span>K+
                                                    </h2>
                                                    <p>Business Revenue</p>
                                                    <div class="stars-area-main">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-regular fa-star"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- index seven area end -->
                        </div>
                        <div class="swiper-slide">
                            <!-- index seven area start -->
                            <div class="index-seven-area rts-section-gap bg_banner-seven three bg_image">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="banner-seven-inner-content">
                                                <span class="pre-title">
                                                    <img src="{{ asset('front/assets/images/banner/icon/01.svg') }}" alt="banner">
                                                    Business Success Starts Here
                                                </span>
                                                <h1 class="title">Business <br>
                                                    <span>Growth</span>
                                                </h1>
                                                <p class="disc">
                                                    Maecenas quis integer aenean nisl, viverra morbi magna amet, viverra.
                                                    Sollicitudin
                                                    posuere
                                                    scelerisque urna, urna. At vestibulum fringilla.
                                                </p>
                                                <a href="service.html" class="rts-btn btn-primary btn-white">View
                                                    Services</a>
                                                <div class="counter-area-banner-7">
                                                    <h2 class="counter title-counter"><span class="odometer"
                                                            data-count="28">00</span>K+
                                                    </h2>
                                                    <p>Business Revenue</p>
                                                    <div class="stars-area-main">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-regular fa-star"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- index seven area end -->
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

                <div class="email-area-left">
                    <i class="fa-regular fa-envelope"></i>
                    <a href="#">info@invema.com</a>
                </div>

                <div class="language-area">
                    <span>en.</span>
                    <span>fr.</span>
                    <span>ge.</span>
                </div>

                <a href="#" class="to-bottom-area">
                    <i class="fa-light fa-arrow-up"></i>
                    Scroll
                </a>
            </div>



         @include('front.partials.about.about_1')

            <!-- rts call to action area start -->
            <div class="rts-call-to-action-area-two bg_image">
                <div class="container-full">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="cta-style-two-area">
                                            <h3 class="title rts-text-anime-style-1">
                                                Let’s discuss about how we can help <br>
                                                make your business better
                                            </h3>
                                            <a href="contact.html" class="rts-btn btn-primary btn-white">Lets Work
                                                Together</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- rts call to action area end -->

            <!-- rts latest service area start -->
            <div class="rts-latest-service-area rts-section-gap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="title-style-one center">
                                <span class="pre">Our Latest Services</span>
                                <h2 class="title rts-text-anime-style-1">Service We Provide
                                </h2>
                            </div>
                        </div>
                        <div class="col-lg-12 mt--50">
                            <section class="main-wrapper-sticky">
                                <div class="sticky-statement">
                                    <div class="left-side">
                                        <div class="icon">
                                            <img src="{{ asset('front/assets/images/service/01.svg') }}" alt="service">
                                        </div>
                                        <h5 class="title">Business Solution</h5>
                                    </div>
                                    <div class="right">
                                        <p class="disc">
                                            comprehensive set of strategies, tools, technologies, and processes challenges,
                                            optimize operations, and drive business growth.
                                        </p>
                                        <a href="service-details.html" class="arrow">
                                            <i class="fa-regular fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="sticky-statement">
                                    <div class="left-side">
                                        <div class="icon">
                                            <img src="{{ asset('front/assets/images/service/02.svg') }}" alt="service">
                                        </div>
                                        <h5 class="title">Creative Ideas</h5>
                                    </div>
                                    <div class="right">
                                        <p class="disc">
                                            comprehensive set of strategies, tools, technologies, and processes challenges,
                                            optimize operations, and drive business growth.
                                        </p>
                                        <a href="service-details.html" class="arrow">
                                            <i class="fa-regular fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="sticky-statement">
                                    <div class="left-side">
                                        <div class="icon">
                                            <img src="{{ asset('front/assets/images/service/03.svg') }}" alt="service">
                                        </div>
                                        <h5 class="title">Market Research</h5>
                                    </div>
                                    <div class="right">
                                        <p class="disc">
                                            comprehensive set of strategies, tools, technologies, and processes challenges,
                                            optimize operations, and drive business growth.
                                        </p>
                                        <a href="service-details.html" class="arrow">
                                            <i class="fa-regular fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="sticky-statement">
                                    <div class="left-side">
                                        <div class="icon">
                                            <img src="{{ asset('front/assets/images/service/01.svg') }}" alt="service">
                                        </div>
                                        <h5 class="title">Technology Solution</h5>
                                    </div>
                                    <div class="right">
                                        <p class="disc">
                                            comprehensive set of strategies, tools, technologies, and processes challenges,
                                            optimize operations, and drive business growth.
                                        </p>
                                        <a href="service-details.html" class="arrow">
                                            <i class="fa-regular fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
            <!-- rts latest service area end -->


            <!-- eorking process areas start -->
            <div class="working-process-one bg-main rts-section-gap without-clip-radious">
                <div class="container">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6">
                            <div class="title-style-one">
                                <span class="pre">How we works</span>
                                <h2 class="title rts-text-anime-style-1">Easy 3 Steps To Work
                                </h2>
                            </div>
                            <div class="working-process-main-wrapper mt--60">
                                <div class="single-working-process-one" data-animation="fadeInUp" data-delay="0.2"
                                    data-duration="1.2">
                                    <div class="left">
                                        <div class="icon">
                                            <img src="{{ asset('front/assets/images/process/icon/01.svg') }}" alt="process">
                                        </div>
                                    </div>
                                    <div class="inner-content">
                                        <div class="number-main">
                                            <span class="number">01</span>
                                        </div>
                                        <h5 class="title">Client Discovery</h5>
                                        <p class="disc">
                                            The agency begins by understanding the
                                            client's needs, goals, and
                                        </p>
                                    </div>
                                </div>
                                <div class="single-working-process-one" data-animation="fadeInUp" data-delay="0.2"
                                    data-duration="1.2">
                                    <div class="left">
                                        <div class="icon">
                                            <img src="{{ asset('front/assets/images/process/icon/02.svg') }}" alt="process">
                                        </div>
                                    </div>
                                    <div class="inner-content">
                                        <div class="number-main">
                                            <span class="number">02</span>
                                        </div>
                                        <h5 class="title">Research & Analysis</h5>
                                        <p class="disc">
                                            The agency begins by understanding the
                                            client's needs, goals, and
                                        </p>
                                    </div>
                                </div>
                                <div class="single-working-process-one" data-animation="fadeInUp" data-delay="0.2"
                                    data-duration="1.2">
                                    <div class="left">
                                        <div class="icon">
                                            <img src="{{ asset('front/assets/images/process/icon/03.svg') }}" alt="process">
                                        </div>
                                    </div>
                                    <div class="inner-content">
                                        <div class="number-main">
                                            <span class="number">03</span>
                                        </div>
                                        <h5 class="title">Strategy Development</h5>
                                        <p class="disc">
                                            The agency begins by understanding the
                                            client's needs, goals, and
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="thumbnail-working-procss-one" data-animation="zoomOut" data-delay="0.2"
                                data-duration="1.2">
                                <img src="{{ asset('front/assets/images/process/02.webp') }}" alt="working-process">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- eorking process areas end -->

            <div class="rts-project-area rts-section-gap without-bg-image">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="title-style-five center">
                                <span class="pre">Popular Projects</span>
                                <h2 class="title">Our Completed Projects</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row mt--50">
                        <div class="col-lg-12">
                            <div class="project-swiper-5-area">
                                <div class="swiper mySwiper-project-five" dir="ltr">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="row g-5">
                                                <div class="col-lg-7">
                                                    <div class="thumbnail-project-5">
                                                        <img src="{{ asset('front/assets/images/project/16.webp') }}" alt="project">
                                                    </div>
                                                </div>

                                                <div class="col-lg-5">
                                                    <div class="project-content-left-5">
                                                        <div class="icon">
                                                            <img src="{{ asset('front/assets/images/project/02.svg') }}" alt="project">
                                                        </div>
                                                        <div class="title-area">
                                                            <h6 class="title">Pro Business Solution</h6>
                                                            <span>Case Study, Growth</span>
                                                        </div>
                                                        <div class="inner">
                                                            <p class="disc">
                                                                Ornare etiam laoreet dictumst nisl quisque scelerisque cras
                                                                ut
                                                                porta
                                                                interdum purus mattis iaculis litora turpis torquent posuere
                                                                sodales
                                                                himenaeos
                                                            </p>
                                                            <a href="project-details.html"
                                                                class="rts-btn btn-primary btn-white">View
                                                                Project</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="row g-5">
                                                <div class="col-lg-7">
                                                    <div class="thumbnail-project-5">
                                                        <img src="{{ asset('front/assets/images/project/16.webp') }}" alt="project">
                                                    </div>
                                                </div>

                                                <div class="col-lg-5">
                                                    <div class="project-content-left-5">
                                                        <div class="icon">
                                                            <img src="{{ asset('front/assets/images/project/02.svg') }}" alt="project">
                                                        </div>
                                                        <div class="title-area">
                                                            <h6 class="title">Pro Business Solution</h6>
                                                            <span>Case Study, Growth</span>
                                                        </div>
                                                        <div class="inner">
                                                            <p class="disc">
                                                                Ornare etiam laoreet dictumst nisl quisque scelerisque cras
                                                                ut
                                                                porta
                                                                interdum purus mattis iaculis litora turpis torquent posuere
                                                                sodales
                                                                himenaeos
                                                            </p>
                                                            <a href="project-details.html"
                                                                class="rts-btn btn-primary btn-white">View
                                                                Project</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="row g-5">
                                                <div class="col-lg-7">
                                                    <div class="thumbnail-project-5">
                                                        <img src="{{ asset('front/assets/images/project/16.webp') }}" alt="project">
                                                    </div>
                                                </div>

                                                <div class="col-lg-5">
                                                    <div class="project-content-left-5">
                                                        <div class="icon">
                                                            <img src="{{ asset('front/assets/images/project/02.svg') }}" alt="project">
                                                        </div>
                                                        <div class="title-area">
                                                            <h6 class="title">Pro Business Solution</h6>
                                                            <span>Case Study, Growth</span>
                                                        </div>
                                                        <div class="inner">
                                                            <p class="disc">
                                                                Ornare etiam laoreet dictumst nisl quisque scelerisque cras
                                                                ut
                                                                porta
                                                                interdum purus mattis iaculis litora turpis torquent posuere
                                                                sodales
                                                                himenaeos
                                                            </p>
                                                            <a href="project-details.html"
                                                                class="rts-btn btn-primary btn-white">View
                                                                Project</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-pagination-fraction"></div>
                                    <div class="swiper-button-next"><i class="fa-sharp fa-regular fa-arrow-right"></i></div>
                                    <div class="swiper-button-prev"><i class="fa-sharp fa-regular fa-arrow-left"></i></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

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

            <!-- rts pricing area start -->
            <div class="rts-pricing-area-one rts-section-gapBottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="pricing-three-title-area">
                                <div class="title-style-one left">
                                    <span class="pre">Price Table</span>
                                    <h2 class="title rts-text-anime-style-1">Pricing & Plans
                                    </h2>
                                </div>
                                <div class="pricing-tab-button-area">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                                data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                                aria-selected="true">Monthly PLan</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                                data-bs-target="#profile" type="button" role="tab" aria-controls="profile"
                                                aria-selected="false">Yearly
                                                Plan</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt--100">
                        <div class="col-12">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="row g-5">
                                        <!-- single pricing plane -->
                                        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                            <div class="pricing-wrapper-one">
                                                <div class="plane-process">
                                                    <span>/month</span>
                                                    <h3 class="title">$160</h3>
                                                </div>
                                                <!-- pricing header -->
                                                <div class="pricing-header-start">
                                                    <span class="pre-title">Starter Package</span>
                                                    <h4 class="title">
                                                        Basic Plan
                                                    </h4>
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
                                                    <a class="rts-btn btn-primary btn-white" href="contact.html">Buy
                                                        This</a>
                                                </div>
                                                <!-- pricing body end -->
                                            </div>
                                        </div>
                                        <!-- single pricing plane -->
                                        <!-- single pricing plane -->
                                        <div class="col-lg-4 col-md-6 col-sm-12 col-12 mt_sm--80">
                                            <div class="pricing-wrapper-one">
                                                <div class="plane-process">
                                                    <span>/month</span>
                                                    <h3 class="title">$180</h3>
                                                </div>
                                                <!-- pricing header -->
                                                <div class="pricing-header-start">
                                                    <span class="pre-title">Starter Package</span>
                                                    <h4 class="title">
                                                        Standard Plan
                                                    </h4>
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
                                                    <a class="rts-btn btn-primary" href="contact.html">Buy This</a>
                                                </div>
                                                <!-- pricing body end -->
                                            </div>
                                        </div>
                                        <!-- single pricing plane -->
                                        <!-- single pricing plane -->
                                        <div class="col-lg-4 col-md-6 col-sm-12 col-12 mt_md--80 mt_sm--80">
                                            <div class="pricing-wrapper-one">
                                                <div class="plane-process">
                                                    <span>/month</span>
                                                    <h3 class="title">$260</h3>
                                                </div>
                                                <!-- pricing header -->
                                                <div class="pricing-header-start">
                                                    <span class="pre-title">Starter Package</span>
                                                    <h4 class="title">
                                                        Premium Plan
                                                    </h4>
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
                                                    <a class="rts-btn btn-primary btn-white" href="contact.html">Buy
                                                        This</a>
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
                                        <div class="col-lg-4">
                                            <div class="pricing-wrapper-one">
                                                <div class="plane-process">
                                                    <span>/year</span>
                                                    <h3 class="title">$1800</h3>
                                                </div>
                                                <!-- pricing header -->
                                                <div class="pricing-header-start">
                                                    <span class="pre-title">Starter Package</span>
                                                    <h4 class="title">
                                                        Basic Plan
                                                    </h4>
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
                                                    <a class="rts-btn btn-primary" href="contact.html">Buy This</a>
                                                </div>
                                                <!-- pricing body end -->
                                            </div>
                                        </div>
                                        <!-- single pricing plane -->
                                        <!-- single pricing plane -->
                                        <div class="col-lg-4">
                                            <div class="pricing-wrapper-one">
                                                <div class="plane-process">
                                                    <span>/year</span>
                                                    <h3 class="title">$2000</h3>
                                                </div>
                                                <!-- pricing header -->
                                                <div class="pricing-header-start">
                                                    <span class="pre-title">Standard Plan</span>
                                                    <h4 class="title">
                                                        Standard Plan
                                                    </h4>
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
                                                    <a class="rts-btn btn-primary" href="contact.html">Buy This</a>
                                                </div>
                                                <!-- pricing body end -->
                                            </div>
                                        </div>
                                        <!-- single pricing plane -->
                                        <!-- single pricing plane -->
                                        <div class="col-lg-4">
                                            <div class="pricing-wrapper-one">
                                                <div class="plane-process">
                                                    <span>/year</span>
                                                    <h3 class="title">$2300</h3>
                                                </div>
                                                <!-- pricing header -->
                                                <div class="pricing-header-start">
                                                    <span class="pre-title">Premium Plan</span>
                                                    <h4 class="title">
                                                        Premium Plan
                                                    </h4>
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
                                                    <a class="rts-btn btn-primary" href="contact.html">Buy This</a>
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
            <!-- rts pricing area end -->

       @include('front.partials.testimonials.testimonial_7')

            <!-- appoinment  area start -->
            <div class="appoinment-area-seven bg_image ptb--100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="appoinment-main-wrapper-7">
                                <form action="#">
                                    <span>Make an Appointment</span>
                                    <h4 class="title">Request a free quote</h4>
                                    <div class="input-half-wrapper">
                                        <div class="signle-input">
                                            <input type="text" placeholder="Your Name">
                                        </div>
                                        <div class="signle-input">
                                            <input type="text" placeholder="Your Name">
                                        </div>
                                    </div>
                                    <div class="signle-input">
                                        <input type="text" placeholder="Your Name">
                                    </div>
                                    <div class="signle-input">
                                        <textarea placeholder="Type Your Message"></textarea>
                                    </div>
                                    <button class="btn-primary rts-btn ">Submit Message</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- appoinment  area end -->


         @include('front.partials.blog.blogs_5')

           @include('front.partials.cta.cta')
        </div>

        <div id="side-bar" class="side-bar header-two">
            <button class="close-icon-menu" title="Close menu"><i class="far fa-times"></i></button>
            <!-- inner menu area desktop start -->
            <div class="rts-sidebar-menu-desktop">
                <a class="logo-1" href="index.html"><img class="logo" src="{{ asset('front/assets/images/logo/01.svg') }}" alt="finbiz_logo"></a>
                <div class="body d-none d-xl-block">
                    <p class="disc">
                        We must explain to you how all seds this mistakens idea denouncing pleasures and praising account.
                        All seds this mistakens idea denouncing pleasures.
                    </p>
                    <div class="get-in-touch">
                        <!-- title -->
                        <div class="h6 title">Get In Touch</div>
                        <!-- title End -->
                        <div class="wrapper">
                            <!-- single -->
                            <div class="single">
                                <i class="fas fa-phone-alt"></i>
                                <a href="#">+8801234566789</a>
                            </div>
                            <!-- single ENd -->
                            <!-- single -->
                            <div class="single">
                                <i class="fas fa-envelope"></i>
                                <a href="#">example@gmail.com</a>
                            </div>
                            <!-- single ENd -->
                            <!-- single -->
                            <div class="single">
                                <i class="fas fa-globe"></i>
                                <a href="#">www.webexample.com</a>
                            </div>
                            <!-- single ENd -->
                            <!-- single -->
                            <div class="single">
                                <i class="fas fa-map-marker-alt"></i>
                                <a href="#">13/A, New Pro State, NYC</a>
                            </div>
                            <!-- single ENd -->
                        </div>
                        <div class="social-wrapper-two menu">
                            <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" aria-label="twitter"><i class="fab fa-twitter"></i></a>
                            <a href="#" aria-label="instagram"><i class="fab fa-instagram"></i></a>
                            <a href="#" aria-label="instagram"><i class="fab fa-instagram"></i></a>
                            <!-- <a href="#"><i class="fab fa-linkedin"></i></a> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile menu area start -->
            <div class="mobile-menu d-block d-xl-none">
                <nav class="nav-main mainmenu-nav mt--30">
                    <ul class="mainmenu metismenu" id="mobile-menu-active">
                        <li class="has-droupdown">
                            <a href="#" class="main" aria-expanded="false">Demos</a>
                            <ul class="submenu mm-collapse" style="height: 0px;">
                                <li><a href="index.html">Business One</a></li>
                                <li><a href="index-two.html">Business Two</a></li>
                                <li><a href="index-three.html">Business Three</a></li>
                                <li><a href="index-four.html">Business Four</a></li>
                                <li><a href="index-five.html">Finance Demo</a></li>
                                <li><a href="index-six.html">Marketing agency</a></li>
                                <li><a href="index-seven.html">Business agency</a></li>
                                <li><a href="index-eight.html">Business Management</a></li>
                                <li><a href="index-nine.html">Insurance Home</a></li>
                                <li><a href="index-ten.html">Business Website</a></li>
                                <li><a href="index-eleven.html">Business Parallax</a></li>
                                <li><a href="index-twelve.html">Business Video</a></li>
                                <li><a href="index-thirteen.html">Accountent One</a></li>
                                <li><a href="index-fourteen.html">Accountent Two</a></li>
                                <li><a href="index-fifteen.html">HR Website</a></li>
                                <li><a href="index-sixteen.html">Business Coach</a></li>
                                <li><a href="index-seventeen.html">SEO Website</a></li>
                                <li><a href="index-eighteen.html">Technology Demo</a></li>
                                <li><a href="index-nineteen.html">Business Investment</a></li>
                            </ul>
                        </li>
                        <li class="has-droupdown">
                            <a href="#" class="main" aria-expanded="false">Onepage</a>
                            <ul class="submenu mm-collapse" style="height: 0px;">
                                <li><a href="onepage-one.html">Business One</a></li>
                                <li><a href="onepage-two.html">Business Two</a></li>
                                <li><a href="onepage-three.html">Business Three</a></li>
                                <li><a href="onepage-four.html">Business Four</a></li>
                                <li><a href="onepage-five.html">Finance Demo</a></li>
                                <li><a href="onepage-six.html">Marketing agency</a></li>
                                <li><a href="onepage-seven.html">Business agency</a></li>
                                <li><a href="onepage-eight.html">Business Management</a></li>
                                <li><a href="onepage-nine.html">Insurance Home</a></li>
                                <li><a href="onepage-ten.html">Business Website</a></li>
                                <li><a href="onepage-eleven.html">Business Parallax</a></li>
                                <li><a href="onepage-twelve.html">Business Video</a></li>
                                <li><a href="onepage-thirteen.html">Accountent One</a></li>
                                <li><a href="onepage-fourteen.html">Accountent Two</a></li>
                                <li><a href="onepage-fifteen.html">HR Website</a></li>
                                <li><a href="onepage-sixteen.html">Business Coach</a></li>
                                <li><a href="onepage-eighteen.html">Technology Demo</a></li>
                                <li><a href="onepage-nineteen.html">Business Investment</a></li>
                            </ul>
                        </li>
                        <li class="has-droupdown">
                            <a href="#" class="main" aria-expanded="false">Pages</a>
                            <ul class="submenu mm-collapse" style="height: 0px;">
                                <li><a href="about.html">About
                                        Company</a></li>
                                <li><a href="service.html">Service</a></li>
                                <li><a href="service-details.html">Service
                                        Details</a>
                                </li>
                                <li><a href="service-details-2.html">Service
                                        Details 2</a>
                                </li>
                                <li><a href="project.html">Project</a>
                                </li>
                                <li><a href="team.html">Team</a>
                                </li>
                                <li><a href="team-details.html">Team
                                        Details</a>
                                </li>
                                <li><a href="pricing.html">Pricing</a>
                                </li>
                                <li><a href="appoinment.html">Appoinment</a>
                                </li>
                                <li><a href="history.html">Our
                                        History</a>
                                </li>
                                <li><a href="blog-list.html">Blog
                                        List</a>
                                </li>
                                <li><a href="blog-grid.html">Blog
                                        List</a>
                                </li>
                                <li><a href="blog-details.html">Blog
                                        Details</a>
                                </li>
                                <li><a href="blog-details-2.html">Blog
                                        Details 02</a>
                                </li>
                                <li><a href="faq.html">Faq's</a>
                                <li><a href="career.html">Career</a>
                                </li>
                                <li><a href="our-mission.html">Our
                                        Mission</a>
                                </li>
                                <li><a href="partners.html">Partners</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-droupdown">
                            <a href="#" class="main" aria-expanded="false">Services</a>
                            <ul class="submenu mm-collapse" style="height: 0px;">
                                <li><a class="mobile-menu-link" href="service.html">Service</a></li>
                                <li><a class="mobile-menu-link" href="service-details.html">Service Details</a></li>
                                <li><a class="mobile-menu-link" href="service-details-2.html">Service Details 2</a></li>
                                <li><a class="mobile-menu-link" href="service-details-3.html">Service Details 3</a></li>
                                <li><a class="mobile-menu-link" href="service-details-4.html">Service Details 4</a></li>
                                <li><a class="mobile-menu-link" href="service-details-5.html">Service Details 5</a></li>

                            </ul>
                        </li>
                        <li class="has-droupdown">
                            <a href="#" class="main" aria-expanded="false">Projects</a>
                            <ul class="submenu mm-collapse">
                                <li><a href="project.html">Project</a>
                                </li>
                                <li><a href="project-slider.html">Project
                                        Slider</a></li>
                                <li><a href="project-slider-2.html">Project
                                        Slider 2</a></li>
                                <li><a href="project-card-slider.html">Project
                                        Card Slider</a></li>
                                <li><a href="project-bg-dark.html">Project
                                        Bg Dark</a></li>
                                <li><a href="project-grid.html">Project
                                        Grid</a></li>
                                <li><a href="project-grid-col-2.html">Project
                                        Grid Col 2</a></li>
                                <li><a href="project-slider-grid.html">Grid Slider</a></li>
                                <li><a href="project-slider-overflow.html">Project Overflow</a>
                                </li>
                                <li><a href="project-grid-col-3.html">Project Grid Col 3</a>
                                </li>
                                <li><a href="project-bg-dark.html">Project
                                        Hide Content</a></li>


                                <li><a href="project-slider-2.html">Project
                                        Hide
                                        Content wide</a>
                                </li>
                                <li><a href="project-grid.html">Project
                                        Card Hover</a>
                                </li>
                                <li><a href="project-slider-2.html">Project
                                        Slider Image
                                        Zoom</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-droupdown">
                            <a href="#" class="main" aria-expanded="false">Shop Pages</a>
                            <ul class="submenu mm-collapse">
                                <li><a href="shop.html">Shop</a>
                                </li>
                                <li><a href="shop-single.html">Shop
                                        Details</a>
                                </li>
                                <li><a href="account.html">Account</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-droupdown">
                            <a href="#" class="main" aria-expanded="false">Blog</a>
                            <ul class="submenu mm-collapse">
                                <li><a href="blog-grid.html">Blog Grid</a></li>
                                <li><a href="blog-list.html">Blog List</a></li>
                                <li><a href="blog-details.html">Blog Details</a></li>
                                <li><a href="blog-details-2.html">Blog Details 2</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="contact.html" class="main" aria-expanded="false">Contact Us</a>
                        </li>
                    </ul>
                </nav>

                <div class="social-wrapper-one">
                    <ul>
                        <li>
                            <a href="#" aria-label="Facebook">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" aria-label="twitter">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" aria-label="youtube">
                                <i class="fa-brands fa-youtube"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" aria-label="linkedin">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- mobile menu area end -->
        </div>
        <!-- inner menu area desktop End -->


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