<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Invena – A modern and responsive HTML template for consulting businesses. Perfect for finance, corporate, and agency websites. SEO-friendly, fast-loading, and easy to customize. Create a professional online presence today!">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.png">
    <title>Invena Business Consulting HTML Template</title>

    @include('front.home.layouts.partials.style')

    @yield('css')

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet preload" as="style">
    <link rel="preload" as="image" href="{{ asset('front/assets/images/banner/21.webp') }}" />
    <link rel="stylesheet preload" href="{{ asset('front/assets/css/style.css') }}" as="style">

</head>

<body>
    <style>
        .breadcrumb-service-detals-one {
            position: relative !important;
            z-index: 1 !important;
            margin-bottom: 170px !important;
        }

        .banner-inner-service-details-1.bg_image {
            position: relative !important;
            z-index: 1 !important;
            background-position: center center !important;
            background-repeat: no-repeat !important;
            background-size: cover !important;
        }

        .rts-service-details-area-main-bottom {
            position: relative;
            z-index: 2;
            background: #fff;
            margin-top: 0;
            /* ↓ was 100px, now 0 */
            padding-top: 30px;
            /* ↓ lighter spacing */
            padding-bottom: 60px;
            /* keep bottom breathing space */
            z-index: 5 !important;
            background: #fff !important;
            margin-top: 100px !important;
            padding-top: 60px !important;
        }

        .rts-single-wized.service {
            position: relative !important;
            z-index: 6 !important;
            background: #1b1b1b !important;
            padding: 40px !important;
        }

        .rts-single-wized.service {
            top: 0 !important;
            margin-top: 230px !important;
        }

        .container,
        .container-1754 {
            position: relative !important;
            z-index: 2 !important;
        }
    </style>
    
    @include('front.home.layouts.partials.header')

    @yield('content')


    <div class="breadcrumb-service-detals-one">
        <div class="container-1754">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-inner-service-details-1 bg_image">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="title-area-left">
                                        <span class="bg-title">Business</span>
                                        <h1 class="title rts-text-anime-style-1">
                                            Business Solution
                                        </h1>
                                        <p class="disc">
                                            Intrinsicly coordinate multifunctional functionalities reliable
                                            potentialities.
                                            Objectively envisioneer high in convergence through collaborative networks.
                                            Interactively generate B2C e-tailers for business data restore fully
                                            researched
                                            relationships through resource maximizing results.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- rts business details area left main -->
    <div class="rts-service-details-area-main-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <div class="service-details-left-area">
                        <div class="thumbnail">
                            <img src="{{ asset('front/assets/images/service/11.webp') }}" alt="">
                        </div>
                        <h3 class="title">Business Growth Mangment</h3>
                        <p class="disc">
                            Continually myocardinate holistic mindshare with client-based web services. Assertively
                            e-enable catalysts for change before tested markets. Phosfluorescently maintain wireless
                            scenarios after intermandated applications. Conveniently predominate revolutionary quality
                            vectors through future-proof manufactured products. Enthusiastically transform distinctive
                            collaboration.
                        </p>
                        <p class="disc">
                            Intrinsicly coordinate multifunctional functionalities reliable potentialities. Objectively
                            envisioneer high in convergence through collaborative networks. Interactively generate B2C
                            e-tailers for business data restore fully researched relationships through resource
                            maximizing results.
                        </p>
                        <div class="service-short-main-wrapper">
                            <div class="single-short-service">
                                <div class="icon">
                                    <img src="{{ asset('front/assets/images/service/05.svg') }}" alt="">
                                </div>
                                <div class="inner-content">
                                    <h5 class="title-sm">Instant Business Growth</h5>
                                    <p class="disc">
                                        Maintain wireless scerios after sure quality vectors future
                                    </p>
                                </div>
                            </div>
                            <div class="single-short-service">
                                <div class="icon">
                                    <img src="{{ asset('front/assets/images/service/06.svg') }}" alt="">
                                </div>
                                <div class="inner-content">
                                    <h5 class="title-sm">24/7 Quality Service</h5>
                                    <p class="disc">
                                        Maintain wireless scerios after sure quality vectors future
                                    </p>
                                </div>
                            </div>
                            <div class="single-short-service">
                                <div class="icon">
                                    <img src="{{ asset('front/assets/images/service/07.svg') }}" alt="">
                                </div>
                                <div class="inner-content">
                                    <h5 class="title-sm">Easy Customer Service</h5>
                                    <p class="disc">
                                        Maintain wireless scerios after sure quality vectors future
                                    </p>
                                </div>
                            </div>
                            <div class="single-short-service">
                                <div class="icon">
                                    <img src="{{ asset('front/assets/images/service/08.svg') }}" alt="">
                                </div>
                                <div class="inner-content">
                                    <h5 class="title-sm">Quality Cost Service</h5>
                                    <p class="disc">
                                        Maintain wireless scerios after sure quality vectors future
                                    </p>
                                </div>
                            </div>
                        </div>
                        <p class="disc mt--30">
                            Phosfluorescently maintain wireless scenarios after intermandated applications. Conveniently
                            unique predominate revolutionary quality vectors through future-proof manufactured products.
                            Objectively envisioneer high solution convergence through collaborative networks.
                            Interactively generate B2C e-tailers for business data restore fully researched
                            relationships through resource maximizing results.
                        </p>
                        <h3 class="title mt--50">2 Simple Steps to Process</h3>
                        <p class="disc">
                            Assertively e-enable catalysts for change before fully tested markets. Phosfluo rescently is
                            maintain solve wireless scenarios after intermandated applications. Conveniently predominate
                            busin revolutionary quality vectors through future-proof manufactured products.
                            Enthusiastically transform distinctive collaboration.
                        </p>
                        <p class="disc">
                            Phosfluorescently maintain wireless scenarios after intermandated applications. Conveniently
                            predominate misslat revolutionary quality vectors through future-proof manufactured
                            products.
                        </p>
                        <div class="single-step-service-details">
                            <div class="thumbnail">
                                <img src="{{ asset('front/assets/images/service/12.webp') }}" alt="service">
                            </div>
                            <div class="inner">
                                <h5 class="title-f">Define Your Objectives and Plan</h5>
                            </div>
                            <div class="feature">
                                <p class="single">Outline Key Features</p>
                                <p class="single">Choose a Domain Name</p>
                                <p class="single">Identify Purpose</p>
                                <p class="single">Understand Your Audience</p>
                            </div>
                        </div>
                        <div class="single-step-service-details">
                            <div class="thumbnail">
                                <img src="{{ asset('front/assets/images/service/13.webp') }}" alt="service">
                            </div>
                            <div class="inner">
                                <h5 class="title-f">Build and Design Your Website</h5>
                            </div>
                            <div class="feature">
                                <p class="single">Outline Key Features</p>
                                <p class="single">Choose a Domain Name</p>
                                <p class="single">Identify Purpose</p>
                                <p class="single">Understand Your Audience</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="col-xl-4 col-md-12 col-sm-12 col-12 mt_lg--60 pl--50 pl_lg--0 pl_md--0 pl-lg-controler pl_sm--0 mt-service-shorter">
                    <!-- single wizered start -->
                    <div class="rts-single-wized Categories service">
                        <div class="wized-header">
                            <h5 class="title">
                                Categories
                            </h5>
                        </div>
                        <div class="wized-body">
                            <!-- single categoris -->
                            <ul class="single-categories">
                                <li><a href="#">Business Solution <i class="far fa-long-arrow-right"></i></a></li>
                            </ul>
                            <!-- single categoris End -->
                            <!-- single categoris -->
                            <ul class="single-categories">
                                <li><a href="#">Strategy Growth <i class="far fa-long-arrow-right"></i></a></li>
                            </ul>
                            <!-- single categoris End -->
                            <!-- single categoris -->
                            <ul class="single-categories">
                                <li><a href="#">Finance Solution <i class="far fa-long-arrow-right"></i></a></li>
                            </ul>
                            <!-- single categoris End -->
                            <!-- single categoris -->
                            <ul class="single-categories">
                                <li><a href="#">Investment Policy <i class="far fa-long-arrow-right"></i></a></li>
                            </ul>
                            <!-- single categoris End -->
                            <!-- single categoris -->
                            <ul class="single-categories">
                                <li><a href="#">Tax Managment <i class="far fa-long-arrow-right"></i></a></li>
                            </ul>
                            <!-- single categoris End -->
                        </div>
                    </div>
                    <!-- single wizered End -->
                    <!-- single wizered start -->
                    <div class="rts-single-wized download service">
                        <div class="wized-header">
                            <h5 class="title">Download</h5>
                        </div>
                        <div class="wized-body">
                            <!-- single downlaod area start -->
                            <div class="single-download-area">
                                <img src="{{ asset('front/assets/images/service/icon/01.svg') }}"
                                    alt="Business_downlaod">
                                <div class="mid">
                                    <h6 class="title">
                                        Our Brochures
                                    </h6>
                                    <span>Downlaod</span>
                                </div>
                                <a class=" rts-btn btn-primary" href="#"><i class="fal fa-arrow-right"></i></a>
                            </div>
                            <!-- single downlaod area End -->
                            <!-- single downlaod area start -->
                            <div class="single-download-area">
                                <img src="{{ asset('front/assets/images/service/icon/02.svg') }}"
                                    alt="Business_downlaod">
                                <div class="mid">
                                    <h6 class="title">
                                        Company Details
                                    </h6>
                                    <span>Downlaod</span>
                                </div>
                                <a class=" rts-btn btn-primary" href="#"><i class="fal fa-arrow-right"></i></a>
                            </div>
                            <!-- single downlaod area End -->
                        </div>
                    </div>
                    <!-- single wizered End -->
                    <!-- single wizered start -->
                    <div class="rts-single-wized contact service">
                        <div class="wized-header">
                            <a href="#"><img src="{{ asset('front/assets/images/logo/06.svg') }}"
                                    alt="Business_logo"></a>
                        </div>
                        <div class="wized-body">
                            <h5 class="title">Need Help? We Are Here
                                To Help You</h5>
                            <a class="rts-btn btn-primary btn-white" href="#">Contact Us</a>
                        </div>
                    </div>
                    <!-- single wizered End -->
                </div>
            </div>
        </div>
    </div>
    <!-- rts business details area left main end -->


    @include('front.home.layouts.partials.footer')

    @include('front.home.layouts.partials.script')

    @yield('js')

</body>

</html>