@extends('front.home.layouts.master')
@section('title', 'Service_Detail')

@section('content')

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
                            <img src="{{ asset($service->banner_image) }}" alt="">
                        </div>
                        <h3 class="title">{{$service->title}}</h3>
                        <p class="disc">
                           {{ $service->description }}
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
                                    <i class="{{ $service->icon }}" style="font-size:50px;"></i>
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
                                <img src="{{ asset($service->thumbnail) }}" alt="service">
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
                                <img src="{{ asset($service->banner_image) }}" alt="service">
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
                                Other Services
                            </h5>
                        </div>
                        <div class="wized-body">

                            @foreach ($services as $service)
                            
                            <ul class="single-categories">
                                <li><a href="{{ route('front.serviceDetail' , $service->id) }}">{{$service->title}} <i class="far fa-long-arrow-right"></i></a></li>
                            </ul>

                            @endforeach

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
                                <img src="{{ asset('front/assets/images/service/icon/01.svg') }}" alt="Business_downlaod">
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
                                <img src="{{ asset('front/assets/images/service/icon/02.svg') }}" alt="Business_downlaod">
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
                            <a href="#"><img src="{{ asset('front/assets/images/logo/06.svg') }}" alt="Business_logo"></a>
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
     
    @include('front.partials.appointment.appointment_9')

@endsection